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

if(!isset($_GET["plain_receipt"])){
//TOP
include_once(__DIR__."/top.html");

}


//PAGES
if(!isset($_GET["vend"])){
include_once(__DIR__."/msorg.html");
}
else{

    switch($_GET["vend"]){
        case"dashboard":
            include_once(__DIR__."/msorg.html");
        break;
        case"data":
            if(vp_option_array($option_array,"setdata") == "checked"){
            echo "<div class='container'>";
            include_once(__DIR__."/services/data.php");
            echo "</div>";
            }
        break;
        case"savings":
            include_once(__DIR__."/sections/savings.php");
        break;
        case"bet":
            if(vp_option_array($option_array,"betcontrol") == "checked"){
            echo "<div class='container'>";
            include_once(__DIR__."/services/bet.php");
            echo "</div>";
            }
        break;
        case"airtime":
            if(vp_option_array($option_array,"setairtime") == "checked"){
            echo "<div class='container'>";
            include_once(__DIR__."/services/airtime.php");
            echo "</div>";
            }
        break;
        case"cable":
            if(is_plugin_active("bcmv/bcmv.php")){
                if(vp_option_array($option_array,"setcable") == "checked"){
            echo "<div class='container'>";
            include_once(__DIR__."/services/cable.php");
            echo "</div>";
            }
             }
        break;
        case"bill":
            if(is_plugin_active("bcmv/bcmv.php")){
                if(vp_option_array($option_array,"setbill") == "checked"){
            echo "<div class='container'>";
            include_once(__DIR__."/services/bill.php");
            echo "</div>";
                }
            }
        break;
        case"crypto":
            if(is_plugin_active("vprest/vprest.php") && vp_option_array($option_array,"resell") == "yes" && vp_option_array($option_array,"allow_crypto") == "yes"){
            echo "<div class='container'>";
            include_once(__DIR__."/sections/crypto-gift.php");
            echo "</div>";
            }
        break;
        case"gift-card":
            if(is_plugin_active("vprest/vprest.php") && vp_option_array($option_array,"resell") == "yes" && vp_option_array($option_array,"allow_cards") == "yes"){
            echo "<div class='container'>";
            include_once(__DIR__."/sections/crypto-gift.php");
            echo "</div>";
            }
        break;
        case"bvn":
            if( vp_option_array($option_array,"setbvn") == "yes" && vp_option_array($option_array,"vtupress_custom_bvn") == "yes"){
                echo "<div class='container'>";
                include_once(__DIR__."/sections/bvn.php");
                echo "</div>";
            }
        break;
        case"wallet":
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/wallet.php");
            echo "</div>";
            echo "</div>";
        break;
        case"pricing":
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/pricing.php");
            echo "</div>";
            echo "</div>";
        break;
        case"changepin":
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/changepin.php");
            echo "</div>";
            echo "</div>";
        break;
        case"changeemail":
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/changeemail.php");
            echo "</div>";
            echo "</div>";
        break;
        case"message":
            if(vp_option_array($option_array,"resell") == "yes"){
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/messages.php");
            echo "</div>";
            echo "</div>";
            }
        break;
        case"withdraw":
            if(vp_option_array($option_array,"resell") == "yes"){
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/withdraw-referral.php");
            echo "</div>";
            echo "</div>";
            }
        break;
        case"referral-details":
            if(vp_option_array($option_array,"resell") == "yes"){
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/ref-info.html");
            echo "</div>";
            echo "</div>";
            }
        break;
        case"referrals":
            if(vp_option_array($option_array,"resell") == "yes"){
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/withdraw-referral.php");
            echo "</div>";
            echo "</div>";
            }
        break;
        case"transfer":
            if(vp_option_array($option_array,"resell") == "yes"){
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/transfer.php");
            echo "</div>";
            echo "</div>";
            }
        break;
        case"transfer2":
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/transfer2.php");
            echo "</div>";
            echo "</div>";
        break;
        case"kyc":
            if(vp_option_array($option_array,"resell") == "yes"){
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/kyc.php");
            echo "</div>";
            echo "</div>";
            }
        break;
        case"upgrade":
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/upgrade.php");
            echo "</div>";
            echo "</div>";
        break;
        case"developer":
            if(vp_option_array($option_array,"resell") == "yes"){
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/developer.php");
            echo "</div>";
            echo "</div>";
            }
        break;
        case"stats":
            if(vp_option_array($option_array,"resell") == "yes"){
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/statistics.php");
            echo "</div>";
            echo "</div>";
            }
        break;
        case"history":
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/history.php");
            echo "</div>";
            echo "</div>";
            
        break;
        case"history-plain":
            echo "<div class='container p-2'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/sections/id_cards/control.php");
            echo "</div>";
            echo "</div>";
            
        break;
        case"customize":
            if(vp_option_array($option_array,"resell") == "yes" && current_user_can("administrator")){
            echo "<div class='container p-2 loginit'>";
            echo "<div class='mt-3 mx-2 p-2'>";
            include_once(__DIR__."/customizer.php");
            echo "</div>";
            echo "</div>";
            }
        break;
        default:
      
	    echo "<link rel=\"stylesheet\" href=\"".plugins_url('msorg_template')."/msorg_template/form.css?v=1\" media=\"all\">";
	
        echo "<div class='container'>";
        do_action("template_user_feature");
        echo "</div>";
        break;
    }

}

//BOTTOM
if(!isset($_GET["plain_receipt"])){
include_once(__DIR__."/bottom.html");
}
?>