<?php
/**
* I try to figure out if user uses a computer, a tablet or a phone and redirect her to the right template
**/
require_once 'lib/mobile-detect/Mobile_Detect.php';
$detect = new Mobile_Detect;

$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$scriptVersion = $detect->getScriptVersion();

switch ($deviceType) {
    case 'computer':
        include(get_template_directory().'/inc/lg/single.php');
        break;
    case 'tablet':
        include(get_template_directory().'/inc/md/single.php');
        break;
    case 'phone':
        include(get_template_directory().'/inc/xs/single.php');
        break;
}
