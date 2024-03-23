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

if(isset($_POST["changemail"]) && is_user_logged_in()){
if(!is_email($_POST["email"])){
    die('{"status":"200","balance":"Enter A Valid Email!"}');
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

    $current_email = $user->user_email;
    $change_to =  $_POST["email"];

    if($current_email == $change_to){
        die('{"status":"200","balance":"Your Can\'t Reset To Current Email!"}');
    }
    elseif(email_exists($change_to)){
        die('{"status":"200","balance":"Email Already Exist!"}');
    }
    else{
        wp_update_user(array('user_email' => $change_to ));
        die('{"status":"100","balance":"Done"}');
    }

} else {
	
    die('{"status":"200","balance":"Password In-Correct!"}');
}
?>