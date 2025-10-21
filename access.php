<?php
vtupress_auto_override();
error_reporting(0);
if(!defined('ABSPATH')){
    $pagePath = explode('/wp-content/', dirname(__FILE__));
    include_once(str_replace('wp-content/' , '', $pagePath[0] . '/wp-load.php'));
}
include_once(ABSPATH."wp-load.php");
include_once(ABSPATH .'wp-content/plugins/vtupress/functions.php');
error_reporting(0);

if(!isset($_GET)){
    include_once(ABSPATH."wp-content/plugins/msorg_template/login.php");
}
elseif(isset($_GET["reset_password"])){
    include_once(ABSPATH."wp-content/plugins/msorg_template/reset_password.php");
}
elseif(isset($_GET["activate"])){
    include_once(ABSPATH."wp-content/plugins/msorg_template/activate.php");
}
elseif(isset($_GET["register"]) || isset($_GET["ref"])){
include_once(ABSPATH."wp-content/plugins/msorg_template/signup.php");
}
else{
    include_once(ABSPATH."wp-content/plugins/msorg_template/login.php");
}
?>