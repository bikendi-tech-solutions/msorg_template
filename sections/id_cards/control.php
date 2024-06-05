<?php
if(!defined('ABSPATH')){
    $pagePath = explode('/wp-content/', dirname(__FILE__));
    include_once(str_replace('wp-content/' , '', $pagePath[0] . '/wp-load.php'));
}
if(WP_DEBUG == false){
error_reporting(0);	
}
include_once(ABSPATH."wp-load.php");
include_once(ABSPATH.'wp-admin/includes/plugin.php');


include("var.php");


include("top.html");

switch($card_type){
    case"premium_card":
        include("premiumcard.html");
    break;
    case"landscape_card":
        include("landscape.html");
    break;
    case"portrait_card":
        include("portrait.html");
    break;
    default:
        die("CARD TYPE NOT KNOWN");
    break;
}

include("bottom.html");

?>