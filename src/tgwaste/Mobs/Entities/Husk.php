<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Husk extends MobsEntity {
	const TYPE_ID = EntityIds::HUSK;
	const HEIGHT = 1.95;
	const basehealth = 20;
	const regenamount = 1;
	const drops = [["ROTTEN_FLESH", 2, 75], ["CARROT", 1, 2.5], ["POTATO", 1, 2.5], ["IRON_INGOT", 1, 2.5]];
	const xpamount = 8;
}
