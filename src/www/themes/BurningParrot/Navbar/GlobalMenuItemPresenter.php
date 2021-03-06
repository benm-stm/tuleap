<?php
/**
 * Copyright (c) Enalean, 2016. All Rights Reserved.
 *
 * This file is a part of Tuleap.
 *
 * Tuleap is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tuleap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tuleap. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Tuleap\Theme\BurningParrot\Navbar;

class GlobalMenuItemPresenter
{
    /** @var string */
    public $label;

    /** @var string */
    public $link;

    /** @var icon */
    public $icon;

    /** @var string */
    public $additional_classes;

    public function __construct($label, $link, $icon, $additional_classes)
    {
        $this->label              = $label;
        $this->link               = $link;
        $this->icon               = $icon;
        $this->additional_classes = $additional_classes;
    }
}
