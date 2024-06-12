<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class CaveSpider extends MobsEntity {
	const TYPE_ID = EntityIds::CAVE_SPIDER;
	const HEIGHT = 0.5;
	const basehealth = 12;
	const regenamount = 1;
	const drops = [["STRING", 2, 75], ["SPIDER_EYE", 1, 33]];
	const xpamount = 5;
}
