<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Horse extends MobsEntity {
	const TYPE_ID = EntityIds::HORSE;
	const HEIGHT = 1.0;
	const basehealth = 30;
	const regenamount = 1;
	const drops = [["LEATHER", 2, 75]];
	const xpamount = 2;
}
