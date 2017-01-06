<?php
/*
 * mod_weather default layout
 * Copyright (C) 2016  Yoel Benítez Fonseca
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

// no direct access
defined('_JEXEC') or die;
?>

<div class="weather-module-wrap<?php echo $moduleclass_sfx; ?>">
    <div class="weather-module-wrap-inner well" style="font-size: 130%">
      <a href="#myModal" data-toggle="modal">
      <div class="row-fluid">
        <div class="span12">
          <p class="text-center">
            <i class="wi wi-day-<?php echo $daystate; ?>"></i> <?php echo $daystatedesp; ?>
            <i class="wi wi-thermometer"></i> <?php echo $temperature; ?> <i class="wi wi-celsius"></i>
          </p>
        </div>
      </div>

      <div class="row-fluid">
        <div class="span12">
          <p class="text-center muted" style="font-size: 80%">
            <?php echo $city; ?>
          </p>
        </div>
      </div>

      </a>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"><?php echo $city; ?> - <?php echo $prodate; ?></h3>
      </div>
      <div class="modal-body">
        <?php echo $forecast; ?>
      </div>
    </div>
</div>
