<?php
    function make_active($pg="null"){
        if(!isset($_GET["vend"]) && $pg == "null"){
            echo "active";
        }
        elseif($_GET["vend"] == "dashboard" && $pg == "null"){
            echo "active";
        }
        elseif(isset($_GET["smile"])){
            if( $pg == "smile"){
                echo "active";
            }
        }
        elseif(isset($_GET["vend"])){
            if($_GET["vend"] == $pg){
            echo "active";
            }
        }
        else{
            //do nothing
        }
    }    	
?>
<ul class="nav nav-primary">
		
    <li class="nav-item <?php make_active();?>">
        
        <a href="/vpaccount">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
        </a>
    </li>

    <?php
if(vp_option_array($option_array,"setdata") == "checked"){
    ?>
        <li class="nav-item <?php make_active("data");?>">
            
            <a href="?vend=data">
                <i class="fas fa-signal"></i>
                <p>Buy Data</p>
            </a>
        </li>
    <?php
    }
    if(vp_getoption("betcontrol") == "checked"){
        ?>
            <li class="nav-item <?php make_active("bet");?>">
                
                <a href="?vend=bet">
                    <i class="fas fa-signal"></i>
                    <p>Bet Funding</p>
                </a>
            </li>
        <?php
 }
 if(vp_getoption("alphacontrol") == "checked" && vp_getoption("vtupress_custom_smile") == "yes"){
    ?>
        <li class="nav-item <?php make_active("alpha");?>">
            
            <a href="?vend=data&alpha">
                <i class="fas fa-signal"></i>
                <p>Buy Alpha TopUp</p>
            </a>
        </li>
    <?php
}
 if(vp_getoption("smilecontrol") == "checked" && vp_getoption("vtupress_custom_smile") == "yes"){
    ?>
        <li class="nav-item <?php make_active("smile");?>">
            
            <a href="?vend=data&smile">
                <i class="fas fa-signal"></i>
                <p>Buy Smile</p>
            </a>
        </li>
    <?php
}

if(vp_option_array($option_array,"setairtime") == "checked"){
?>
    
    <li class="nav-item <?php make_active("airtime");?>">
        
        <a href="?vend=airtime">
            <i class="fas fa-phone-square"></i>
            <p>Buy Airtime</p>
        </a>
    </li>

    <?php
}
if(is_plugin_active("bcmv/bcmv.php") && (vp_option_array($option_array,"setbill") == "checked" || vp_option_array($option_array,"setcable") == "checked")){
?>
    
    <li class="nav-item <?php make_active("cable");?> <?php make_active("bill");?>">
        
        <a data-toggle="collapse" href="#utilitiesControl" aria-controls="utilitiesControl" aria-expanded="false">
            <i class="fas fa-lightbulb"></i>
            <p>Utilities Payment</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="utilitiesControl">
            <ul class="nav nav-collapse">
            <?php
if(vp_option_array($option_array,"setbill") == "checked"){
?>
                <li>
                    <a href="?vend=bill"> <span class="sub-item">Bill Payment</span> </a>
                </li>
                <?php
}
if(vp_option_array($option_array,"setcable") == "checked"){
?>
                <li>
                    <a href="?vend=cable"> <span class="sub-item">Cable Subscription</span> </a>
                </li>
<?php
}
?>
            </ul>
        </div>
    </li>

<?php
}
if(is_plugin_active("vpepin/vpepin.php") && vp_option_array($option_array,"epinscontrol") == "checked" && vp_option_array($option_array,"resell") == "yes"){ 
    ?>
    <li class="nav-item <?php make_active("epins");?>">
        
        <a href="?vend=epins">
        <i class="fas fa-graduation-cap"></i>
            <p>Buy Exam Pins</p>
        </a>
    </li>
<?php
}
if(is_plugin_active("vpcards/vpcards.php") && vp_option_array($option_array,"cardscontrol") == "checked" && vp_option_array($option_array,"resell") == "yes"){ 
    ?>
    <li class="nav-item <?php make_active("cards");?>">
        
        <a href="?vend=cards">
        <i class="fas fa-barcode"></i>
            <p>Buy Recharge Cards</p>
        </a>
    </li>
<?php
}
if(is_plugin_active("vpdatas/vpdatas.php") && vp_option_array($option_array,"datascontrol") == "checked" && vp_option_array($option_array,"resell") == "yes"){ 
    ?>
    <li class="nav-item <?php make_active("datacard");?>">
        
        <a href="?vend=datacard">
        <i class="fas fa-barcode"></i>
            <p>Data Card</p>
        </a>
    </li>
<?php
}
if(is_plugin_active("vpsms/vpsms.php") && vp_option_array($option_array,"smscontrol") == "checked" && vp_option_array($option_array,"resell") == "yes"){
    ?>
    <li class="nav-item <?php make_active("sms");?>">
        
        <a href="?vend=sms">
        <i class="fas fa-sms"></i>
            <p>Bulk SMS</p>
        </a>
    </li>
<?php
}


if(is_plugin_active("vprest/vprest.php") && vp_option_array($option_array,"resell") == "yes" && (vp_option_array($option_array,"allow_crypto") == "yes" || vp_option_array($option_array,"allow_cards") == "yes")){

?>
    
    <li class="nav-item <?php make_active("crypto");?> <?php make_active("gift-card");?>">
        
        <a data-toggle="collapse" href="#cryptoControl" aria-controls="cryptoControl" aria-expanded="false">
        <i class="fas fa-coins"></i>
            <p>Crypto / Cards</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="cryptoControl">
            <ul class="nav nav-collapse">
            <?php
if(vp_option_array($option_array,"allow_crypto") == "yes"){
?>
                <li>
                    <a href="?vend=crypto"> <span class="sub-item">Crypto Currencies</span> </a>
                </li>
                <?php
}
if(vp_option_array($option_array,"allow_cards") == "yes"){
?>
                <li>
                    <a href="?vend=gift-card"> <span class="sub-item">Gift Cards</span> </a>
                </li>
<?php
}
?>
            </ul>
        </div>
    </li>
<?php
    }
?>


<!--History-->


<li class="nav-item <?php make_active("history");?>">
        
        <a data-toggle="collapse" href="#historyControl" aria-controls="historyControl" aria-expanded="false">
        <i class="fas fa-history"></i>
            <p>History</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="historyControl">
            <ul class="nav nav-collapse">
                <li>
                    <a href="?vend=history&for=wallet"> <span class="sub-item">Wallet</span> </a>
                </li>
                <?php
if(vp_option_array($option_array,"setairtime") == "checked"){
?>
                <li>
                    <a href="?vend=history&for=transactions&type=airtime"> <span class="sub-item">Airtime</span> </a>
                </li>
                <?php
}
if(vp_option_array($option_array,"setdata") == "checked"){
    ?>
    <li>
        <a href="?vend=history&for=transactions&type=data"> <span class="sub-item">Data</span> </a>
    </li>
    <?php
}
if(vp_option_array($option_array,"betcontrol") == "checked"){
    ?>
    <li>
        <a href="?vend=history&for=transactions&type=bet"> <span class="sub-item">Bet Funding</span> </a>
    </li>
    <?php
}
if(vp_option_array($option_array,"setcable") == "checked"){
                    ?>
                <li>
                    <a href="?vend=history&for=transactions&type=cable"> <span class="sub-item">Cable</span> </a>
                </li>
                <?php
}
if(vp_option_array($option_array,"setbill") == "checked"){
               ?>
                <li>
                    <a href="?vend=history&for=transactions&type=bill"> <span class="sub-item">Utilities</span> </a>
                </li>
                <?php
}
if(is_plugin_active("vpepin/vpepin.php") && vp_option_array($option_array,"epinscontrol") == "checked" && vp_option_array($option_array,"resell") == "yes"){ 
                ?>
                <li>
                    <a href="?vend=history&for=transactions&type=epins"> <span class="sub-item">Exam Pin</span> </a>
                </li>     
<?php
}
if(is_plugin_active("vpcards/vpcards.php") && vp_option_array($option_array,"cardscontrol") == "checked" && vp_option_array($option_array,"resell") == "yes"){ 
    ?>
    <li>
        <a href="?vend=history&for=transactions&type=ecards"> <span class="sub-item">Recharge Card</span> </a>
    </li>     
<?php
}
if(is_plugin_active("vpdatas/vpdatas.php") && vp_option_array($option_array,"datascontrol") == "checked" && vp_option_array($option_array,"resell") == "yes"){ 
    ?>
    <li>
        <a href="?vend=history&for=transactions&type=datacard"> <span class="sub-item">Data Card</span> </a>
    </li>     
<?php
}
if(is_plugin_active("vpsms/vpsms.php") && vp_option_array($option_array,"smscontrol") == "checked" && vp_option_array($option_array,"resell") == "yes"){
?>    
        <li>
            <a href="?vend=history&for=transactions&type=sms"> <span class="sub-item">SMS</span> </a>
        </li>     
    <?php
    }  
 if(strtolower(vp_option_array($option_array,"allow_withdrawal")) == "yes" && vp_option_array($option_array,"resell") == "yes" && strtolower($myplan) != strtolower("customer")){
        ?>    
            <li>
                <a href="?vend=history&for=withdrawal"> <span class="sub-item">Withdrawal</span> </a>
            </li>     
<?php
}
?> 
            </ul>
        </div>
</li>


<!--End Of History-->


<?php
if(is_plugin_active("vprest/vprest.php") && is_plugin_active("vpmlm/vpmlm.php") && vp_option_array($option_array,"resell") == "yes"){
    ?>
    
    <li class="nav-item <?php make_active("stats");?>">
            
            <a href="?vend=stats">
            <i class="fas fa-chart-line"></i>
                <p>Statistics</p>
            </a>
    </li>
    
<?php
 }
if(is_plugin_active("vprest/vprest.php") && vp_option_array($option_array,"resell") == "yes"){
?>

<li class="nav-item <?php make_active("message");?>">
        
        <a href="?vend=message">
        <i class="fas fa-envelope"></i>
            <p>Messages</p>
        </a>
</li>

<?php
}
?>

<li class="nav-item <?php make_active("wallet"); make_active("withdraw"); make_active("transfer");?>">
        
        <a data-toggle="collapse" href="#walletControl" aria-controls="walletControl" aria-expanded="false">
        <i class="fas fa-credit-card"></i>
            <p>Funds</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="walletControl">
            <ul class="nav nav-collapse">
                <li>
                    <a href="?vend=wallet"> <span class="sub-item">Wallet Top-Up</span> </a>
                </li>
                <?php
                if($bank_mode == "live"){
                ?>
                <li>
                    <a href="?vend=wallet&sub=auto"> <span class="sub-item">Account Number</span> </a>
                </li>
                <?php
                }
                ?>
                <li>
                    <a href="?vend=wallet&sub=manual"> <span class="sub-item">Manual Transfer</span> </a>
                </li>
                <?php
                if(vp_getoption("allow_card_method") == "yes"){
                    ?>
                <li>
                    <a href="?vend=wallet&sub=card"> <span class="sub-item">Wallet Top-up (Card)</span> </a>
                </li>
                <?php
                }
                if(vp_option_array($option_array,"airtime_to_cash") == "yes" || vp_option_array($option_array,"airtime_to_wallet") == "yes" && vp_option_array($option_array,"resell") == "yes"){
               ?>
                <li>
                    <a href="?vend=wallet&sub=airtime"> <span class="sub-item">Airtime To Wallet</span> </a>
                </li>
                <?php
                }
                if(vp_option_array($option_array,"enable_coupon") == "yes" && vp_option_array($option_array,"resell") == "yes"){
                ?>
                <li>
                    <a href="?vend=wallet&sub=coupon"> <span class="sub-item">Coupon Funding</span> </a>
                </li>         
<?php
                }
if(strtolower(vp_option_array($option_array,"allow_withdrawal")) == "yes" && strtolower($myplan) != strtolower("customer")){
?>
                <li>
                    <a href="?vend=withdraw"> <span class="sub-item">Withdraw</span> </a>
                </li>
<?php
}
if(vp_getoption('wallet_to_wallet') == "yes" && isset($level) && $level[0]->transfer == "yes"){
?>
                <li>
                    <a href="?vend=transfer"> <span class="sub-item">Transfer</span> </a>
                </li>
<?php
}
?>               
            </ul>
        </div>
</li>



<?php
if(is_plugin_active("vprest/vprest.php")  && vp_option_array($option_array,"resell") == "yes" && isset($level)){
?>    
    <li class="nav-item <?php make_active("pricing");?>">
        
        <a href="?vend=pricing">
            <i class="fas fa-money-bill"></i>
            <p>Pricing</p>
        </a>
    </li>

<?php
}
?>


<?php
if(is_plugin_active("vpmlm/vpmlm.php")  && vp_option_array($option_array,'mlm') == "yes"){
?>

<li class="nav-item <?php make_active("referral-details");?> <?php make_active("referrals");?>">
        
        <a data-toggle="collapse" href="#referalControl" aria-controls="referalControl" aria-expanded="false">
        <i class="fas fa-users"></i>
            <p>Referral</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="referalControl">
            <ul class="nav nav-collapse">
                <li>
                    <a href="?vend=referral-details"> <span class="sub-item">Referral Info</span> </a>
                </li>
                <li>
                    <a href="?vend=referrals"> <span class="sub-item">My Referrals</span> </a>
                </li>
            </ul>
        </div>
</li>

<?php
}
?>

<!--    
        <li class="nav-item">
    
        <a href="https://bwsub.com/FAQ/">
            <i class="fas fa-question-circle"></i>
            <p>F.A.Qs</p>
        </a>
    </li>

    <!-- 
        <li class="nav-item">
    
        <a href="#/self-service/">
            <i class="fas fa-users-cog"></i>
            <p>Self Service</p>
        </a>
    </li> -->


    <li class="nav-item <?php make_active("kyc"); make_active("upgrade"); make_active("changepin"); make_active("changeemail");?>">
        
        <a data-toggle="collapse" href="#accountControl" aria-controls="accountControl" aria-expanded="false">
        <i class="fas fa-user"></i>
            <p>Account</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="accountControl">
            <ul class="nav nav-collapse">
                <li>
                    <a href="?vend=wallet"> <span class="sub-item">Fund Wallet</span> </a>
                </li>
            <?php

if(is_plugin_active("vprest/vprest.php")  && vp_option_array($option_array,"resell") == "yes" && strtolower($kyc_data[0]->enable) == "yes"){

?>
                <li>
                    <a href="?vend=kyc"> <span class="sub-item">Verify Account</span> </a>
                </li>
<?php
}
if(is_plugin_active("vprest/vprest.php")  && vp_option_array($option_array,"resell") == "yes"){
?>
                <li>
                    <a href="?vend=upgrade"> <span class="sub-item">Upgrade Plan</span> </a>
                </li>
<?php
}
?>
                <li>
                    <a href="?vend=changepin"> <span class="sub-item">Change Pin</span> </a>
                </li>
                <li>
                    <a href="?vend=changeemail"> <span class="sub-item">Change Email</span> </a>
                </li>
                <?php
if( vp_getoption('enablevpay') == "yes" ){
    ?>
                    <li>
                        <a href="#" class="generate_account" for="vpay"> <span class="sub-item">Generate Vpay</span> </a>
                    </li>
<?php
}
if( vp_getoption('enable_monnify') == "yes" ){
?>
                    <li>
                        <a href="#" class="generate_account" for="monnify"> <span class="sub-item">Generate Monnify</span> </a>
                    </li>
<?php
}
?>
<?php
if( vp_getoption('enablesquadco') == "yes"  ){
?>
                <li>
                    <a href="#" class="generate_account" for="kuda"> <span class="sub-item">Generate Kuda</span> </a>
                </li>
<?php
}
?>
<?php
if( vp_getoption('enablekuda') == "yes" ){
?>
                <li>
                    <a href="#" class="generate_account" for="gtb"> <span class="sub-item">Generate GTBank</span> </a>
                </li>
<?php
}
?>

            </ul>
        </div>
    </li>

<script>

jQuery(".generate_account").on("click",function(){

    var forG = jQuery(this).attr("for");

    if(forG != "gtb" && forG !="monnify" && forG != "kuda" && forG != "vpay"){

        alert(forG+" is not a valid gateway");
        return;
    }

    var obj = {};
    obj["for"] = forG;
    
    jQuery.LoadingOverlay("show");	
jQuery.ajax({
	  url: '<?php echo esc_url(plugins_url('vtupress/generateAccounts.php'));?>',
	  data: obj,
	  dataType: 'text',
	  'cache': false,
	  "async": true,
	  error: function (jqXHR, exception) {
		  jQuery.LoadingOverlay("hide");
			var msg = "";
			if (jqXHR.status === 0) {
				msg = "No Connection.\n Verify Network.";
		 swal({
	  title: "Error!",
	  text: msg,
	  icon: "error",
	  button: "Okay",
	}).then((value) => {
		location.reload();
	}); 
	  
			} else if (jqXHR.status == 404) {
				msg = "Requested page not found. [404]";
				 swal({
	  title: "Error!",
	  text: msg,
	  icon: "error",
	  button: "Okay",
	}).then((value) => {
		location.reload();
	}); 
			} else if (jqXHR.status == 500) {
				msg = "Internal Server Error [500].";
				 swal({
	  title: "Error!",
	  text: msg,
	  icon: "error",
	  button: "Okay",
	}).then((value) => {
		location.reload();
	}); 
			} else if (exception === "parsererror") {
				msg = "Requested JSON parse failed.";
				   swal({
	  title: msg,
	  text: jqXHR.responseText,
	  icon: "error",
	  button: "Okay",
	}).then((value) => {
		location.reload();
	}); 
			} else if (exception === "timeout") {
				msg = "Time out error.";
				 swal({
	  title: "Error!",
	  text: msg,
	  icon: "error",
	  button: "Okay",
	}).then((value) => {
		location.reload();
	}); 
			} else if (exception === "abort") {
				msg = "Ajax request aborted.";
				 swal({
	  title: "Error!",
	  text: msg,
	  icon: "error",
	  button: "Okay",
	}).then((value) => {
		location.reload();
	}); 
			} else {
				msg = "Uncaught Error.\n" + jqXHR.responseText;
				 swal({
	  title: "Error!",
	  text: msg,
	  icon: "error",
	  button: "Okay",
	}).then((value) => {
		location.reload();
	}); 
			}
		},
	  
	  success: function(data) {
		  jQuery.LoadingOverlay("hide");
		  
			if(data == "100" || data == 100){
			  swal({
	  title: "Success!",
	  text: "Please confirm that you now have the dedicated account number for "+forG,
	  icon: "success",
	  button: "Okay",
	}).then((value) => {
		location.reload();
	});
		  }
		  else{
			jQuery.LoadingOverlay("hide");
	swal({
	  title: "Failed",
	  text: data,
	  icon: "error",
	  button: "Okay",
	}).then((value) => {
		location.reload();
	});   
		  }
	  },
	  type: 'POST'
	});
	
	});
</script>

  <!--  
    <li class="nav-item">
        
        <a href="https://bwsub.com/User/account_pin/">
            <i class="fas fa-key"></i>
            <p>Change Pin</p>
        </a>
    </li>


    <li class="nav-item">
        
        <a href="https://bwsub.com/EditProfile/">
            <i class="fas fa-cog"></i>
            <p>Setting</p>
        </a>
    </li>

    -->

    <?php
    if(is_plugin_active("vprest/vprest.php")  && vp_option_array($option_array,"resell") == "yes" && strtolower($level[0]->developer) == "yes"){
?> 
            <li class="nav-item <?php make_active("developer");?>">
        
            <a href="?vend=developer">
                <i class="fas fa-code"></i>
                <p>Developer's API</p>
            </a>
        </li>
<?php
}
?>

<?php
    if(vp_option_array($option_array,"resell") == "yes" && current_user_can("administrator")){
?> 
            <li class="nav-item <?php make_active("customize");?>">
        
            <a href="?vend=customize">
            <i class="fas fa-edit"></i>
                <p>Customizer</p>
            </a>
        </li>
<?php
}
?>

    <li class="nav-item">
        <a href="<?php 
$red = vp_getoption("vp_redirect");
if(strtolower($red) == "false"){
echo wp_logout_url(get_permalink());

}
else{
$link = get_site_url().'/'.$red;

echo wp_logout_url($link);
}


?>">
            <i class="fas fa-sign-out-alt"></i>
            <p>Logout</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="#version">
<?php
$vtupress_version = get_plugin_data(ABSPATH ."wp-content/plugins/vtupress/vtupress.php")["Version"];
$theme_version = get_plugin_data(ABSPATH ."wp-content/plugins/msorg_template/msorg_template.php")["Version"];
?>
               <i class="fas fa-info"></i>
            <p>Plugin <?php echo $vtupress_version;?></p>
            <p>Theme <?php echo $theme_version;?></p>
        </a>
    </li>
</ul>