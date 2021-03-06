<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_login
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Include the login functions only once
require_once __DIR__ . '/helper.php';


//$girlsMenu                  = modNakshatraCompatHelper::showGirlsMenu();
//$girlsNakshatra             = modNakshatraCompatHelper::showGirlsNakshatra();
//$girlsPada                  = modNakshatraCompatHelper::showGirlsPada();
//$boysMenu                   = modNakshatraCompatHelper::showBoysMenu();
//$boysNakshatra              = modNakshatraCompatHelper::showBoysNakshatra();
//$boysPada                   = modNakshatraCompatHelper::showBoysPada();
$layout                       = $params->get('layout', 'default');
require JModuleHelper::getLayoutPath('mod_nakshatracompat', $layout);

