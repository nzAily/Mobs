<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Blaze extends MobsEntity {
	const TYPE_ID = EntityIds::BLAZE;
	const HEIGHT = 1.8;
	const basehealth = 20;
	const regenamount = 1;
	const drops = [["BLAZE_ROD", 1, 75], ["BLAZE_POWDER", 2, 10]];
	const xpamount = 10;
}
