<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class PufferFish extends MobsEntity {
	const TYPE_ID = EntityIds::PUFFERFISH;
	const HEIGHT = 1.0;
	const basehealth = 3;
	const regenamount = 0.5;
	const drops = [["PUFFERFISH", 1, 100], ["BONE_MEAL", 1, 5], ["BONE", 2, 25]];
	const xpamount = 2;
}
