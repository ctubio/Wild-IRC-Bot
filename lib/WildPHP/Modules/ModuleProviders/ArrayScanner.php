<?php

/*
	WildPHP - a modular and easily extendable IRC bot written in PHP
	Copyright (C) 2015 WildPHP

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

namespace WildPHP\Modules\ModuleProviders;

class ArrayScanner extends BaseScanner
{
	public function __construct(array $possibleModules = [])
	{
		// That's all, folks.
		if (!empty($possibleModules))
			$this->scanArray($possibleModules);
	}

	public function scanArray(array $array)
	{
		foreach ($array as $module)
			$this->tryAddValidModule($module);
	}
}