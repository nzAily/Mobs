<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Bat extends MobsEntity {
	const TYPE_ID = EntityIds::BAT;
	const HEIGHT = 0.9;
	const basehealth = 6;
	const regenamount = 0.5;
	const drops = [];
	const xpamount = 0;
}
