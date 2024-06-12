<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Sheep extends MobsEntity {
	const TYPE_ID = EntityIds::SHEEP;
	const HEIGHT = 1.3;
	const basehealth = 8;
	const regenamount = 1;
	const drops = [["WOOL", 3, 100], ["RAW_MUTTON", 2, 100]]; // wool drops not here
	const xpamount = 2;
}
