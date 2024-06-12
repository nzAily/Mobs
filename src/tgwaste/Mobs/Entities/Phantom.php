<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Phantom extends MobsEntity {
	const TYPE_ID = EntityIds::PHANTOM;
	const HEIGHT = 1.0;
	const basehealth = 20;
	const regenamount = 1;
	const drops = [["PHANTOM_MEMBRANE", 1, 75], ["BONE_MEAL", 1, 25]];
	const xpamount = 5;
}
