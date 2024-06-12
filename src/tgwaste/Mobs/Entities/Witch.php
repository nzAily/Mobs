<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Witch extends MobsEntity {
	const TYPE_ID = EntityIds::WITCH;
	const HEIGHT = 1.95;
	const basehealth = 26;
	const regenamount = 2;
	const drops = [["STICK", 1, 25], ["GLASS_BOTTLE", 1, 12.5], ["GLOWSTONE_DUST", 1, 12.5], ["REDSTONE_DUST", 1, 12.5], ["SPIDER_EYE", 1, 12.5], ["GUNPOWDER", 1, 12.5], ["SUGAR", 1, 12.5]];
	const xpamount = 5;
}
