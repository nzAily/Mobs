<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Mooshroom extends MobsEntity {
	const TYPE_ID = EntityIds::MOOSHROOM;
	const HEIGHT = 1.4;
	const basehealth = 10;
	const regenamount = 1;
	const drops = [["RAW_BEEF", 1, 100], ["LEATHER", 1, 75]];
	const xpamount = 2;
}
