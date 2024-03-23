<?php

?>
<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="en" class="wf-flaticon-n4-inactive wf-fontawesome5solid-n4-active wf-fontawesome5regular-n4-active wf-fontawesome5brands-n4-active wf-simplelineicons-n4-active wf-lato-n7-active wf-lato-n9-active wf-lato-n4-active wf-lato-n3-active wf-active"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login - <?php echo get_bloginfo("name");?> | Buy Data, Airtime to cash, Bills Payment</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#5230b0 ">


  <meta name="msapplication-TileColor" content="#5230b0 ">
  <meta name="msapplication-TileImage" content="/static/img/bg.jpg">
  <meta itemprop="name" content="<?php echo get_bloginfo("name");?> - Buy Airtime and Data for all Network. Make payment for DSTV, GOTV, PHCN other services">
  <meta itemprop="description" content="Buy Cheap Internet Data Plan and Airtime Recharge for Airtel, 9mobile, GLO, MTN, Pay DSTV, GOTV, PHCN.">
  <meta itemprop="image" content="/static/img/bg.jpg">
  <link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/login_files/w3.css">

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
  <link href="<?php echo plugins_url('msorg_template');?>/login_files/style.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/login_files/style(1).css">

  <link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/msorg_template/bs/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/msorg_template/fontawesome/css/all.css">
  <link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/msorg_template/fonts.min.css" media="all">
  <link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/msorg_template/w3(1).css">
	<link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/msorg_template/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/msorg_template/atlantis.css">

  <script src="<?php echo plugins_url('msorg_template');?>/msorg_template/jquery.3.2.1.min.js"></script>
  

  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">

  <!-- Fonts and icons -->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


  <link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/login_files/css" media="all"><link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/login_files/fonts.min.css" media="all">
  <!-- CSS Files -->


  <!-- Fav Icon  -->
  <link rel="icon" href="<?php echo get_bloginfo("name");?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_site_icon_url();?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_site_icon_url();?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_site_icon_url();?>">
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
        <h3 class="text-center"> Sign In </h3>
      </div>

      <form method="POST" class="loginit">
        <input type="hidden" name="csrfmiddlewaretoken" value="3xy69wg7BU4aa2o3pb58S7JfTAwCTYO1tQnUvja3Joncym56zB42btt6VN6MUJTu">
        <div class="form-group">
          
          


    
    <div id="div_id_username" class="form-group">
        
            <label for="id_username" class=" requiredField">
                Username<span class="asteriskField">*</span>
            </label>
            
                <div class="">
                    <input type="text" name="username" autofocus="" id="username" autocapitalize="none" autocomplete="username" maxlength="150" class="textinput textInput form-control" required="" id="id_username">
                    
                </div>
            
        
    </div>
    
    <div id="div_id_password" class="form-group">
        
            <label for="password" class=" requiredField">
                Password<span class="asteriskField">*</span>
            </label>
        
                <div class="">
                    <input type="password" name="password" id="password" autocomplete="current-password" class="textinput textInput form-control" required="" id="password">
            
                </div>
            
        
    </div>
    



          

          <div class="form-group form-action-d-flex mb-3">

            <a href="?reset_password" class="link float-right">Forgot Password ?</a>

            <button type="button" class="btn btn-primary  mt-3 mt-sm-0 fw-bold loginow" id="loginow">Sign In</button>
          </div>


          <div class="login-account">
            <span class="msg">Don't have an account yet ?</span>
            <a href="?register" id="show-signup" class="link">Sign Up</a><br>
            <a href="?activate" id="show-signup" class="link">Activate Account</a>
          </div>
        </div>
      </form>
    </div>


  </div>

<script>


jQuery(".loginow").click(function(){
jQuery(".loginow").text("Please Wait...");
var obj = {};
var toatl_input = jQuery(".loginit input").length;
var run_obj;

for(run_obj = 0; run_obj <= toatl_input; run_obj++){
var current_input = jQuery(".loginit input").eq(run_obj);


var obj_name = current_input.attr("name");
var obj_value = current_input.val();

if(typeof obj_name !== typeof undefined && obj_name !== false){
obj[obj_name] = obj_value;
//alert(obj_name);
//alert(obj_value);
}
	
	
}


jQuery.ajax({
  url: "<?php echo vp_option_array($option_array,'siteurl').'/wp-content/plugins/vtupress/logit.php';?>",
  data: obj,
  dataType:'json',
  "cache": false,
  "async": true,
  error: function (jqXHR, exception) {
	  console.log(jqXHR);
       console.log(exception);
		jQuery(".loginow").text("Login");
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
  success: function(data,status,request) {
	  console.log(data);
       console.log(status);
       console.log(request);
		jQuery(".loginow").text("Login");
        if(data.status == "100" ){
	
		  swal({
  title: "Welcome",
  text: data.name,
  icon: "success",
  button: "Proceed",
}).then((value) => {
let searchParams = new URLSearchParams(window.location.search);
if(searchParams.has('vend')){
	window.location.href = "/vpaccount?"+searchParams+"#";
}
else{
	window.location.href = "/vpaccount?"+data.name;
}
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
		  msg = data.message;
	 swal({
  title: "Error Signing In",
  text:  msg,
  icon: "error",
  button: "Okay",
});
	  }
  },
  type: "POST"
});

});


</script>

<script src="<?php echo plugins_url('vtupress');?>/js/sweet.js" ></script>

<script src="<?php echo plugins_url('vtupress');?>/js/jquery.js" ></script>

  <script src="<?php echo plugins_url('msorg_template');?>/msorg_template/jquery.3.2.1.min.js"></script>
  <script src="<?php echo plugins_url('msorg_template');?>/msorg_template/jquery-ui.min.js"></script>
  <script src="<?php echo plugins_url('msorg_template');?>/msorg_template/popper.min.js"></script>
  <script src="<?php echo plugins_url('msorg_template');?>/msorg_template/bs/bootstrap.min.js" ></script>
	<script src="<?php echo plugins_url('msorg_template');?>/msorg_template/atlantis.min.js"></script>
  <script src="<?php echo plugins_url('msorg_template');?>/msorg_template/toastr.min.js"></script>



</body></html>