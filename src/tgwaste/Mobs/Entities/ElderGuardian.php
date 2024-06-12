<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class ElderGuardian extends MobsEntity {
	const TYPE_ID = EntityIds::ELDER_GUARDIAN;
	const HEIGHT = 1.99;
	const basehealth = 80;
	const regenamount = 2;
	const drops = [["PRISMARINE_SHARD", 2, 75], ["SPONGE", 1, 100], ["TIDE_ARMOR_TRIM_SMITHING_TEMPLATE", 1, 20], ["RAW_FISH", 1, 5], ["PRISMARINE_CRYSTALS", 1, 33]];
	const xpamount = 10;
}
