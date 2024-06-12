<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Silverfish extends MobsEntity {
	const TYPE_ID = EntityIds::SILVERFISH;
	const HEIGHT = 0.3;
	const basehealth = 8;
	const regenamount = 2;
	const drops = [["IRON_NUGGET", 3, 33]]; // give them a use lol
	const xpamount = 5;
}
