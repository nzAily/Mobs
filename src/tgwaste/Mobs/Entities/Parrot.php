<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Parrot extends MobsEntity {
	const TYPE_ID = EntityIds::PARROT;
	const HEIGHT = 1.0;
	const basehealth = 6;
	const regenamount = 0.5;
	const drops = [["FEATHER", 2, 75]];
	const xpamount = 2;
}
