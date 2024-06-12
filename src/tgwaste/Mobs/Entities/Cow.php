<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Cow extends MobsEntity {
	const TYPE_ID = EntityIds::COW;
	const HEIGHT = 1.4;
	const basehealth = 10;
	const regenamount = 1;
	const drops = [["RAW_BEEF", 3, 100], ["LEATHER", 2, 75]];
	const xpamount = 2;
}
