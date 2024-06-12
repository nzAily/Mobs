<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Llama extends MobsEntity {
	const TYPE_ID = EntityIds::LLAMA;
	const HEIGHT = 1.87;
	const basehealth = 25;
	const regenamount = 1;
	const drops = [["LEATHER", 2, 75]];
	const xpamount = 2;
}
