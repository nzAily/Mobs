<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Spider extends MobsEntity {
	const TYPE_ID = EntityIds::SPIDER;
	const HEIGHT = 0.9;
	const basehealth = 16;
	const regenamount = 2;
	const drops = [["STRING", 2, 75], ["SPIDER_EYE", 1, 33]];
	const xpamount = 5;
}
