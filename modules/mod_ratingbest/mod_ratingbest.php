<?php
 // no direct access
defined('_JEXEC') or die;
require_once __DIR__ . '/helper.php';


//$toprated 	= modTopContentHelper::gettoprated();
$toprating	= modRatingBestHelper::getTopRatedContent();
$recent         = modRatingBestHelper::showArticles();
//$toprecent      = modTopContentHelper::getRecentTop();
require( JModuleHelper::getLayoutPath('mod_ratingbest'));

