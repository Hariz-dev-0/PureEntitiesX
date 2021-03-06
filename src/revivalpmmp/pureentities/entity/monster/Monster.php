<?php
declare(strict_types=1);

/**
 * PureEntitiesX: Mob AI Plugin for PMMP
 * Copyright (C)  2018 RevivalPMMP
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace revivalpmmp\pureentities\entity\monster;

use pocketmine\entity\Entity;

interface Monster{

	public function attackEntity(Entity $player);

	public function getDamage(int $difficulty = null);

	public function getMinDamage(int $difficulty = null);

	public function getMaxDamage(int $difficulty = null);

	public function setDamage($damage, int $difficulty = null);

	public function setMinDamage($damage, int $difficulty = null);

	public function setMaxDamage($damage, int $difficulty = null);

}