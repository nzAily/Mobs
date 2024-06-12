<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Dolphin extends MobsEntity {
	const TYPE_ID = EntityIds::DOLPHIN;
	const HEIGHT = 1.0;
	const basehealth = 10;
	const regenamount = 1;
	const drops = [["RAW_FISH", 1, 50]];
	const xpamount = 2;
}
