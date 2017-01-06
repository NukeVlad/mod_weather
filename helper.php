<?php
/*
 * mod_weather helper class
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

abstract class modWeatherHelper
{
    public static function getData(&$params)
    {
      // get Joomla! API
      // ===========================================================================
      $app     = JFactory::getApplication() ;
      $user    = JFactory::getUser() ;
      $date    = JFactory::getDate( 'now' , JFactory::getConfig()->get('offset') ) ;
      $uri     = JFactory::getURI() ;
      $doc     = JFactory::getDocument();

      $data = new JObject();

      return $data;
    }
}
?>
