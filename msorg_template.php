<?php
/**
 * VtuPress
 * 
 * @package Ms-Org Template
 * @author Akor Victor
 * @copyright 2020 vtupress 
 * @license GPL-3.0-or-later
 *
*Plugin Name: Ms-Org Template
*Plugin URI: http://vtupress.com
*Description: This add Ms-Org template into your vtu website
*Version: 1.9.5
*Author: Akor Victor
*Author URI: https://facebook.com/vtupressceo
Requires PHP: 7.4
License:      GPL3
License URI:  https://www.gnu.org/licenses/gpl.html
Domain Path:  /languages
*/

/*
{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {URI to Plugin License}.
*/

if(!defined('ABSPATH')){
    $pagePath = explode('/wp-content/', dirname(__FILE__));
    include_once(str_replace('wp-content/' , '', $pagePath[0] . '/wp-load.php'));
}
if(WP_DEBUG == false){
error_reporting(0);	
}
include_once(ABSPATH ."wp-load.php");
include_once(ABSPATH .'wp-admin/includes/plugin.php');
require_once(ABSPATH.'wp-admin/includes/upgrade.php');

require __DIR__.'/plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/bikendi-tech-solutions/msorg_template/',
	__FILE__,
	'msorg_template'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');
//$myUpdateChecker->setAuthentication('your-token-here');
$myUpdateChecker->getVcsApi()->enableReleaseAssets();


add_action("init","msorg_tmp");
function msorg_tmp(){
if(is_plugin_active("vtupress/vtupress.php")){
    include_once(ABSPATH .'wp-content/plugins/vtupress/functions.php');
    
    
//ADD THIS TEMPLATE TO VTUPRESS TEMPLATE LISTs
add_action("list_vtupress_templates","add_msorg_template");

function add_msorg_template(){
    echo"
    <option value='msorg_template'>MsOrg Template</option>
";

}

//ADD CUSTOMIZERS FUNC/DTA
vp_addoption("msorg_from","#F83AC3");
vp_addoption("msorg_to","#121068");

vp_addoption("msorg_referral_message","To enjoy our referral program, refer friends and family to our website and ensure they upgrade their accounts. EARN immediately the person upgrade his/her account to RESELLER/TOP USERS . THIS IS PARTNERSHIP PROFIT");
vp_addoption("msorg_referral_message_enable","yes");
vp_addoption("msorg_referral_copy_button_enable","yes");

vp_addoption("msorg_download_button_link","#");
vp_addoption("msorg_download_button_enable","yes");

vp_addoption("msorg_message_reseller"," Own a retailer website and retail all our services; Such as DATA AND AIRTIME");
vp_addoption("msorg_message_reseller_enable","yes");
vp_addoption("msorg_reseller_button_link","#");
vp_addoption("msorg_reseller_button_enable","yes");

vp_addoption("msorg_marquee_message","Welcome!");
vp_addoption("msorg_marquee_message_enable","yes");

vp_addoption("msorg_faq_link","#");
vp_addoption("msorg_faq_link_enable","yes");







}
}

?>