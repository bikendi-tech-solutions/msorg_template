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

if(isset($_POST["changepin"]) && is_user_logged_in()){
if(!is_numeric($_POST["pin"])){
    die('{"status":"200","balance":"Pin Must Be Numeric!"}');
}
}
else{
    die("Not Permitted");
}

$id = get_current_user_id();
$username = get_user_by('ID',$id)->user_login;
$password = $_POST["password"];

$user = wp_authenticate($username, $password);
if(!is_wp_error($user)) {

    $current_pin = vp_getuser($id,"vp_pin", true);
    $change_to =  $_POST["pin"];

    if($current_pin == $change_to){
        die('{"status":"200","balance":"Your Can\'t Reset To Current Pin!"}');
    }
    else{
        vp_updateuser($id,"vp_pin",$change_to);
        die('{"status":"100","balance":"Done"}');
    }

} else {
	
    die('{"status":"200","balance":"Password In-Correct!"}');
}
?>