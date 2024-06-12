<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Pig extends MobsEntity {
	const TYPE_ID = EntityIds::PIG;
	const HEIGHT = 0.9;
	const basehealth = 10;
	const regenamount = 1;
	const drops = [["RAW_PORKCHOP", 3, 100], ["CARROT", 1, 1]];
	const xpamount = 2;
}
