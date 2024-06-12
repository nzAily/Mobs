<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Guardian extends MobsEntity {
	const TYPE_ID = EntityIds::GUARDIAN;
	const HEIGHT = 0.85;
	const basehealth = 30;
	const regenamount = 1;
	const drops = [["PRISMARINE_SHARD", 2, 75], ["RAW_FISH", 1, 40], ["PRISMARINE_CRYSTALS", 1, 40]];
	const xpamount = 10;
}
