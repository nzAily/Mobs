<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Slime extends MobsEntity {
	const TYPE_ID = EntityIds::SLIME;
	const HEIGHT = 0.51;
	const basehealth = 10;
	const regenamount = 1;
	const drops = [["SLIMEBALL", 2, 75], ["EMERALD", 1, 0.1]]; // easter egg lol
	const xpamount = 4;
}
