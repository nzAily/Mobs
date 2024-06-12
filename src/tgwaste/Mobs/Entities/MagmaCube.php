<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class MagmaCube extends MobsEntity {
	const TYPE_ID = EntityIds::MAGMA_CUBE;
	const HEIGHT = 1.0;
	const basehealth = 10;
	const regenamount = 1;
	const drops = [["MAGMA_CREAM", 1, 75]];
	const xpamount = 4;
}
