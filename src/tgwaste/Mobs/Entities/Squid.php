<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Squid extends MobsEntity {
	const TYPE_ID = EntityIds::SQUID;
	const HEIGHT = 0.8;
	const basehealth = 10;
	const regenamount = 1;
	const drops = [["INK_SAC", 3, 100]];
	const xpamount = 2;
}
