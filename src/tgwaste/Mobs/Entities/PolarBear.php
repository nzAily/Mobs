<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class PolarBear extends MobsEntity {
	const TYPE_ID = EntityIds::POLAR_BEAR;
	const HEIGHT = 1.4;
	const basehealth = 30;
	const regenamount = 2;
	const drops = [["RAW_FISH", 2, 75], ["RAW_SALMON", 2, 25], ["LEATHER", 2, 50]];
	const xpamount = 2;
}
