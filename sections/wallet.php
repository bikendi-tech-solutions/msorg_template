<?php
$id = get_current_user_id();
if(isset($_GET["vend"]) && $_GET["vend"]=="wallet"){

  $array["showbtn"] = "";
  $array["showmodal"] = "";
  function banksbtn(){
    global $array;
    if(!empty($array["showbtn"])){
      $msg = "";
    }else{
      $msg = "active";
      $array["showbtn"] = "active";
    }

    return $msg;
  }

  function accountNumber($aza, $generate){
    $aza = strtolower($aza);

    if(empty($aza) || $aza == "false" || $aza == "null"){
      echo "<span class='btn btn-primary generate_account' for='$generate'><i class='fa fa-history'></i> Generate Account Number</span>";
    }
    else{
      echo $aza;
    }
  }

  function banksmodal(){
    global $array;
    if(!empty($array["showmodal"])){
      $msg = "";
    }else{
      $msg = "show active";
      $array["showmodal"] = "show active";
    }

    return $msg;
  }
  
  function accordion_main($pg="null"){
    if(!isset($_GET["sub"])){
        return;
    }
    elseif($_GET["sub"] != $pg){
        echo "d-none";
    }
    else{
        //do nothing
    }
}

function accordion_sub($pg="null"){
  if(!isset($_GET["sub"])){
    echo "collapse";
}
  elseif($_GET["sub"] != $pg){
      echo "show";
  }
  else{
      //do nothing
  }
}

			?>
<script>
jQuery("body").ready(function(){
		jQuery("#airtimehist").show();
		jQuery("#datahist").hide();
		jQuery("#cablehist").hide();
		jQuery("#billhist").hide();
});
</script>
<?php

$user_email = get_userdata($id)->user_email;

$bvn = vp_getuser($id,"myBvn",true);
$nin = vp_getuser($id,"myNin",true);
if(vp_getoption('enable_monnify') == "yes"  || vp_getoption('enable_ncwallet') == "yes" || vp_getoption('enable_payvessel') == "yes" || vp_getoption('enable_billstack') == "yes" || vp_getoption('enable_nomba') == "yes"  || vp_getoption('enable_paymentpoint') == "yes"  || vp_getoption('enablesquadco') == "yes" ||  vp_getoption('enablevpay') == "yes"  || vp_getoption('enablekuda') == "yes" && ($bvn != 'false' || $nin != 'false'  ||  vp_getoption('enablevpay') == "yes" ) && (!empty($bvn) || !empty($nin)  ||  vp_getoption('enablevpay') == "yes" )  && (mb_strlen($bvn) > 10  ||  vp_getoption('enablevpay') == "yes" )){

  
  if(vp_getoption("charge_method") == "fixed"){
   $chargef =  "₦".floatval(vp_getoption("charge_back"));
   }
   else{
    $chargef =  floatval(vp_getoption("charge_back"))."%";
   }
  
   

?>
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item <?php echo accordion_main("auto");?> ">
    <h2 class="accordion-header" id="flush-headingZero">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseZero" aria-expanded="false" aria-controls="flush-collapseZero">
       Automated Funding
      </button>
    </h2>
    <div id="flush-collapseZero" class="accordion-collapse <?php echo accordion_sub("auto");?> " aria-labelledby="flush-headingZero" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body dark-white">
			
				<style>
/* Shoutout to Maite Rosalie for the gold svg gradient which can be seen here below. */

/* https://codepen.io/maiterosalie/pen/ppRRLV?q=gold+gradient&limit=all&type=type-pens */

.Wrap {
  display: flex;
  justify-content: center;
  align-items: center;
   background: #f4f6f9;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
}

.Wrap .Base {
  background: #ccc;
  height: 100%;
  width: 100%;
  border-radius: 15px;
}

.Wrap .Inner-wrap {
  background-color: #0c0014;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpolygon fill='%230d1838' points='1600%2C160 0%2C460 0%2C350 1600%2C50'/%3E%3Cpolygon fill='%230e315d' points='1600%2C260 0%2C560 0%2C450 1600%2C150'/%3E%3Cpolygon fill='%230f4981' points='1600%2C360 0%2C660 0%2C550 1600%2C250'/%3E%3Cpolygon fill='%231062a6' points='1600%2C460 0%2C760 0%2C650 1600%2C350'/%3E%3Cpolygon fill='%23117aca' points='1600%2C800 0%2C800 0%2C750 1600%2C450'/%3E%3C/g%3E%3C/svg%3E");
  background-size: auto 147%;
  background-position: center;
  position: relative;
  height: 100%;
  width: 100%;
  border-radius: 13px;
  box-sizing: border-box;
  color: #fff;
}

.Wrap p {
  margin: 0;
  font-size: 2em;
}

/* Controls top right logo */

.Wrap .Logo {
  position: absolute;
  height: 80px;
  width: 80px;
  right: 0;
  top: 0;
  padding: inherit;
  fill: #117aca;
}

/* Controls chip icon */

.Wrap .Chip {
  height: 40px;
  margin: 20px 0 25px 0;
}

.Wrap .gold path{
  fill: url(#gold-gradient);
}

.Wrap svg {
  display: block;
}

/* Controls name size */

.Wrap .Logo-name {
  transform: scale(.5);
  margin-left: -75px;
}

.Wrap .Card-number p {
  text-align: center;
}

.Wrap .Card-number {
  margin-top: -25px;
  display: flex;
  justify-content: center;
  color: rgba(255, 255, 255, 0.9);
}

.Wrap ul {
  padding: 0;
}

.Wrap ul li {
  list-style: none;
  float: left;
  margin: 0px 10px;
  font-size: 2.2em;
}

.Wrap #first-li {
  margin-left: 0;
}

.Wrap #last-li {
  margin-right: 0;
}

.Wrap .Expire {
  font-size: .75em;
  text-align: center;
}

.Wrap .Expire h4 {
  font-weight: 400;
  color: #aaa;
  margin: 0;
/*   word-spacing: 9999999px; */
  text-transform: uppercase;
}

.Expire p {
  font-size: 1.55em;
  color: rgba(255, 255, 255, 0.9);
}

.Wrap .Name h3 {
  position: relative;
  bottom: 0;
  text-align:center;
  text-transform: uppercase;
  font-weight: 400;
  font-size: 1.35em;
  color: rgba(255, 255, 255, 0.85);
}

.Wrap .Visa {
  width: 115px;
  position: relative;
  right: 0;
}

</style>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">


<div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                <?php if(vp_getoption('enablesquadco') == "yes"  && vp_getoption("vtupress_custom_gtbank") == "yes"){
                    
                    $squad = "GTBank";
                    $squadAccountName = vp_getuser($id,"squadAccountName");
                    $squadAccountNumber = vp_getuser($id,"squadAccountNumber");

                    if(vp_getoption("gtb_charge_method") == "fixed"){
                      $gtb_chargef =  "₦".floatval(vp_getoption("gtb_charge_back"));
                      }
                      else{
                       $gtb_chargef =  floatval(vp_getoption("gtb_charge_back"))."%";
                      }
                  ?>
                    

                  <li class="nav-item">
                    <a
                      class="nav-link <?php echo banksbtn();?>"
                      data-bs-toggle="tab"
                      href="#squad"
                      role="tab"
                      ><span class="hidden-sm-up"></span>
                      <span class="hidden-xs-down"><?php echo $squad;?></span></a
                    >
                  </li>



                  <?php } 
                      if(vp_getoption('enablevpay') == "yes"  && vp_getoption("vtupress_custom_vpay") == "yes"){
                    
                                      $vpay = "Vpay / Vfd";
                                      $vpayAccountName = vp_getuser($id,"vpayAccountName");
                                      $vpayAccountNumber = vp_getuser($id,"vpayAccountNumber");
    
                                      if(vp_getoption("vpay_charge_method") == "fixed"){
                                        $vpay_chargef =  "₦".floatval(vp_getoption("vpay_charge_back"));
                                        }
                                        else{
                                         $vpay_chargef =  floatval(vp_getoption("vpay_charge_back"))."%";
                                        }
                      ?>
                                      
                  
                                    <li class="nav-item">
                                      <a
                                        class="nav-link <?php echo banksbtn();?>"
                                        data-bs-toggle="tab"
                                        href="#vpay"
                                        role="tab"
                                        ><span class="hidden-sm-up"></span>
                                        <span class="hidden-xs-down"><?php echo $vpay;?></span></a
                                      >
                                    </li>
                  
                  
                  
                    <?php } 
                  if(vp_getoption('enable_ncwallet') == "yes"  && vp_getoption("vtupress_custom_ncwallet") == "yes"){
                    
                                  $ncwallet = "Bankly";
                                  $ncwallet_accountname = vp_getuser($id,"ncwallet_accountname");
                                  $ncwallet_accountnumber = vp_getuser($id,"ncwallet_accountnumber");

                                  if(vp_getoption("ncwallet_charge_method") == "fixed"){
                                      $ncwallet_chargef =  "₦".floatval(vp_getoption("ncwallet_charge_back"));
                                    }
                                    else{
                                      $ncwallet_chargef =  floatval(vp_getoption("ncwallet_charge_back"))."%";
                                    }
                  ?>
                                  
              
                                <li class="nav-item">
                                  <a
                                    class="nav-link <?php echo banksbtn();?>"
                                    data-bs-toggle="tab"
                                    href="#ncwallet"
                                    role="tab"
                                    ><span class="hidden-sm-up"></span>
                                    <span class="hidden-xs-down"><?php echo $ncwallet;?></span></a
                                  >
                                </li>
              
              
              
                <?php } 
                
                if(vp_getoption('enable_payvessel') == "yes"  && vp_getoption("vtupress_custom_payvessel") == "yes"){
                    
                  $payvessel = "9psb";
                  $payvessel_accountname = vp_getuser($id,"payvessel_accountname");
                  $payvessel_accountnumber = vp_getuser($id,"payvessel_accountnumber");

                  if(vp_getoption("payvessel_charge_method") == "fixed"){
                      $payvessel_chargef =  "₦".floatval(vp_getoption("payvessel_charge_back"));
                    }
                    else{
                      $payvessel_chargef =  floatval(vp_getoption("payvessel_charge_back"))."%";
                    }
  ?>
                  

                <li class="nav-item">
                  <a
                    class="nav-link <?php echo banksbtn();?>"
                    data-bs-toggle="tab"
                    href="#payvessel"
                    role="tab"
                    ><span class="hidden-sm-up"></span>
                    <span class="hidden-xs-down"><?php echo $payvessel;?></span></a
                  >
                </li>



<?php } 
                if(vp_getoption('enable_paymentpoint') == "yes"  && vp_getoption("vtupress_custom_paymentpoint") == "yes"){
                    
                  $paymentpoint = "Palmpay";
                  $paymentpoint_accountname = vp_getuser($id,"paymentpoint_accountname");
                  $paymentpoint_accountnumber = vp_getuser($id,"paymentpoint_accountnumber");

                  if(vp_getoption("paymentpoint_charge_method") == "fixed"){
                      $paymentpoint_chargef =  "₦".floatval(vp_getoption("paymentpoint_charge_back"));
                    }
                    else{
                      $paymentpoint_chargef =  floatval(vp_getoption("paymentpoint_charge_back"))."%";
                    }
              ?>
            

                <li class="nav-item">
                  <a
                    class="nav-link <?php echo banksbtn();?>"
                    data-bs-toggle="tab"
                    href="#paymentpoint"
                    role="tab"
                    ><span class="hidden-sm-up"></span>
                    <span class="hidden-xs-down"><?php echo $paymentpoint;?></span></a
                  >
                </li>

<?php } 

if(vp_getoption('enable_nomba') == "yes"  && vp_getoption("vtupress_custom_nomba") == "yes"){
                    
  $nomba = "Nombank";
  $nomba_accountname = vp_getuser($id,"nomba_accountname");
  $nomba_accountnumber = vp_getuser($id,"nomba_accountnumber");

  if(vp_getoption("nomba_charge_method") == "fixed"){
      $nomba_chargef =  "₦".floatval(vp_getoption("nomba_charge_back"));
    }
    else{
      $nomba_chargef =  floatval(vp_getoption("nomba_charge_back"))."%";
    }
?>


<li class="nav-item">
  <a
    class="nav-link <?php echo banksbtn();?>"
    data-bs-toggle="tab"
    href="#nomba"
    role="tab"
    ><span class="hidden-sm-up"></span>
    <span class="hidden-xs-down"><?php echo $nomba;?></span></a
  >
</li>

<?php } 

if(vp_getoption('enable_billstack') == "yes"  && vp_getoption("vtupress_custom_billstack") == "yes"){
                    
  $billstack = "9psb";
  $billstack_accountname = vp_getuser($id,"billstack_accountname");
  $billstack_accountnumber = vp_getuser($id,"billstack_accountnumber");

  if(vp_getoption("billstack_charge_method") == "fixed"){
      $billstack_chargef =  "₦".floatval(vp_getoption("billstack_charge_back"));
    }
    else{
      $billstack_chargef =  floatval(vp_getoption("billstack_charge_back"))."%";
    }
?>
  

<li class="nav-item">
  <a
    class="nav-link <?php echo banksbtn();?>"
    data-bs-toggle="tab"
    href="#billstack"
    role="tab"
    ><span class="hidden-sm-up"></span>
    <span class="hidden-xs-down"><?php echo $billstack;?></span></a
  >
</li>

<?php } 
 
                if(vp_getoption('enablekuda') == "yes"  && vp_getoption("vtupress_custom_kuda") == "yes"){
                    
                  $kuda = "Kuda";
                  $kudaAccountName = vp_getuser($id,"kudaAccountName");
                  $kudaAccountNumber = vp_getuser($id,"kudaAccountNumber");

                  if(vp_getoption("kuda_charge_method") == "fixed"){
                    $kuda_chargef =  "₦".floatval(vp_getoption("kuda_charge_back"));
                    }
                    else{
                     $kuda_chargef =  floatval(vp_getoption("kuda_charge_back"))."%";
                    }
                ?>
                  

                <li class="nav-item">
                  <a
                    class="nav-link <?php echo banksbtn();?>"
                    data-bs-toggle="tab"
                    href="#kuda"
                    role="tab"
                    ><span class="hidden-sm-up"></span>
                    <span class="hidden-xs-down"><?php echo $kuda;?></span></a
                  >
                </li>



                <?php } 
                  
                  if(vp_getoption('enable_monnify') == "yes"){?>
                  <li class="nav-item <?php if(preg_match("/null/i",$bank_name2) && (!empty($bank_name1) || !empty($bank_name)) ){echo "d-none";} ?>">
                    <a
                      class="nav-link <?php echo banksbtn();?>"
                      data-bs-toggle="tab"
                      href="#home"
                      role="tab"
                      ><span class="hidden-sm-up"></span>
                      <span class="hidden-xs-down"><?php echo $bank_name2;?></span></a
                    >
                  </li>
                  <li class="nav-item  <?php if(preg_match("/null/i",$bank_name1) && (!empty($bank_name2) || !empty($bank_name)) ){echo "d-none";} ?>">
                    <a
                      class="nav-link <?php echo banksbtn();?>"
                      data-bs-toggle="tab"
                      href="#profile"
                      role="tab"
                      ><span class="hidden-sm-up"></span>
                      <span class="hidden-xs-down"><?php echo $bank_name1;?></span></a
                    >
                  </li>
                  <li class="nav-item  <?php if(preg_match("/null/i",$bank_name) && (!empty($bank_name1) || !empty($bank_name2)) ){echo "d-none";} ?>">
                    <a
                      class="nav-link <?php echo banksbtn();?>"
                      data-bs-toggle="tab"
                      href="#messages"
                      role="tab"
                      ><span class="hidden-sm-up"></span>
                      <span class="hidden-xs-down"><?php echo $bank_name;?></span></a
                    >
                  </li>
                  <?php } ?>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabcontent-border">

                <?php if(vp_getoption('enablesquadco') == "yes"  && vp_getoption("vtupress_custom_gtbank") == "yes"){?>

<div class="tab-pane <?php echo banksmodal();?>" id="squad" role="tabpanel">
    <div class="p-md-20">

    <!-------------CONTENT----------->
<div class="Wrap mb-2 cdebit-card   position-relative">
<div class="Base">
<div class="Inner-wrap">

<div class=" container text-white p-4 roundeds">

<div class="row mb-3">
<div class="col Logo-name fs-3">
GTBANK
</div>
</div>

<div class="row mb-3">
<div class="col card-number text-center">
<p><?php accountNumber($squadAccountNumber,"gtb");?></p>
</div>
</div>

<div class="row mb-3">
<div class="col Name white  text-center">
<p><?php echo $squadAccountName;?></p>
</div>
</div>


<div class="row">
<div class="col fs-5">
VISA
</div>
<div class="col flex justify-content-end  fs-5">
<?php echo $gtb_chargef;?> Charge Applied
</div>
</div>

</div>

</div>
</div>
</div>


    <!------------------>
    </div>
  </div>

<?php } 

if(vp_getoption('enablevpay') == "yes"  && vp_getoption("vtupress_custom_vpay") == "yes"){?>

  <div class="tab-pane <?php echo banksmodal();?>" id="vpay" role="tabpanel">
      <div class="p-md-20">
  
      <!-------------CONTENT----------->
  <div class="Wrap mb-2 cdebit-card   position-relative">
  <div class="Base">
  <div class="Inner-wrap">
  
  <div class=" container text-white p-4 roundeds">
  
  <div class="row mb-3">
  <div class="col Logo-name fs-3">
    VPAY / Vfd
  </div>
  </div>
  
  <div class="row mb-3">
  <div class="col card-number text-center">
  <p><?php accountNumber($vpayAccountNumber,"vpay");?></p>
  </div>
  </div>
  
  <div class="row mb-3">
  <div class="col Name white  text-center">
  <p><?php echo $vpayAccountName;?></p>
  </div>
  </div>
  
  
  <div class="row">
  <div class="col fs-5">
  VISA
  </div>
  <div class="col flex justify-content-end  fs-5">
  <?php echo $vpay_chargef;?> Charge Applied
  </div>
  </div>
  
  </div>
  
  </div>
  </div>
  </div>
  
  
      <!------------------>
      </div>
    </div>
  
  <?php } 
if(vp_getoption('enable_ncwallet') == "yes"  && vp_getoption("vtupress_custom_ncwallet") == "yes"){?>

  <div class="tab-pane <?php echo banksmodal();?>" id="ncwallet" role="tabpanel">
      <div class="p-md-20">
  
      <!-------------CONTENT----------->
  <div class="Wrap mb-2 cdebit-card   position-relative">
  <div class="Base">
  <div class="Inner-wrap">
  
  <div class=" container text-white p-4 roundeds">
  
  <div class="row mb-3">
  <div class="col Logo-name fs-3">
    Bankly
  </div>
  </div>
  
  <div class="row mb-3">
  <div class="col card-number text-center">
  <p><?php accountNumber($ncwallet_accountnumber,"ncwallet");?></p>
  </div>
  </div>
  
  <div class="row mb-3">
  <div class="col Name white  text-center">
  <p><?php echo $ncwallet_accountname;?></p>
  </div>
  </div>
  
  
  <div class="row">
  <div class="col fs-5">
  VISA
  </div>
  <div class="col flex justify-content-end  fs-5">
  <?php echo $ncwallet_chargef;?> Charge Applied
  </div>
  </div>
  
  </div>
  
  </div>
  </div>
  </div>
  
  
      <!------------------>
      </div>
    </div>
  
  <?php }

if(vp_getoption('enable_payvessel') == "yes"  && vp_getoption("vtupress_custom_payvessel") == "yes"){?>

  <div class="tab-pane <?php echo banksmodal();?>" id="payvessel" role="tabpanel">
      <div class="p-md-20">
  
      <!-------------CONTENT----------->
  <div class="Wrap mb-2 cdebit-card   position-relative">
  <div class="Base">
  <div class="Inner-wrap">
  
  <div class=" container text-white p-4 roundeds">
  
  <div class="row mb-3">
  <div class="col Logo-name fs-3">
    9psb / 9 Payment Service Bank
  </div>
  </div>
  
  <div class="row mb-3">
  <div class="col card-number text-center">
  <p><?php accountNumber($payvessel_accountnumber,"payvessel");?></p>
  </div>
  </div>
  
  <div class="row mb-3">
  <div class="col Name white  text-center">
  <p><?php echo $payvessel_accountname;?></p>
  </div>
  </div>
  
  
  <div class="row">
  <div class="col fs-5">
  VISA
  </div>
  <div class="col flex justify-content-end  fs-5">
  <?php echo $payvessel_chargef;?> Charge Applied
  </div>
  </div>
  
  </div>
  
  </div>
  </div>
  </div>
  
  
      <!------------------>
      </div>
    </div>
  
  <?php }
  
  if(vp_getoption('enable_billstack') == "yes"  && vp_getoption("vtupress_custom_billstack") == "yes"){?>

    <div class="tab-pane <?php echo banksmodal();?>" id="billstack" role="tabpanel">
        <div class="p-md-20">
    
        <!-------------CONTENT----------->
    <div class="Wrap mb-2 cdebit-card   position-relative">
    <div class="Base">
    <div class="Inner-wrap">
    
    <div class=" container text-white p-4 roundeds">
    
    <div class="row mb-3">
    <div class="col Logo-name fs-3">
      9psb / 9 Payment Service Bank
    </div>
    </div>
    
    <div class="row mb-3">
    <div class="col card-number text-center">
    <p><?php accountNumber($billstack_accountnumber,"billstack");?></p>
    </div>
    </div>
    
    <div class="row mb-3">
    <div class="col Name white  text-center">
    <p><?php echo $billstack_accountname;?></p>
    </div>
    </div>
    
    
    <div class="row">
    <div class="col fs-5">
    VISA
    </div>
    <div class="col flex justify-content-end  fs-5">
    <?php echo $billstack_chargef;?> Charge Applied
    </div>
    </div>
    
    </div>
    
    </div>
    </div>
    </div>
    
    
        <!------------------>
        </div>
      </div>
    
    <?php }


  
if(vp_getoption('enable_paymentpoint') == "yes"  && vp_getoption("vtupress_custom_paymentpoint") == "yes"){?>

  <div class="tab-pane <?php echo banksmodal();?>" id="paymentpoint" role="tabpanel">
      <div class="p-md-20">
  
      <!-------------CONTENT----------->
  <div class="Wrap mb-2 cdebit-card   position-relative">
  <div class="Base">
  <div class="Inner-wrap">
  
  <div class=" container text-white p-4 roundeds">
  
  <div class="row mb-3">
  <div class="col Logo-name fs-3">
    Palmpay
  </div>
  </div>
  
  <div class="row mb-3">
  <div class="col card-number text-center">
  <p><?php accountNumber($paymentpoint_accountnumber,"paymentpoint");?></p>
  </div>
  </div>
  
  <div class="row mb-3">
  <div class="col Name white  text-center">
  <p><?php echo $paymentpoint_accountname;?></p>
  </div>
  </div>
  
  
  <div class="row">
  <div class="col fs-5">
  VISA
  </div>
  <div class="col flex justify-content-end  fs-5">
  <?php echo $paymentpoint_chargef;?> Charge Applied
  </div>
  </div>
  
  </div>
  
  </div>
  </div>
  </div>
  
  
      <!------------------>
      </div>
    </div>
  
  <?php }

    
if(vp_getoption('enable_nomba') == "yes"  && vp_getoption("vtupress_custom_nomba") == "yes"){?>

  <div class="tab-pane <?php echo banksmodal();?>" id="nomba" role="tabpanel">
      <div class="p-md-20">
  
      <!-------------CONTENT----------->
  <div class="Wrap mb-2 cdebit-card   position-relative">
  <div class="Base">
  <div class="Inner-wrap">
  
  <div class=" container text-white p-4 roundeds">
  
  <div class="row mb-3">
  <div class="col Logo-name fs-3">
    Nombank 
  </div>
  </div>
  
  <div class="row mb-3">
  <div class="col card-number text-center">
  <p><?php accountNumber($nomba_accountnumber,"nomba");?></p>
  </div>
  </div>
  
  <div class="row mb-3">
  <div class="col Name white  text-center">
  <p><?php echo $nomba_accountname;?></p>
  </div>
  </div>
  
  
  <div class="row">
  <div class="col fs-5">
  VISA
  </div>
  <div class="col flex justify-content-end  fs-5">
  <?php echo $nomba_chargef;?> Charge Applied
  </div>
  </div>
  
  </div>
  
  </div>
  </div>
  </div>
  
  
      <!------------------>
      </div>
    </div>
  
  <?php }

if(vp_getoption('enablekuda') == "yes"  && vp_getoption("vtupress_custom_kuda") == "yes"){?>

  <div class="tab-pane <?php echo banksmodal();?>" id="kuda" role="tabpanel">
      <div class="p-md-20">
  
      <!-------------CONTENT----------->
  <div class="Wrap mb-2 cdebit-card   position-relative">
  <div class="Base">
  <div class="Inner-wrap">
  
  <div class=" container text-white p-4 roundeds">
  
  <div class="row mb-3">
  <div class="col Logo-name fs-3">
KUDA
  </div>
  </div>
  
  <div class="row mb-3">
  <div class="col card-number text-center">
  <p><?php accountNumber($kudaAccountNumber,"kuda");?></p>
  </div>
  </div>
  
  <div class="row mb-3">
  <div class="col Name white  text-center">
  <p><?php echo $kudaAccountName;?></p>
  </div>
  </div>
  
  
  <div class="row">
  <div class="col fs-5">
  VISA
  </div>
  <div class="col flex justify-content-end  fs-5">
  <?php echo $kuda_chargef;?> Charge Applied
  </div>
  </div>
  
  </div>
  
  </div>
  </div>
  </div>
  
  
      <!------------------>
      </div>
    </div>
  
  <?php } if(vp_getoption('enable_monnify') == "yes"){?>


                  <div class="tab-pane <?php echo (is_numeric($account_number2)) ? banksmodal():""; ?>" id="home" role="tabpanel">
                    <div class="p-md-20">

                                          <!-------------CONTENT----------->
                      <div class="Wrap mb-2 cdebit-card   position-relative">
                              <!-- <div class="position-absolute bg bg-primary w-100 h-100">

                                

                              </div>-->
                              <div class="Base">
                                  <div class="Inner-wrap">

                                    <div class=" container text-white p-4 roundeds">

                                      <div class="row mb-3">
                                        <div class="col Logo-name fs-3">
                                        <?php echo $bank_name2;?>
                                        </div>
                                      </div>

                                      <div class="row mb-3">
                                        <div class="col card-number text-center">
                                        <p><?php accountNumber($account_number2,"monnify");?></p>
                                        </div>
                                      </div>

                                      <div class="row mb-3">
                                        <div class="col Name white  text-center">
                                        <p><?php echo $account_name2;?></p>
                                        </div>
                                      </div>


                                      <div class="row">
                                        <div class="col fs-5">
                                          VISA
                                        </div>
                                        <div class="col flex justify-content-end  fs-5">
                                          <?php echo $chargef;?> Charge Applied
                                        </div>
                                      </div>

                                    </div>

                                  </div>
                              </div>
                      </div>


                                          <!------------------>
                    </div>
                  </div>
                  <div class="tab-pane <?php echo (is_numeric($account_number1)) ? banksmodal():""; ?>" id="profile" role="tabpanel">
                    <div class="p-md-20">

                      <!-------------CONTENT----------->

                      <div class="Wrap mb-2 cdebit-card   position-relative">
                        <!-- <div class="position-absolute bg bg-primary w-100 h-100">

                          

                        </div>-->
                        <div class="Base">
                            <div class="Inner-wrap">

                              <div class=" container text-white p-4 roundeds">

                                <div class="row mb-3">
                                  <div class="col Logo-name fs-3">
                                      <?php echo $bank_name1;?>
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <div class="col card-number text-center">
                                  <p><?php accountNumber($account_number1,"monnify");?></p>
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <div class="col Name white  text-center">
                                  <p><?php echo $account_name1;?></p>
                                  </div>
                                </div>


                                <div class="row">
                                  <div class="col fs-5">
                                  VISA
                                  </div>
                                  <div class="col flex justify-content-end  fs-5">
                                  <?php echo $chargef;?> Charge Applied
                                  </div>
                                </div>

                              </div>

                            </div>
                        </div>
                      </div>




                      <!------------------>
                    </div>
                  </div>
                  <div class="tab-pane <?php echo (is_numeric($account_number)) ? banksmodal():""; ?>" id="messages" role="tabpanel">
                    <div class="p-md-20">

                      <!-------------CONTENT----------->


                        <div class="Wrap mb-2 cdebit-card   position-relative">
                              <div class="Base">
                                  <div class="Inner-wrap">

                                    <div class=" container text-white p-4 roundeds">

                                      <div class="row mb-3">
                                        <div class="col Logo-name fs-3">
                                          <?php echo $bank_name;?>
                                        </div>
                                      </div>

                                      <div class="row mb-3">
                                        <div class="col card-number text-center">
                                        <p><?php accountNumber($account_number,"monnify");?></p>
                                        </div>
                                      </div>

                                      <div class="row mb-3">
                                        <div class="col Name white  text-center">
                                          <p><?php echo $account_name;?></p>
                                        </div>
                                      </div>


                                      <div class="row">
                                        <div class="col fs-5">
                                          VISA
                                        </div>
                                        <div class="col flex justify-content-end  fs-5">
                                          <?php echo $chargef;?> Charge Applied
                                        </div>
                                      </div>

                                    </div>

                                  </div>
                              </div>
                        </div>


                      <!------------------>
                    </div>
                  </div>
                  <div class="tab-pane <?php echo (is_numeric($account_number2) || is_numeric($account_number1) || is_numeric($account_number)) ? "d-none":" show active"; ?>" id="messages2" role="tabpanel">
                    <div class="p-md-20">

                      <!-------------CONTENT----------->


                        <div class="Wrap mb-2 cdebit-card   position-relative">
                              <div class="Base">
                                  <div class="Inner-wrap">

                                    <div class=" container text-white p-4 roundeds">

                                      <div class="row mb-3">
                                        <div class="col Logo-name fs-3">
                                          <?php echo $bank_name;?>
                                        </div>
                                      </div>

                                      <div class="row mb-3">
                                        <div class="col card-number text-center">
                                        <p><?php accountNumber($account_number,"monnify");?></p>
                                        </div>
                                      </div>

                                      <div class="row mb-3">
                                        <div class="col Name white  text-center">
                                          <p><?php echo $account_name;?></p>
                                        </div>
                                      </div>


                                      <div class="row">
                                        <div class="col fs-5">
                                          VISA
                                        </div>
                                        <div class="col flex justify-content-end  fs-5">
                                          <?php echo $chargef;?> Charge Applied
                                        </div>
                                      </div>

                                    </div>

                                  </div>
                              </div>
                        </div>


                      <!------------------>
                    </div>
                  </div>

  <?php } ?>

                </div>
              </div>

	 
		</div>
    </div>
  </div>
 <?php
}

if(vp_getoption("allow_card_method") == "yes"){
?>

  <div class="accordion-item <?php echo accordion_main("card");?>">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Card Payment & Payment Gateway
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse <?php echo accordion_sub("card");?> " aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body dark-white">
<?php
echo'
	 		<style>
		  .side-wallet-w{background-color: white !important;
    padding: 20px !important;
    text-align: center !important;
    border-radius: 10px !important;
	border:2px solid purple;
		  }
		  
		</style>
		
<div id="side-wallet-w" class="side-wallet-w bg-gray-600 ">
<lead class="white">Current Balance : <span class="user-balance">'.$bal.'</span></lead>

<div class="fund-self-wallet">
<h4 class="white">Fund Account</h4>
<form method="post" class="cardPayment" action="/wp-content/plugins/vtupress/pay.php"> 
<label class="form-label white">Amount</label><br>
<input type="number" name="amount" class="form-control mb-2 user_amount" required><br>

<label class="form-label white" >Choose Gateway</label><br>

<select class="paymentchoice form-control mb-2"  name="paymentchoice" required>
<option value="" selected>Select Gateway</option>
';

if(vp_getoption('enablesquadco') == "yes"){
  ?>
  <option value="squadco">SquadCo</option>
  <?php
}
if(vp_getoption('enable_paystack') == "yes"){
  ?>
<option value="paystack">Paystack</option>
<?php
}
if(vp_getoption('enable_monnify') == "yes"){
  ?>
<option value="monnify">Monnify</option>
<?php
}
echo'
</select>


<div class="input-group" id="basic-addon1">

<span class="input-group-text dcharge">Charge In <b class="methodinai"></b></span><br>

<input type="number" name="charge" class="form-control mb-2 charge_back_value" readonly value="0">
</div>


<input style="background-color:white;" type="hidden" name="vpemail" value="'.$user_email.'" class="user_email form-control">
<input type="hidden" name="tcode" value="wallet" >
<input type="hidden" name="userid" value="'.$id.'">
<input type="button" name="pay" value="Fund Wallet" formaction="/wp-content/plugins/vtupress/pay.php" style="background-color:#9c27b0; color:white; padding:10px; border-radius:10px; border:0;" class="mb-2 form-control p-3 text-xs font-bold text-white uppercase bg-indigo-600 rounded shadow  submit-form  "><br>
<input type="hidden" name="amounte" value="1">
<input type="hidden" id="id" name="id" value="'.uniqid("VTU-",false).'"><br>
<input type="hidden" value="'.$sec.'" name="secret"><br>
<input type="hidden" id="url1" name="url1" value="'.vp_option_array($option_array,'siteurl')."/wp-content/plugins/vtupress/process.php".'">
</form>
</div>
</div>


<script>
jQuery(".paymentchoice").on("change",function(){

var dchoice = jQuery(".paymentchoice").val();

switch(dchoice){

    case"paystack":
      var chg = parseFloat('.vp_option_array($option_array,'paystack_charge_back').');
      
';
if(vp_getoption("paystack_charge_method") == "fixed"){
	?>
jQuery(".dcharge .methodinai").text(" ₦");
<?php
}
else{
		?>
jQuery(".dcharge .methodinai").text(" %");

<?php
}
echo'

    break;
    case"monnify":
      var chg = parseFloat('.vp_option_array($option_array,'charge_back').');
      
      ';
      if(vp_getoption("charge_method") == "fixed"){
        ?>
      jQuery(".dcharge .methodinai").text(" ₦");
      <?php
      }
      else{
          ?>
      jQuery(".dcharge .methodinai").text(" %");
      
      <?php
      }
      echo'

    break;
    case"squadco":
      var chg = parseFloat('.vp_option_array($option_array,'gtb_charge_back').');
      
      ';
      if(vp_getoption("gtb_charge_method") == "fixed"){
        ?>
      jQuery(".dcharge .methodinai").text(" ₦");
      <?php
      }
      else{
          ?>
      jQuery(".dcharge .methodinai").text(" %");
      
      <?php
      }
      echo'

    break;

}


jQuery(".charge_back_value").val(chg);

});
</script>



';


  ?>
<script src="https://checkout.squadco.com/widget/squad.min.js"></script> 
<script>
jQuery('.cardPayment input[type=button]').on('click',function (event) {
 
     //   event.preventDefault(); // Prevent the default form submission

        var the_choice = jQuery(".paymentchoice").val();

        switch(the_choice){
          case"paystack":
           // alert("here in "+the_choice);
           if("<?php echo vp_getoption('enable_paystack');?>" == "yes"){
            jQuery(".submit-form").attr("type","submit");
            jQuery(".submit-form").click();
            //jQuery(".cardPayment").submit();
           }
           else{
            alert("Can't use paystack now");
           }

          break;
          case"monnify":
           // alert("here in "+the_choice);
           if("<?php echo vp_getoption('enable_monnify');?>" == "yes"){
            jQuery(".submit-form").attr("type","submit");
            jQuery(".submit-form").click();
           }
           else{
            alert("Can't use monnify now");
           }

          break;
          case"squadco":
           // alert("here in "+the_choice);
           jQuery(".submit-form").attr("type","button");
           // jQuery(".submit-form").click();
           
if("<?php echo vp_getoption('enablesquadco');?>" == "yes"){
            var publicKey = "<?php echo vp_getoption("squad_public");?>";
            var email = jQuery(".user_email").val();
            var amount = jQuery(".user_amount").val();
          //  transaction_Successful();
            function transaction_Successful(){
    console.log("Transaction successful");
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      });

      Toast.fire({
        icon: 'success',
        title: 'You\'d be redirected in 5 Seconds!"'
      });

     jQuery(".swal2-container").css({"z-index":"999999999"});

     setTimeout(function() {
        // Code to be executed after the delay
        //console.log("Delayed code executed after 5000 sec");
       location.reload();
    }, 5000);

}
            function SquadPay() {

var obj = {};
obj["webhook_for"] = "invoice";
obj["invoice_id"] = "$invoice_id";

const squadInstance = new squad({
  onClose: () => console.log("Widget closed"),
  onLoad: () => console.log("Widget Loaded Successfully"),
  onSuccess: () =>  transaction_Successful(),
  key: publicKey,
  //Change key (test_pk_sample-public-key-1) to the key on your Squad Dashboard
  email: email,
  amount: amount * 100,
  //Enter amount in Naira or Dollar (Base value Kobo/cent already multiplied by 100)
  currency_code: "NGN"
});
squadInstance.setup();
squadInstance.open();

}

SquadPay();


}else{
  alert("Can't use squadco for now");
}
          break;
          default: alert("Choose a valid gateway");
        }

        // You can perform any additional tasks here before submitting the form
        // For example, you can validate user input, send an AJAX request, etc.

        // To submit the form, you can use the .submit() method
         // This triggers the form submission
    });
    </script>
  <?php

echo'


	';?> 
	 
		</div>
    </div>
  </div>
 
<?php
}

if(vp_option_array($option_array,"vtupress_custom_auto_manual") == "yes" && vp_option_array($option_array,"enable_auto_manual") == "yes" ):
?>

<div class="accordion-item <?php echo accordion_main("manual");?>">
      <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          Manual Bank Transfer
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse <?php echo accordion_sub("manual");?>" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body dark-white">

        <div class="row">
            <div class="col-12">
                <div class="alert alert-info d-flex justify-content-center">
                  <?php echo htmlspecialchars(vp_getoption("auto_manual_info"));?>
                </div> 
            </div>
        </div>
      
        <div class="row d-flex justify-content-around">

          <?php for($i = 1; $i <= 3; $i++):
            if(!is_numeric(trim(vp_option_array($option_array,'auto_manual_account_number'.$i))) || strlen(trim(vp_option_array($option_array,'auto_manual_account_number'.$i))) < 10){
              continue;
            }
            ?>
            <div class="col-12 col-md-4 border d-flex justify-content-center flex-column align-items-center p-3">
                <h4><?php echo trim(vp_option_array($option_array,'auto_manual_bank_name'.$i));?></h4>
                <h3><?php echo trim(vp_option_array($option_array,'auto_manual_account_number'.$i));?> 
                <!--Copy-->
                <i class="fas fa-copy copyAccount" accountNumber="<?php echo trim(vp_option_array($option_array,'auto_manual_account_number'.$i));?>"></i>
              </h3>
                <h4><?php echo trim(vp_option_array($option_array,'auto_manual_account_name'.$i));?></h4>
                <button class="madeTransfer btn btn-success rounded my-3" accountNumber="<?php echo trim(vp_option_array($option_array,'auto_manual_account_number'.$i));?>" >I have made payment</button>
            </div>
            <!-- data-bs-toggle="modal" data-bs-target="#betexampleModalkk" data-bs-whatever='@getbootstrap'  -->
          <?php endfor;?>


        </div>
        
        <!--MODAL-->
        <div class="modal fade" id="betexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label>Enter Amount</label>
                        <input type="number" class="form-control amt">
                        <label>Enter SessionID</label>
                        <input type="text" class="form-control session">
                        <button class="btn btn-success madeTransferNow my-2">Verify</button>
					          </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary  p-2 text-xs font-bold text-black uppercase bg-grey-600 rounded shadow   bet-proceed-cancled" data-bs-dismiss="modal">Cancel</button>
                    </div>
                  </div>
                </div>
          </div>
          <script>
            var accountNumber = 0;
            jQuery(".madeTransfer").click(function(){
              accountNumber = jQuery(this).attr("accountNumber");
              jQuery("#exampleModalLabel").text("Payment to "+accountNumber);
              jQuery("#betexampleModal").modal("show");
            });

              jQuery(".madeTransferNow").click(function(){
                var amt = jQuery("#betexampleModal input.amt").val();
                var sessionId = jQuery("#betexampleModal input.session").val();
                if(sessionId.trim().length < 1 || amt < 50){
                  alert("Please enter a Session ID and a valid amount");
                  return false;
                }

                jQuery(this).addClass("disabled");
                var obj = {amount:amt,sessionID:sessionId,accountNumber:accountNumber};
                jQuery.LoadingOverlay("show");

                // Perform AJAX request to your server to verify the session ID
                  jQuery.ajax({
                    url: "<?php echo plugins_url("vtupress/auto_manual.php");?>",
                    type: "POST",
                    data: obj,
                    error: function(jqXHR, textStatus, errorThrown){
                      jQuery(".madeTransferNow").removeClass("disabled");
		                  jQuery.LoadingOverlay("hide");
                        if(jqXHR.status == "404"){
                          alert("Page not found");
                          return false;
                        }
                        else if(jqXHR.status == "500"){
                          alert("Internal Server Error");
                          return false;
                        }
                        else{
                          alert("An error occurred: "+errorThrown);
                          return false;
                        }
                    },
                    success: function(response){
                        jQuery(".madeTransferNow").removeClass("disabled");
                        jQuery.LoadingOverlay("hide");
                       

                        try {
                          response = JSON.parse(response);
                          if(response.status){
                            swal({
                              title: "Success!",
                              text: response.message,
                              icon: "success",
                              button: "Okay",
                            });
                          }else{
                            swal({
                              title: "Oops!",
                              text: response.message,
                              icon: "error",
                              button: "Okay",
                            });
                          }
                          
                        } catch (error) {
                          swal({
                              title: "Oops!",
                              text: response,
                              icon: "error",
                              button: "Okay",
                            });
                          
                        }
                        


                    }
                  });
              });
              //copy account number
              jQuery(".copyAccount").click(function(){
                var accountNumber = jQuery(this).attr("accountNumber");

                  navigator.clipboard.writeText(accountNumber).then(function() {
                      alert('copied!');

                  }).catch(function(err) {
                      alert('error copying!');

                  });

              });
          </script>



      <!--END-->
      </div>
      </div>
</div>

 
<?php
else:
  ?>

  <div class="accordion-item <?php echo accordion_main("manual");?>">
      <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          Manual Bank Transfer
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse <?php echo accordion_sub("manual");?>" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body dark-white">
      
        <div style="text-align:center; background-color: #6c6cd426;"><?php echo vp_option_array($option_array,'manual_funding');?></div>

      </div>
      </div>
  </div>


<?php

endif;
 if(vp_option_array($option_array,"airtime_to_cash") == "yes" || vp_option_array($option_array,"airtime_to_wallet") == "yes" && vp_option_array($option_array,"resell") == "yes"){
?>
  <div class="accordion-item <?php echo accordion_main("airtime");?> ">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Airtime Conversion
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse <?php echo accordion_sub("airtime");?>" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body dark-white">
	<div class="container-md mt-3">
    <div class="p-3" style="border: 1px solid grey; border-radius: 5px;">
	    <div class="mb-2">
			<label class="form-label">Conversion</label>
			<select class="conversion form-select" name="conversion">
			<option value="none">---Select---</option>
			<?php
			if(vp_option_array($option_array,"airtime_to_wallet") == "yes"){
				?>
			<option value="wallet">Airtime To Wallet</option>
			<?php
			}
			if(vp_option_array($option_array,"airtime_to_cash") == "yes"){
			?>
			<option value="cash">Airtime To Cash</option>
			<?php
			}
			?>
			</select>
			<label class="form-label">Network</label>
			<select class="network form-select" name="network">
			<option value="none">---Select---</option>
			<?php
			if(!empty(vp_option_array($option_array,"mtn_airtime")) && vp_option_array($option_array,"mtn_airtime") != "08012346789"){
				?>
				<option value="mtn">MTN</option>
				<?php
			}
			if(!empty(vp_option_array($option_array,"glo_airtime")) && vp_option_array($option_array,"glo_airtime") != "08012346789"){
				?>
				<option value="glo">GLO</option>
				<?php
			}
			if(!empty(vp_option_array($option_array,"airtel_airtime")) && vp_option_array($option_array,"airtel_airtime") != "08012346789"){
				?>
				<option value="airtel">AIRTEL</option>
				<?php
			}
			if(!empty(vp_option_array($option_array,"9mobile_airtime")) && vp_option_array($option_array,"9mobile_airtime") != "08012346789"){
				?>
				<option value="9mobile">9MOBILE</option>
				<?php
			}
				?>
			</select>
			<label class="form-label">Amount</label>
			<input type="number"  name="amount" class="amount form-control"value="">
			<div class="bank_div">
			<label class="form-label">Account Details</label>
			<textarea class="bank form-control" name="bank"></textarea>
			</div>
			<label class="form-label">To Be Transfered From</label>
			<input type="number"  name="transfer_from" class="transfer_from form-control" value="" placeholder="Phone Number">
			<label class="form-label">Pay To</label>
			<input type="text"  name="pay_to" class="pay_to form-control" readOnly value="">
			<label class="form-label">Charge</label>
			<div class="input-group">
			<input type="number" name="pay_charge" class="pay_charge form-control" readOnly value="0">
			<span class="input-group-text">%</span>
			</div>
			<label class="form-label">You'll Get</label>
			<input type="text" name="pay_get" class="pay_get form-control" readOnly value="">
			<input type="button" name="convert_it" value="CONVERT" class="form-control mt-2 convert_it w-full p-3 text-xs font-bold text-white uppercase bg-indigo-600 rounded shadow text-light btn btn-primary">
		</div>
		
<script>

var convert = jQuery("select.conversion").val();
		jQuery(".conversion").val("none");
		jQuery(".network").val("none");
if(convert == "wallet"){
	jQuery(".network").val("none");
		jQuery(".bank_div").hide();
}
else if(convert == "cash"){
	jQuery(".network").val("none");
	jQuery(".bank_div").show();
}
else{
	jQuery(".pay_charge").val("0");
	jQuery(".network").val("none");
		jQuery(".bank_div").hide();
}


jQuery("select.conversion").on("change",function(){
	var convert = jQuery("select.conversion").val();
	
if(convert == "wallet"){
//jQuery(".pay_charge").val("<?php echo intval(vp_option_array($option_array,'airtime_to_wallet_charge'));?>");
		jQuery(".network").val("none");
		/*
	var minus = (parseInt(jQuery(".amount").val()) * parseInt(jQuery(".pay_charge").val()))/100;
	var charge = parseInt(jQuery(".amount").val()) - minus;
		jQuery(".bank_div").hide();
	jQuery(".pay_get").val(charge);
	*/
}
if(convert == "cash"){
//jQuery(".pay_charge").val("<?php echo intval(vp_option_array($option_array,'airtime_to_cash_charge'));?>");
		jQuery(".network").val("none");
			jQuery(".bank_div").show();
			/*
	var minus = (parseInt(jQuery(".amount").val()) * parseInt(jQuery(".pay_charge").val()))/100;
	var charge = parseInt(jQuery(".amount").val()) - minus;
	
	jQuery(".pay_get").val(charge);
	*/
}
	
});

jQuery("select.network").on("change",function(){
	var network = jQuery("select.network").val();
	var conversion = jQuery("select.conversion").val();
	switch(conversion){
		case"wallet":
if(network == "mtn"){
	jQuery("input.pay_to").val("<?php echo intval(vp_option_array($option_array,'mtn_airtime'));?>");
	jQuery(".pay_charge").val("<?php echo intval(vp_option_array($option_array,'airtime_to_wallet_charge'));?>");
	var minus = (parseInt(jQuery(".amount").val()) * <?php echo intval(vp_option_array($option_array,'airtime_to_wallet_charge'));?>)/100;
	var charge = parseInt(jQuery(".amount").val()) - minus;
	
	jQuery(".pay_get").val(charge);
}

if(network == "glo"){
	jQuery("input.pay_to").val("<?php echo intval(vp_option_array($option_array,'glo_airtime'));?>");
			jQuery(".pay_charge").val("<?php echo intval(vp_option_array($option_array,'gairtime_to_wallet_charge'));?>");
	var minus = (parseInt(jQuery(".amount").val()) * <?php echo intval(vp_option_array($option_array,'gairtime_to_wallet_charge'));?>)/100;
	var charge = parseInt(jQuery(".amount").val()) - minus;
	
	jQuery(".pay_get").val(charge);
}

if(network == "airtel"){
	jQuery("input.pay_to").val("<?php echo intval(vp_option_array($option_array,'airtel_airtime'));?>");
			jQuery(".pay_charge").val("<?php echo intval(vp_option_array($option_array,'aairtime_to_wallet_charge'));?>");
	var minus = (parseInt(jQuery(".amount").val()) * <?php echo intval(vp_option_array($option_array,'aairtime_to_wallet_charge'));?>)/100;
	var charge = parseInt(jQuery(".amount").val()) - minus;
	
	jQuery(".pay_get").val(charge);
}

if(network == "9mobile"){
	jQuery("input.pay_to").val("<?php echo intval(vp_option_array($option_array,'9mobile_airtime'));?>");
			jQuery(".pay_charge").val("<?php echo intval(vp_option_array($option_array,'9airtime_to_wallet_charge'));?>");
	var minus = (parseInt(jQuery(".amount").val()) * <?php echo intval(vp_option_array($option_array,'9airtime_to_wallet_charge'));?>)/100;
	var charge = parseInt(jQuery(".amount").val()) - minus;
	
	jQuery(".pay_get").val(charge);
}

break;
		case"cash":
if(network == "mtn"){
	jQuery("input.pay_to").val("<?php echo intval(vp_option_array($option_array,'mtn_airtime'));?>");
			jQuery(".pay_charge").val("<?php echo intval(vp_option_array($option_array,'airtime_to_cash_charge'));?>");
	var minus = (parseInt(jQuery(".amount").val()) * <?php echo intval(vp_option_array($option_array,'airtime_to_cash_charge'));?>)/100;
	var charge = parseInt(jQuery(".amount").val()) - minus;
	
	jQuery(".pay_get").val(charge);
}

if(network == "glo"){
	jQuery("input.pay_to").val("<?php echo intval(vp_option_array($option_array,'glo_airtime'));?>");
				jQuery(".pay_charge").val("<?php echo intval(vp_option_array($option_array,'gairtime_to_cash_charge'));?>");	
	var minus = (parseInt(jQuery(".amount").val()) * <?php echo intval(vp_option_array($option_array,'gairtime_to_cash_charge'));?>)/100;
	var charge = parseInt(jQuery(".amount").val()) - minus;
	
	jQuery(".pay_get").val(charge);
}

if(network == "airtel"){
	jQuery("input.pay_to").val("<?php echo intval(vp_option_array($option_array,'airtel_airtime'));?>");
				jQuery(".pay_charge").val("<?php echo intval(vp_option_array($option_array,'aairtime_to_cash_charge'));?>");
	var minus = (parseInt(jQuery(".amount").val()) * <?php echo intval(vp_option_array($option_array,'aairtime_to_cash_charge'));?>)/100;
	var charge = parseInt(jQuery(".amount").val()) - minus;
	
	jQuery(".pay_get").val(charge);
}

if(network == "9mobile"){
	jQuery("input.pay_to").val("<?php echo intval(vp_option_array($option_array,'9mobile_airtime'));?>");
	jQuery(".pay_charge").val("<?php echo intval(vp_option_array($option_array,'9airtime_to_cash_charge'));?>");
	var minus = (parseInt(jQuery(".amount").val()) * <?php echo intval(vp_option_array($option_array,'9airtime_to_cash_charge'));?>)/100;
	var charge = parseInt(jQuery(".amount").val()) - minus;
	
	jQuery(".pay_get").val(charge);
}

break;


	}
	
});

jQuery(".amount").on("change",function(){
	var minus = (parseInt(jQuery(".amount").val()) * parseInt(jQuery(".pay_charge").val()))/100;
	var charge = parseInt(jQuery(".amount").val()) - minus;
	
	jQuery(".pay_get").val(charge);
});



jQuery(".convert_it").click(function(){

	var minus = (parseInt(jQuery(".amount").val()) * parseInt(jQuery(".pay_charge").val()))/100;
	var charge = parseInt(jQuery(".amount").val()) - minus;
	
	jQuery(".pay_get").val(charge);
	
jQuery.LoadingOverlay("show");
	
var obj = {};
obj["convert_it"] = "airtime";
obj["conversion"] = jQuery(".conversion").val();
obj["network"] = jQuery(".network").val();
obj["pay_to"] = jQuery(".pay_to").val();
obj["pay_charge"] = jQuery(".pay_charge").val();
obj["pay_get"] = jQuery(".pay_get").val();
obj["amount"] = jQuery(".amount").val();
obj["bank"] = jQuery(".bank").val();
obj["from"] = jQuery(".transfer_from").val();
jQuery.ajax({
  url: '<?php echo esc_url(plugins_url('vtupress/vend.php'));?>',
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
	  jQuery.LoadingOverlay("hide");
        if(data == "100"){
		  swal({
  title: "Conversion Submitted",
  text: "We'll Approve Your Conversion After Confirmation",
  icon: "success",
  button: "Okay",
}).then((value) => {
	location.reload();
});
	  }
	  else{
		 jQuery.LoadingOverlay("hide");
	swal({
  buttons: {
    cancel: "Why?",
    defeat: "Okay",
  },
  title: "Submission Failed",
  text: "Click \'Why\' To See reason",
  icon: "error",
})
.then((value) => {
  switch (value) {
 
    case "defeat":
      break;
    default:
      swal(data, {
      icon: "info",
    });
  }
});
	  }
  },
  type: 'POST'
});

});

</script>
	
	</div>
	</div>
	  
	  </div>
    </div>
  </div>
<?php
 }
 if(vp_option_array($option_array,"enable_coupon") == "yes" && vp_option_array($option_array,"resell") == "yes"){
?>
  <div class="accordion-item <?php echo accordion_main("coupon");?>">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        Coupon Funding
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse <?php echo accordion_sub("coupon");?>" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body dark-white">
	<div class="container-md mt-3">
    <div class="p-3" style="border: 1px solid grey; border-radius: 5px;">
	    <div class="mb-2">
		<label class="form-label">Coupon Code</label>
			<input type="text" name="coupon_code" class="coupon_code form-control">
			<input type="button" name="run_coupon" value="Redeem Code" class="form-control run_coupon btn btn-secondary w-full p-2 text-xs font-bold text-white uppercase bg-indigo-600 rounded shadow text-light">
		</div>
		
<script>


jQuery(".run_coupon").click(function(){
	
jQuery.LoadingOverlay("show");
	
var obj = {};
obj["run_coupon"] = jQuery(".coupon_code").val();
jQuery.ajax({
  url: '<?php echo esc_url(plugins_url('vtupress/admin/pages/settings/saves/coupon.php'));?>',
  data: obj,
 dataType: 'json',
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
	  jQuery.LoadingOverlay("hide");
        if(data.status == "100"){
		  swal({
  title: "Redeemed",
  text: data.message,
  icon: "success",
  button: "Okay",
}).then((value) => {
	location.reload();
});
	  }
	  else{
		 jQuery.LoadingOverlay("hide");
	swal({
  buttons: {
    cancel: "Why?",
    defeat: "Okay",
  },
  title: "Redeem Failed",
  text: "Click \'Why\' To See reason",
  icon: "error",
})
.then((value) => {
  switch (value) {
 
    case "defeat":
      break;
    default:
      swal(data.message, {
      icon: "info",
    });
  }
});
	  }
  },
  type: 'POST'
});

});

</script>
	
	</div>
	</div>
	  
	  </div>
    </div>
  </div>
<?php
 }
 ?>
  
</div>


<?php

}
		
		
		?>