<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Skeleton extends MobsEntity {
	const TYPE_ID = EntityIds::SKELETON;
	const HEIGHT = 1.99;
	const basehealth = 20;
	const regenamount = 2;
	const drops = [["BOW", 1, 8.5], ["ARROW", 2, 75], ["BONE", 2, 75]];
	const xpamount = 5;
}
