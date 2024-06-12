<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Cat extends MobsEntity {
	const TYPE_ID = EntityIds::CAT;
	const HEIGHT = 1.0;
	const basehealth = 10;
	const regenamount = 1;
	const drops = [["STRING", 2, 75]];
	const xpamount = 2;
}
