<?php

declare(strict_types=1);

namespace tgwaste\Mobs;

use pocketmine\entity\Entity;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDespawnEvent;
use pocketmine\event\entity\EntityDeathEvent;
use pocketmine\event\entity\EntitySpawnEvent;
use pocketmine\event\player\PlayerItemUseEvent;
use pocketmine\player\Player;
use pocketmine\item\StringToItemParser;
use tgwaste\Mobs\Entities\Cow;
use tgwaste\Mobs\Registrations;


class Listen implements Listener {
	public function onPlayerJoinEvent(PlayerJoinEvent $event) {
		//Registrations::registerSpawnEggs($event->getPlayer());
		// to be added in the future
	}
	
	public function onEntityDamageByEntityEvent(EntityDamageByEntityEvent $event) {
		$entity = $event->getEntity();

		if (!($entity instanceof Player) && Main::$instance->toolsobj->pluginMobExists($entity->getNetworkTypeId())) {
			$entity->setScoreTag("1"); // to record player hit for xp
		}
	}

	public function onEntityDamageEvent(EntityDamageEvent $event) {
		$entity = $event->getEntity();
		
		if ($entity instanceof MobsEntity) {
			$entity->damageTag(); // updates tags more often (like when a mob is damaged in fire)
		}
	}

	public function onEntityDespawnEvent(EntityDespawnEvent $event) {
		$entity = $event->getEntity();
		if (method_exists($entity, "getName") and $entity instanceof Entity) {
			Main::$instance->toolsobj->spawnMessage($entity, "Despawned");
		}
	}

	public function onEntityDeathEvent(EntityDeathEvent $event) {
		$entity = $event->getEntity();
		if (method_exists($entity, "getName") and $entity instanceof Entity) {
			Main::$instance->toolsobj->spawnMessage($entity, "Died");
		}

		if (Main::$instance->mobdrops && Main::$instance->toolsobj->pluginMobExists($entity->getNetworkTypeId())) {
			$mobclass = Main::$instance->toolsobj->getPluginMobClass($entity->getNetworkTypeId());
			try {
				$drops = [];
				foreach ($mobclass::drops as $di) {
					$chance = mt_rand(1, 1000) / 10.0;
					if ($chance <= $di[2]) {
						$numitems = mt_rand(1, $di[1]);
						if ($numitems == 0) {
							$numitems++; // always at least one item
						}

						// fire and fire aspect
						if ($entity->isOnFire()) {
							$di[0] = str_replace("RAW", "COOKED", $di[0]);
						}

						$item = StringToItemParser::getInstance()->parse($di[0]);
						$item->setCount($numitems);
						array_push($drops, $item);
					}
				}
				$event->setDrops($drops);

				if (Main::$instance->mobexp && $entity->getScoreTag() == "1") {
					$usualxp = $mobclass::xpamount;
					$minXp = (int) floor($usualxp * 0.5);
					$maxXp = (int) ceil($usualxp * 1.5);
					$event->setXpDropAmount(mt_rand($minXp, $maxXp));
				}
			} catch (\Exception $e) {
				Main::$instance->getServer()->getLogger()->info("Item/XP Drop ERR: " . $e);
			}
		}
	}

	public function onEntitySpawnEvent(EntitySpawnEvent $event) {
		$entity = $event->getEntity();
		if ($entity instanceof Entity) {
			Main::$instance->toolsobj->spawnMessage($entity, "Spawned");
		}
	}

	public function onPlayerItemUseEvent(PlayerItemUseEvent $event) {
		$player = $event->getPlayer();
		$item = $event->getItem();
		$direction = $event->getDirectionVector();

		// simplist milk logic fr (anyone wanna deal with raycasts?)
		if ($item->getVanillaName() == "Bucket" && $player->getWorld()->getNearestEntity($player->getLocation(), 6, Cow::class, false)) {
			$player->getInventory()->setItemInHand(StringToItemParser::getInstance()->parse("MILK_BUCKET"));
		}

		// using left click for tags :skull
		if ($item->getVanillaName() == "Name Tag") {
			$player->sendMessage("§eLeft click mob to apply name tag!");	
		}
	}
}
