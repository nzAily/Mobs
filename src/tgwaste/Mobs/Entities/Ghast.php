<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Ghast extends MobsEntity {
	const TYPE_ID = EntityIds::GHAST;
	const HEIGHT = 4.0;
	const basehealth = 10;
	const regenamount = 0.5;
	const drops = [["GHAST_TEAR", 1, 50], ["GUNPOWDER", 2, 75]];
	const xpamount = 5;
}
