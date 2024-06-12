<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Chicken extends MobsEntity {
	const TYPE_ID = EntityIds::CHICKEN;
	const HEIGHT = 0.7;
	const basehealth = 4;
	const regenamount = 0.5;
	const drops = [["RAW_CHICKEN", 1, 100], ["FEATHER", 2, 75], ["EGG", 1, 1]];
	const xpamount = 2;
}
