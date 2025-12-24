<?php
// vtupress_auto_override();
if(!defined('ABSPATH')){
    $pagePath = explode('/wp-content/', dirname(__FILE__));
    include_once(str_replace('wp-content/' , '', $pagePath[0] . '/wp-load.php'));
}
if(WP_DEBUG == false){
error_reporting(0);	
}
include_once(ABSPATH."wp-load.php");
include_once(ABSPATH .'wp-content/plugins/vtupress/functions.php');
include_once(ABSPATH.'wp-admin/includes/plugin.php');

if(isset($_POST)){


vp_updateoption("msorg_from",$_POST["msorg_from"]);
vp_updateoption("msorg_to",$_POST["msorg_to"]);

vp_updateoption("msorg_referral_message",$_POST["msorg_referral_message"]);
vp_updateoption("msorg_referral_message_enable",$_POST["msorg_referral_message_enable"]);
vp_updateoption("msorg_referral_copy_button_enable",$_POST["msorg_referral_copy_button_enable"]);

vp_updateoption("msorg_download_button_link",$_POST["msorg_download_button_link"]);
vp_updateoption("msorg_download_button_enable",$_POST["msorg_download_button_enable"]);

vp_updateoption("msorg_message_reseller",$_POST["msorg_message_reseller"]);
vp_updateoption("msorg_message_reseller_enable",$_POST["msorg_message_reseller_enable"]);
vp_updateoption("msorg_reseller_button_link",$_POST["msorg_reseller_button_link"]);
vp_updateoption("msorg_reseller_button_enable",$_POST["msorg_reseller_button_enable"]);

vp_updateoption("msorg_marquee_message",$_POST["msorg_marquee_message"]);
vp_updateoption("msorg_marquee_message_enable",$_POST["msorg_marquee_message_enable"]);

vp_updateoption("msorg_faq_link",$_POST["msorg_faq_link"]);
vp_updateoption("msorg_faq_link_enable",$_POST["msorg_faq_link_enable"]);

die("100");
}

?>