<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SkeletonHorse extends MobsEntity {
	const TYPE_ID = EntityIds::SKELETON_HORSE;
	const HEIGHT = 1.6;
	const basehealth = 15;
	const regenamount = 1;
	const drops = [["BONE", 2, 75]];
	const xpamount = 2;
}
