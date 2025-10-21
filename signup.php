<?php
vtupress_auto_override();
if(!defined('ABSPATH')){
    $pagePath = explode('/wp-content/', dirname(__FILE__));
    include_once(str_replace('wp-content/' , '', $pagePath[0] . '/wp-load.php'));
}
if(WP_DEBUG == false){
error_reporting(0);	
}
include_once(ABSPATH."wp-load.php");
include_once(ABSPATH.'wp-admin/includes/plugin.php');
?>
<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="en" class="wf-lato-n3-active wf-lato-n4-active wf-lato-n7-active wf-lato-n9-active wf-flaticon-n4-inactive wf-fontawesome5solid-n4-active wf-fontawesome5regular-n4-active wf-fontawesome5brands-n4-active wf-simplelineicons-n4-active wf-active"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Signup - <?php echo get_bloginfo("name");?> | Buy Data, Airtime to cash, Bills Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#5230b0">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_site_icon_url();?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_site_icon_url();?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_site_icon_url();?>">

    <meta name="msapplication-TileColor" content="#5230b0 ">
    <meta name="msapplication-TileImage" content="/static/img/bg.jpg">
    <meta itemprop="name" content="<?php echo get_bloginfo("name");?> - Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
    <meta itemprop="description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN.">
    <meta itemprop="image" content="/static/img/bg.jpg">
    <link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/signup_files/w3.css">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="/static/img/bg.jpg">
    <meta name="twitter:title" content="<?php echo get_bloginfo("name");?> - Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
    <meta name="twitter:description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN.">
    <meta name="twitter:image:src" content="/static/img/bg.jpg">

    <!-- Open Graph data -->
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="<?php echo get_bloginfo("name");?> - Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
    <meta property="og:image" content="/static/img/bg.jpg">
    <meta property="og:description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN.">
    <meta property="og:site_name" content="<?php echo get_bloginfo("name");?>">
    <meta property="og:url" content="<?php echo get_site_url();?>">
    <meta property="og:type" content="website">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/signup_files/bootstrap.min.css">
    <link href="<?php echo plugins_url('msorg_template');?>/signup_files/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/signup_files/style(1).css">
    <link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/signup_files/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/signup_files/font-awesome.min.css">

    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">
    <link rel="icon" href="<?php echo get_site_icon_url();?>" type="image/x-icon">

    <!-- Fonts and icons -->
    <script src="<?php echo plugins_url('msorg_template');?>/signup_files/webfont.min.js.download"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    <link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/signup_files/css" media="all"><link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/signup_files/fonts.min.css" media="all"><script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands", "simple-line-icons"
                ],
                urls: ['/static/dashboard/assets/css/fonts.min.css']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <script>
        toastr.error('Error', 'Error Title')
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/signup_files/bootstrap.min(1).css">
    <link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/signup_files/atlantis.css">



</head>

<body class="login">
    <style>
        .wrapper {
          background: url("https://www.crushpixel.com/big-static9/preview4/portrait-young-black-woman-creative-281986.jpg");
          background-size: cover;
          box-shadow: inset 2000px 1000px 2000px rgb(242 242 242 / 73%)
        }
    
        button,.btn-primary, .btn, .btn-primary:hover, .btn-primary:focus, .btn-primary:disabled {
      background: <?php echo vp_getoption("msorg_from");?> !important;
      border: none !important;
    }
      </style>

    <div class="wrapper wrapper-login">

        <div class="container container-login animated fadeIn" style="display: block;">
            


            <div class="text-center">
                <!--
                    <img src="/static/styling/img/logo-color.png" height="50" class="mb-4">
                -->
                <div class="logo-top mb-4" style="#99999961;">
							<a href="<?php echo home_url();?>"><img src="<?php echo get_site_icon_url( 75, vp_option_array($option_array,'siteurl').'/wp-content/plugins/msorg_template/msorg_template/vlogo.png');?>" alt="" style="height:75px; width:75px;"/></a>
						</div>
                <h3 class="text-center"> Create Account </h3>
            </div>

            <form method="POST" class="signup">
                <input type="hidden" name="csrfmiddlewaretoken" value="JhmQrZ2EescvVUsfNGlTqjYc71vYdlxwXB8nlLj1LZq7ua8zasbYRfPtycLWBiQC">
                <div class="form-group">
                    
                    


<!--FirstName--> 
            <div id="div_id_firstname" class="form-group">
        
                        <label for="id_firstname" class=" requiredField">
                            FirstName<span class="asteriskField">*</span>
                        </label>
                            <div class="">
                                <input type="text" name="fun" maxlength="200" class="textinput textInput form-control fun" required="" id="id_firstname">
                            </div>
             
            </div>
<!--LastName-->
            <div id="div_id_lastname" class="form-group">
        
                    <label for="id_LastName" class=" requiredField">
                        LastName<span class="asteriskField">*</span>
                    </label>
                        <div class="">
                            <input type="text" name="lun" maxlength="200" class="textinput textInput form-control lun" required="" id="id_LastName">
                        </div>
         
            </div>
    
<!--UserName-->
    <div id="div_id_username" class="form-group">
        
            <label for="id_username" class=" requiredField">
                Username<span class="asteriskField">*</span>
            </label>
                <div class="">
                    <input type="text" name="username" autofocus="" class="textinput textInput form-control username" required="" id="id_username">
                </div>
    </div>
    
<!--Email-->
    <div id="div_id_email" class="form-group">
        
            <label for="id_email" class=" requiredField">
                Email<span class="asteriskField">*</span>
            </label>
                <div class="">
                    <input type="email" name="email" maxlength="254" class="emailinput form-control email" required="" id="id_email">
                </div>
    </div>
    
<!--Phone-->
    
    <div id="div_id_Phone" class="form-group">
        
            <label for="id_Phone" class=" requiredField">
                Phone<span class="asteriskField">*</span>
            </label>
                <div class="">
                    <input type="text" name="phone" maxlength="11" minlength="9" class="textinput textInput form-control phone" required="" id="id_Phone">
                </div>
    </div>
    


<!--Address--
    <div id="div_id_Address" class="form-group">
        
            <label for="id_Address" class=" requiredField">
                Address<span class="asteriskField">*</span>
            </label>
                <div class="">
                    <input type="text" name="Address" maxlength="500" class="textinput textInput form-control" required="" id="id_Address">
                </div>
    </div>
-->

<!--Referrer-->


    <?php
    if(is_plugin_active("vpmlm/vpmlm.php")){
        if(!isset($_GET["ref"]) && (strtolower(vp_getoption("id_on_reg")) != "false" && strtolower(vp_getoption("id_on_reg") != "no"))){
            ?>
            <div id="div_id_referer_username" class="form-group">
        
                <label for="id_referer_id" class="">
                    Referral ID [optional]
                </label>
                    <div class="">
                        <input type="text" name="ref" class="textinput textInput form-control" id="id_referer_id" class="regid" value="1">
            <small id="hint_id_referer_username" class="form-text text-muted">Leave blank if no referral</small>
        
                    </div>
        </div>
            <script>
            jQuery(".registernow").on("click",function(){
            if(jQuery.isNumeric(jQuery(".regid").val())){
                
            }else{
            var runitnow = "no";	
            alert("The Referrer Can Only Be In Number i.e user ID not letters");
            }
            });
            </script>
            </div>
            <?php
            }
            elseif(!isset($_GET["ref"]) && (strtolower(vp_getoption("id_on_reg")) == "false" || strtolower(vp_getoption("id_on_reg") == "no"))){
                ?>
                <div id="div_id_referer_username" class="form-group d-none">
        
                    <label for="id_referer_id" class="">
                        Referral ID [optional]
                    </label>
                        <div class="">
                            <input type="text" name="ref" class="textinput textInput form-control" id="id_referer_id" class="regid" value="1">
                <small id="hint_id_referer_username" class="form-text text-muted">Leave blank if no referral</small>
            
                        </div>
            </div>

                <script>
                jQuery(".registernow").on("click",function(){
                if(jQuery.isNumeric(jQuery(".regid").val())){
                    
                }else{
                var runitnow = "no";
                alert("The Referrer Can Only Be In Number i.e user ID not letters");
                }
                });
                </script>
                <?php
                }
    elseif(isset($_GET["ref"])){
        
    $myref = $_GET["ref"];
    ?>
    
    <div id="div_id_referer_username" class="form-group d-none">
        
        <label for="id_referer_id" class="">
            Referral ID [optional]
        </label>
            <div class="">
                <input type="text" name="ref" class="textinput textInput form-control" id="id_referer_id" class="regid" value="<?php echo $myref;?>">
    <small id="hint_id_referer_username" class="form-text text-muted">Leave blank if no referral</small>

            </div>
</div>
    <?php

    }
    }else{
        ?>
        <div id="div_id_referer_username" class="form-group d-none">
        
            <label for="id_referer_id" class="">
                Referral ID [optional]
            </label>
                <div class="">
                    <input type="text" name="ref" class="textinput textInput form-control" id="id_referer_id" class="regid" value="1">
        <small id="hint_id_referer_username" class="form-text text-muted">Leave blank if no referral</small>
    
                </div>
    </div>

    <?php	
    }

    ?>


    
<!--PIN-->
    <div id="div_id_Pin" class="form-group">
        
        <label for="id_Pin" class=" requiredField">
            Pin<span class="asteriskField">*</span>
        </label>
            <div class="">
                <input type="password" name="pin" maxlength="4" minlength="4" class="textinput textInput form-control" required="" id="id_Pin">
            </div>
</div>


<!--Password1-->
    <div id="div_id_password1" class="form-group">
        
            <label for="id_password1" class=" requiredField">
                Password<span class="asteriskField">*</span>
            </label>
            
                <div class="">
                    <input type="password" name="password1" class="textinput textInput form-control pswd1" required="" id="id_password1">
    
        <small id="hint_id_password1" class="form-text text-muted">Recommend -8 mix characters [i.e musa1234] </small>
    
                </div>
    </div>
    
<!--Password2-->  
    <div id="div_id_password2" class="form-group">
        
            <label for="id_password2" class=" requiredField">
                Confirm Password<span class="asteriskField">*</span>
            </label>
                <div class="">
                    <input type="password" name="pswd" class="textinput textInput form-control pswd" required="" id="id_password2">
        <small id="hint_id_password2" class="form-text text-muted">Enter same password as before</small>

                </div>
            
        
    </div>
    



             <!--TERMS AND CONDITIONS     
                    <div class="row form-sub m-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="agree" id="agree" required="">
                            <label class="custom-control-label" for="agree"><a href="#">I Agree the terms and
                                    conditions.</a></label>
                        </div>
                    </div>

            -->  

                    <div class="form-group form-action-d-flex mb-3">


                        <button type="button" class="btn btn-success  mt-3 mt-sm-0 fw-bold registernow" >Sign
                            Up</button>
                    </div>


                    <div class="login-account">
                        <span class="msg">Already a member?</span>
                        <a href="?login" id="show-signup" class="link">Sign In</a>
                    </div>
                </div>
            </form>
        </div>


    </div>

<script src="<?php echo get_option("siteurl").'/wp-content/plugins/vtupress/js/sweet.js';?>" ></script>
<script src="<?php echo plugins_url('vtupress');?>/js/jquery.js" ></script>
    <script src="<?php echo plugins_url('msorg_template');?>/signup_files/jquery.3.2.1.min.js.download"></script>
    <script src="<?php echo plugins_url('msorg_template');?>/signup_files/jquery-ui.min.js.download"></script>
    <script src="<?php echo plugins_url('msorg_template');?>/signup_files/popper.min.js.download"></script>
    <script src="<?php echo plugins_url('msorg_template');?>/signup_files/bootstrap.min.js.download"></script>
    <script src="<?php echo plugins_url('msorg_template');?>/signup_files/atlantis.min.js.download"></script>
    <script src="<?php echo plugins_url('msorg_template');?>/signup_files/toastr.min.js.download"></script>


    <!--
    <script>
        // by hameed
        const queryString = window.location.search;
        console.log(queryString);

        const urlParams = new URLSearchParams(queryString);
        const referal = urlParams.get('referal')
        console.log('referal = ', referal)
        if (referal != null) {
            $('#id_referer_username').val(referal).attr('readonly', 'readonly')
        }
    </script>
-->
<script>
jQuery(".registernow").click(function(){
    var pswd1 = jQuery(".pswd1").val();
    var pswd = jQuery(".pswd").val();
    if(pswd1 != pswd){
        alert("Password Mis-Match");
        return;
    }


	jQuery(".registernow").text("Please Wait...");
var runitnow = "yes";
runitnow = "yes";
var obj = {};
var toatl_input = jQuery(".signup input").length;
var run_obj;
var usernamer = jQuery(".signup .username").val();
var username = usernamer.indexOf(" ");
var emailr = jQuery(".signup .email").val();
var email = emailr.indexOf("@");
var phone;


var emptysp = "no";
for(run_obj = 0; run_obj <= toatl_input; run_obj++){
var current_input = jQuery(".signup input").eq(run_obj);


var obj_name = current_input.attr("name");
var obj_value = current_input.val();

if(typeof obj_name !== typeof undefined && obj_name !== false){
obj[obj_name] = obj_value;

if(current_input.val() === ""){

runitnow = "no";
emptysp = "yes";	
}else{
runitnow = "yes";
emptysp = "no";	
}

}
	
	
}

if(emptysp == "yes"){
	alert("All Fields Are Required");
	jQuery(".registernow").text("Sign Up");
}
else{
	emptysp == "no";
}


if(runitnow == "yes" ){
jQuery.ajax({
  url: "<?php echo vp_option_array($option_array,'siteurl').'/wp-content/plugins/vtupress/userlogin.php';?>",
  data: obj,
  dataType:'json',
  "cache": false,
  "async": true,
  error: function (jqXHR, exception) {
		jQuery(".registernow").text("Sign Up");
        var msg = "";
        if (jqXHR.status === 0) {
            msg = "No Connection.\n Verify Network.";
     swal({
  title: "Error!",
  text: msg,
  icon: "error",
  button: "Okay",
});
  
        } else if (jqXHR.status == 404) {
            msg = "Requested page not found. [404]";
			 swal({
  title: "Error!",
  text: msg,
  icon: "error",
  button: "Okay",
});
        } else if (jqXHR.status == 500) {
            msg = "Internal Server Error [500].";
			 swal({
  title: "Error!",
  text: msg,
  icon: "error",
  button: "Okay",
});
        } else if (exception === "parsererror") {
            msg = "Requested JSON parse failed.";
			   swal({
  title: msg,
  text: jqXHR.responseText,
  icon: "error",
  button: "Okay",
});
        } else if (exception === "timeout") {
            msg = "Time out error.";
			 swal({
  title: "Error!",
  text: msg,
  icon: "error",
  button: "Okay",
});
        } else if (exception === "abort") {
            msg = "Ajax request aborted.";
			 swal({
  title: "Error!",
  text: msg,
  icon: "error",
  button: "Okay",
});
        } else {
            msg = "Uncaught Error.\n" + jqXHR.responseText;
			 swal({
  title: "Error!",
  text: msg,
  icon: "error",
  button: "Okay",
});
        }
    },
  success: function(data) {
		jQuery(".registernow").text("Sign Up");
        if(data.status == "100" ){
	
            if("<?php echo htmlspecialchars(vp_getoption('resc'));?>" == 1000 || "<?php echo htmlspecialchars(vp_getoption('resc'));?>" == 10000){
        var ttt = "Proceed To Login";
    }
    else{

        var ttt = "<?php echo htmlspecialchars(vp_getoption('resc'));?>";
    }
		  swal({

  <?php
  if(strtolower(vp_getoption("email_verification")) == 'false' || strtolower(vp_getoption("email_verification")) == "no"){
	  ?>
  title: "Registered",
  text: ttt,
  <?php
  }
  else{
	?>
  title: "Email Verification Required",
  text: "Please check your inbox or spam folder for the verification email",
<?php	
  }
  ?>
  icon: "success",
  button: "Proceed",
}).then((value) => {
	window.location.href = "?login";
});
	  }
else if(data.status == "101" ){
	msg = data.message;
	
		  swal({
  title: "Error!",
  text: msg,
  icon: "error",
  button: "Retry",
});
	  }
	  else{
		  
	 swal({
  title: "Error",
  text: data,
  icon: "error",
  button: "Okay",
});
	  }
  },
  type: "POST"
});

}
else{
	jQuery(".registernow").text("Sign Up");
}
});

</script>

<script src="<?php echo get_option("siteurl").'/wp-content/plugins/vtupress/js/sweet.js';?>" ></script>
<script src="<?php echo plugins_url('vtupress');?>/js/jquery.js" ></script>


</body></html>