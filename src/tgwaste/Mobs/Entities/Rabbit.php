<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Rabbit extends MobsEntity {
	const TYPE_ID = EntityIds::RABBIT;
	const HEIGHT = 0.5;
	const basehealth = 3;
	const regenamount = 0.5;
	const drops = [["RAW_RABBIT", 1, 75], ["RABBIT_HIDE", 1, 50], ["RABBIT_FOOT", 1, 10]];
	const xpamount = 2;
}
