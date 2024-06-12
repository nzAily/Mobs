<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class IronGolem extends MobsEntity {
	const TYPE_ID = EntityIds::IRON_GOLEM;
	const HEIGHT = 2.7;
	const basehealth = 100;
	const regenamount = 5;
	const drops = [["IRON_INGOT", 8, 100], ["POPPY", 2, 75]];
	const xpamount = 2;
}
