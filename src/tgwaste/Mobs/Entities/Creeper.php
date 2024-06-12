<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Creeper extends MobsEntity {
	const TYPE_ID = EntityIds::CREEPER;
	const HEIGHT = 1.7;
	const basehealth = 20;
	const regenamount = 1;
	const drops = [["GUNPOWDER", 2, 75]];
	const xpamount = 5;
}
