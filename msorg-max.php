<link  rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/max/css/style.css">
<link  rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/max/font/style.css">
<link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
<style>
   * {
        font-family: 'Roboto', sans-serif;
    }

    
    /* Ensure Remix Icons and FontAwesome work */
    i[class^="ri-"], i[class*=" ri-"] {
        font-family: 'remixicon' !important;
    }


    .btn-primary, .bg-primary, .form-check-input:checked, .x-p, .bg-customdash {
        background-color: <?php echo vp_option_array($option_array,"msorg_from"); ?> !important;
        border-color: <?php echo vp_option_array($option_array,"msorg_from"); ?> !important;
    }
    .active, .text-primary, .tp {
        color: <?php echo vp_option_array($option_array,"msorg_from"); ?> !important;
    }
    button:hover, .btn:hover, a:hover {
        background-color: darken(<?php echo vp_option_array($option_array,"msorg_from"); ?>, 10%) !important;
        border-color: darken(<?php echo vp_option_array($option_array,"msorg_from"); ?>, 10%) !important;
    }
    .form-check-input:focus,  .form-check-input:hover {
        border-color: <?php echo vp_option_array($option_array,"msorg_from"); ?> !important;
    }

    @media (min-width:800px) {
        .container.applyF#maxDiv{
            padding:0 20px !important;
        }
    }

</style>

<div class="container applyF" id="maxDiv">
    <div class="row">

<?php
$nbank = "";
echo '
<header id="page-topbar" class="mb-5 " style="top:0!important;">
    <div class="layout-width bg-transparent d-none">
        <div class="navbar-header mt-2 mb-1 bg-transparent">
            <div class="d-flex justify-content-betweecn bg-transparent">
                <div class="dropdown ms-sm-3 header-ite topbar-user bg-transparent">
                    <a href="profile">
                        <span class="d-flex justify-content-start" onclick="wcindow.location.href=#">
                            <img class="rounded-circle" width="35" height="35" src="' .plugins_url('msorg_template')."/msorg_template/avatar.png" . '" alt="Header Avatar" style="position:relative;top:20px;">
                            <div class="text-start ms-xl-2" style="margin-left:10px;">
                                <h6 class="fw-medium fs-13 user-name-text mb-0">Hey '.do_shortcode("[vtupress get='name']"). '! <img src="" id="dynamic-svg" style="position:relative;left:-20px;" alt=""></h6>
                                <span class="fs-13 text-primary user-name-sub-text" style="position:relative;top:-20px;color: '.$nbank.' !important;font-weight:700">Welcome Back!</span>
                            </div>
                        </span>
                    </a>
                </div>
            </div>
            <div class=" header-itemm" id="notificationDropdownn">
                <button type="button" class="btn btn-icon btn-topbarr btn-ghost-dark rounded-circle" id="page-header-notifications-dropdownm" data-bs-togglek="dropdownn" data-bs-auto-closee="outsidee" aria-haspopupp="truee" aria-expandedb="falsee">
                    <a href="notifications">  <i class="ri-notification-4-line" style="position:relative;top:-7px;left:-5px"></i></a>
                    <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger"><span class="notification-badge">1</span><span class="visually-hidden">unread notifications</span></span>
                </button>
            </div>
        </div>
    </div> 
</header>';
echo '<div class="main-content bg-altt" style="position:relative;top:-40px;">
    <div class="page-content">
        <div class="container-fluid px-0 mt-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-6" > ';

$kyc = strtolower($kyc_data[0]->enable);
if ($kyc == "yes") {

    $verified = strtolower($data[0]->status);
    if ($verified != "verified") {
        echo '
            <div class="d-flex justify-content-between align-items-center p-2 mb-2 bg-white border rounded"> 
                <div class="fs-12">Complete KYC Verification</div>
                <div> 
                    <a href="?vend=kyc" class="btn btn-primary fs-12">Complete Now !</a>
                </div>
            </div>';
    } else {
        echo '
            <div class="alert alert-success mb-2" role="alert">
                <i class="ri-checkbox-circle-fill"></i> You have successfully completed KYC Verification.
            </div>';
    }
} else {
    echo '
       
            </div>
        </div>';
}
                           echo'
                            <div class="card bg-customdash card-animate">
                                <div class="card-body x-p" style="flex-direction:column;">
                                    <div class="d-flex justify-content-between">
                                        <div class="flex-grow-1">
                                            <p class="fw-small text-white fs-13">Available Balance  
                                                <span class="ri-eye-fill" id="toggle-eye" data-icon-on="ri-eye-fill" data-icon-off="ri-eye-off-fill"></span>
                                            </p>
                                            <h4 class="fs-20 fw-semibold text-white mb-3 mt-3" id="bal">₦' .do_shortcode("[vtupress get='balance']"). '</h4>
                                        </div>
                                        <div>
                                        ';
                                        if(vp_getoption('enable_paymentpoint') == "yes"):
                                            $log = plugins_url('msorg_template')."/msorg_template/palmpay.jpeg";
                                            $aza = vp_getuser($id,"paymentpoint_accountnumber");
                                            if(!is_numeric($aza)):
                                                $aza = '<button class="btn btn-sm btn-primary">Generate</button>';
                                            endif;
                                            echo '
                                                <p class="fw-small text-white fs-13">
                                                    <img src="'.$log.'" alt="Payment Point Logo" width="30" height="30">
                                                    Paymentpoint Account
                                                </p>
                                                <h5 class="fs-20 fw-semibold text-white mb-3 mt-3">' . $aza . '</h5>
                                            ';
                                        endif;

                                        echo'
                                        </div>
                                       
                                    </div> 
                                    <div class="iconbox-container w-full" >
                                        <a href="/kyc-auth">
                                          <div style="background-color: #fffff" class="iconbox">
                                                <i style="color: black;" class="ri-stock-line tp"></i>
                                                <strong style="white-space: nowrap">Verify To Get <br>Account</strong>
                                            </div>
                                        <a data-bs-toggle="offcanvas" data-bs-target="#fundWallet" href="?vend=wallet">
                                            <div style="background-color: #fffff" class="iconbox">
                                                <i style="color: black;" class="ri-bank-card-line tp"></i>
                                                <strong style="white-space: nowrap">Fund Wallet</strong>
                                            </div>
                                        </a>
                                        <a href="?vend=transfer">
                                            <div style="background-color: #fffff" class="iconbox">
                                                <i style="color: black;" class="ri-cash-line tp"></i>
                                                <strong style="white-space: nowrap">Transfer</strong>
                                            </div>

                                        </a>

                                   </div>
                                </div>
                            </div>
                        </div><br><br><br>';
                        
                        
                                                                                   
                                             
//                                             $table_name = $wpdb->prefix . 'vtu_max_notifications';
// $query = "SELECT title, message FROM $table_name ORDER BY id DESC LIMIT 1";
// $notification = $wpdb->get_row($query);



// if ($notification) {
//     $title = $notification->title;
//     $message = $notification->message;
//     # echo '<div class="col-lg-12 col-md-6 mt-4">';
//     # echo '<div class="alert alert-primary border-1 fade show" role="alert">';
//     # echo '<div class="alert-body">';
//     # echo '<div class="d-flex">';
//     # echo '<div class="flex-shrink-0 me-3">';
//     # echo '<i class="ri-bell-line fs-16 align-middle"></i>';
//     # echo '</div>';
//     # echo '<div class="flex-grow-1">';
//     # echo '<h5 class="alert-heading fs-13">' . esc_html($title) . '</h5>';
//     # echo '<p class="mb-0 fs-10">' . esc_html($message) . '</p>';
//     # echo '</div>';
//     # echo '</div>';
//     # echo '</div>';
//     # echo '</div></div>';
    
// } else {
//     echo '<div style="height: 40px;"></div>';
// }
echo '<div style="height: 30px;"></div>';
?>
<div class="col-lg-12 col-md-6">
    <div class="card-container">
        <div class="slider">
            <img src="https://dasamonie.com/wp-content/uploads/2024/12/IMG-20241218-WA0040.jpg" alt="Banner 2">
            <img src="https://dasamonie.com/wp-content/uploads/2024/12/IMG-20241218-WA0034.jpg" alt="Banner 3">
            <img src="https://dasamonie.com/wp-content/uploads/2024/12/IMG-20241218-WA0051.jpg" alt="Banner 2">
        </div>
        <div class="indicator-container">
            <div class="indicator active"></div>
            <div class="indicator"></div>
            <div class="indicator"></div>
        </div>
    </div>
</div>

<?php  
                       echo'<div class="blur"></div>  
                    </div>
                </div><div class="col-lg-6">
                                <div class="card radius-30  px-0" >
                                    <div class="card-body p-2">
                                        <div class="row no-padding-row">'; 
                global $wpdb;
$table_name = $wpdb->prefix . 'vtu_max_settings';

/*
$features = array(
    'airtime' => get_option('airtime_feature'),
    'data' => get_option('data_feature'),
    'electricity' => get_option('electricity_feature'),
    'tv' => get_option('cabletv_feature'),
    'betting' => get_option('betting_feature'),
    'datapin' => get_option('datapin_feature'),
    'a2cash' => get_option('a2cash_feature'),
    'recharge' => get_option('rechargepin_feature'),
    'epin' => get_option('exampin_feature'),
    'bulksms' => get_option('bulksms_feature'),
    'coupon' => get_option('coupon_feature'),
    'kyc' => get_option('force_kyc')
); 

$services = [
    ["airtime", "mobile.svg", "Airtime", "pt-0", "", $features['airtime']],
    ["data", "data.svg", "Data", "pt-x", "", $features['data']],
    ["electricity", "lamp-charge.svg", "Electricity", "pt-0", "", $features['electricity']],
    ["tv", "monitor.svg", "TV", "pt-0", "", $features['tv']],
    ["betting", "betting.svg", "Betting", "pt-a", "", $features['betting']],
    ["datapin", "wifi-square.svg", "Data Pin", "pt-y", "", $features['datapin']],
    ["a2cash", "mobile.svg", "A2cash", "pt-0", "", $features['a2cash']],
    ["recharge", "history.svg", "Recharge", "pt-0", "", $features['recharge']],
    ["epin", "teacher.svg", "Exam", "pt-b", "", $features['epin']],
    ["bulksms", "messages.svg", "Bulk SMS", "pt-b", "", $features['bulksms']],
    ["#", "giftcard.svg", "Coupon", "pt-0", 'data-bs-toggle="offcanvas" data-bs-target="#coupon"', $features['coupon']],
    ["#", "kyc.svg", "KYC", "pt-c", 'data-bs-toggle="offcanvas" data-bs-target="#upgrade" aria-controls="upgrade" ', $features['kyc']]
];
*/
 ?>
 <script>
    let currentIndex = 0;
    const slider = document.querySelector('.slider');
    const images = document.querySelectorAll('.slider img');
    const totalImages = images.length;
    const indicators = document.querySelectorAll('.indicator');

    function nextSlide() {
        currentIndex++;
        if (currentIndex >= totalImages) {
            currentIndex = 0; // Loop back to the first slide
        }
        const offset = -currentIndex * 105; // Slide by 100% width per active image
        slider.style.transform = `translateX(${offset}%)`;

        // Update active indicator
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === currentIndex);
        });
    }

    setInterval(nextSlide, 3000); // Change slide every 3 seconds
</script>
<style>
    @media (min-width: 768px) {
        .card-container {
            width: 600px; /* Wider width for desktop */
        }
    }

    @media (max-width: 767px) {
        .card-container {
            width: 430px; /* Current width for mobile */
        }
    }

    .card-container {
        overflow: hidden; /* Hides parts of other slides */
        position: relative;
        background-color: #f5f5f5;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        padding: 15px;
        margin-top: 0px;
        height: 200px;
        align-items: center;
        width: 100%;
    }

    .slider {
        display: flex;
        transition: transform 0.8s ease-in-out;
        width: 100%;
        align-items: center;
        gap: 20px;
    }

    .slider img {
        flex: 0 0 100%; /* Each image takes up 100% of the container width */
        height: 150px;
        object-fit: cover;
        border-radius: 8px; /* Optional: Add rounded corners */
        align-items: center;
    }

    .indicator-container {
        display: flex;
        justify-content: center;
        margin-top: 10px;
        gap: 10px;
    }

    .indicator {
        width: 30px; /* Dash size */
        height: 4px;
        background-color: #ccc; /* Inactive color */
        border-radius: 2px;
        transition: background-color 0.3s;
    }

    .indicator.active {
        background-color: #ffbc01; /* Active color */
    }
</style>
 <style> 
         .box {
		       width: 40px !important;
		       height: 40px !important;
		       padding: 8.5px !important; 
		       border-radius: 100px;
		   } 
		   .box-2 {
		       width: 40px !important;
		       height: 40px !important;
		       padding: 8.5px !important; 
		       position: relative;
		       left: 10px;
		       border-radius: 100px;
		   } 
		   .left-10 {
		       position: relative;
		       left: 10px;
		   }
		   .box-inner {
		       position: relative;
		       top: -3px !important;
		   } 
		   .bg-altt {
		       background: #f4f4f4 !important;
		   }

           .m-box{
            display:flex;
            justify-content: center;
            align-items: center;
           }
           .i-box {
               font-size: 18px;
           }

		   .border-primary {
		         border: 1px solid <?= $nbank->site_color ?> !important;
		   }
		   .tps {
		       position: relative;
		       top: -6px;
		   }
		   </style>
<?php

$features = array(
    'airtime' => vp_option_array($option_array,"setairtime"),
    'data' => vp_option_array($option_array,"setdata"),
    'electricity' => vp_option_array($option_array,"setbill"),
    'tv' => vp_option_array($option_array,"setcable"),
    'id-verification?nin' => vp_getoption("setbvn"),
    'id-verification?bvn' => vp_getoption("setbvn"),
    'datacard' => vp_option_array($option_array,"datascontrol"),
    'a2cash' => vp_option_array($option_array,"airtime_to_cash"),
    'rechargecard' =>  vp_option_array($option_array,"cardscontrol"),
    'epin' => vp_option_array($option_array,"epinscontrol"),
    'bulksms' => vp_option_array($option_array,"smscontrol"),
    'coupon' => vp_option_array($option_array,"enable_coupon"),
    'kyc' => strtolower($kyc_data[0]->enable),
    'make' => "true",
    'referral' => "true"
);

$services = array(
    'airtime' => array('icon' => 'max-mobile', 'label' => 'Airtime', 'url' => '?vend=airtime'),
    'data' => array('icon' => 'max-simcard', 'label' => 'Data', 'url' => '?vend=data'),
    'electricity' => array('icon' => 'max-lamp-charge', 'label' => 'Electricity' , 'url' => '?vend=cable'),
    'tv' => array('icon' => 'max-monitor', 'label' => 'TV', 'url' => '?vend=bill'),
    'id-verification?nin' => array('icon' => 'max-barcode', 'label' => 'NIN Printing', 'url' => '?vend=bvn&nin'),
    'id-verification?bvn' => array('icon' => 'max-bank', 'label' => 'BVN Printing', 'url' => '?vend=bvn'),
    'datacard' => array('icon' => 'max-card', 'label' => 'DataCard', 'url' => '?vend=datacard'),
    'rechargecard' => array('icon' => 'max-printer', 'label' => 'AirtimeBulk', 'url' => '?vend=cards'),
    'a2cash' => array('icon' => 'max-blend-2', 'label' => 'A2Cash', 'url' => '?vend=wallet&sub=airtime'),
    'epin' => array('icon' => 'max-teacher', 'label' => 'Exams', 'url' => '?vend=epins'),
    'bulksms' => array('icon' => 'max-sms', 'label' => 'BulkSMS', 'url' => '?vend=sms'),
    'coupon' => array('icon' => 'max-award', 'label' => 'Coupon', 'url' => '?vend=wallet&sub=coupon'),
    'referral' => array('icon' => 'max-user', 'label' => 'Referral', 'url' => '?vend=referral-details'),
    'make' => array('icon' => 'max-user', 'label' => 'Money', 'url' => '#'),
);
$demo = true;
echo '<div class="row " style="position:relative;left:15px;">';
foreach ($features as $key => $feature) {
    if ($feature == 'yes' || $feature == 'checked' || $demo) {
        if (strpos($key, '#') === 0) {
            echo '<a href="javascript:void(0);" class="col-3 mb-2" data-bs-toggle="offcanvas" data-bs-target="' . $key . '"><div>';
        } else {
            echo '<a href="'. $services[$key]['url'] .'" class="col-3 mb-2"><div>';
        }
        echo '  <div class="d-flex flex-column align-items-center bg-card p-2 rounded-lg">';
        echo '    <div class="border-primary bg-altt box rounded-xl mb-1 m-box">';
        echo '      <i class="' . $services[$key]['icon'] . ' box-inner text-primary text-2xl"></i>';
        echo '    </div>';
        echo '    <span class="fs-11 d-block" style="white-space: nowrap">' . $services[$key]['label'] . '</span>';
        echo '  </div>';
        echo '</div></a>';
    }
}
echo '</div>';

echo '</div></div></div></div>';
?>
   <div>
       
         <div class="card bg-white p-4 rounded-lg">
    <div class="d-flex align-items-center">
        <div class="ml-2">
            <div class="font-weight-bold">Own a <?php echo bloginfo('name');?> Retailer Website</div>
            <div class="small">Retail Our services such as Data, Airtime and Recharge PIN printing</div>
        </div>
    </div>
    <div class="mt-3">
        <a href="whatsapp://send?phone=234<?php echo vp_option_array($option_array,"vp_whatsapp");?>&amp;text=Hi,+I+need+retailer+website" class="btn btn-primary">Click Here</a>
    </div>
</div>

        <h6>Quick Action</h6>
<div class="card bg-white p-2 rounded-lg">
    <div class="row text-center"> 
       <?php
       $role = 'customer';
       $reseller_upgrade = 200;
// if ($role == 'customer') {
    // echo '
    //     <div class="col-3 left-1"> 
    //         <a href="#" id="upgradeToReseller">
    //             <div class="border-primary box-2 bg-altt">
    //                 <i class="ri-stock-line tps"></i>
    //                 <form method="POST">
    //                     <input type="hidden" id="charges" value="'. $reseller_upgrade .'">
    //                 </form>
    //             </div>
    //             <small class="fs-11 d-block" style="white-space: nowrap">Reseller</small>
    //         </a>
    //     </div>';
// } else {
    echo '
        <div class="col-3 left-1"> 
            <a href="?vend=upgrade" id="upgradeToAgent" class="d-flex flex-column align-items-center justify-content-center">
                <div class="border-primary box-2 bg-altt m-box">
                    <i class="ri-stock-line tps i-box"></i>
                </div>
                <small class="fs-11 d-block" style="white-space: nowrap">Upgrade Account</small>
            </a>
        </div>';
// } 
?>

        <div class="col-3 left-1">
            <a href="?vend=pricing" class="d-flex flex-column align-items-center justify-content-center">
                <div class="border-primary box-2 bg-altt  m-box">
                    <i class="max-directbox-notif i-box"></i>
                </div>
                <small class="fs-11 d-block">Pricing</small>
            </a>
        </div>
        <div class="col-3 left-1">
            <a  class="d-flex flex-column align-items-center justify-content-center" href="whatsapp://send?phone=234<?php echo vp_option_array($option_array,"vp_whatsapp");?>&amp;text=Hi,+I+want+to+become+an+agent">
                <div class="border-primary box-2 bg-altt  m-box">
                    <i class="max-flash i-box"></i>
                </div>
                <small class="fs-11 d-block" style="white-space: nowrap; position: relative; left: -10px">Become Agent</small>
            </a>
        </div>
        <div class="col-3 left-1"> 
            <a href="?vend=developer" class="d-flex flex-column align-items-center justify-content-center">
                <div class="border-primary box-2 bg-altt  m-box">
                    <i class="max-code"></i>
                </div>
                <small class="fs-11 d-block" style="white-space: nowrap">Developer</small>
            </a>
        </div>
    </div>
</div>

  
<!--- <div class="card-container">
    <div class="slider">
        <img src="https://vtulab.com.ng/wp-content/uploads/2024/12/WhatsApp-1.webp" alt="Banner 2">
        <img src="https://vtulab.com.ng/wp-content/uploads/2024/12/WhatsApp-1.webp" alt="Banner 3">
    </div>
    <div class="indicator-container">
        <div class="indicator active"></div>
        <div class="indicator"></div>
        <div class="indicator"></div>
    </div>
</div>

   <div><br>
       <div class="p-3 mt-4" style="position:relative;top:-45px";>
<div class="card bg-white p-4 rounded-lg">
    <div class="d-flex align-items-center">
        <div class="ml-2">
            <div class="font-weight-bold">Own a  Retailer Website</div>
            <div class="small">Retail Our services such as Data, Airtime and Recharge PIN printing</div>
        </div>
    </div>
    <div class="mt-3">
        <a href="https://wa.link/9lllgc" class="btn btn-primary">Click Here</a>
    </div>
</div>
<div>
<div class="p-3 mt-4" style="position:relative;top:-45px">
<div class="card bg-white p-4 rounded-lg">
    <div class="d-flex align-items-center">
        <div class="ml-2">
            <div class="font-weight-bold">Own a Retailer Website</div>
            <div class="small">Retail Our services such as Data, Airtime and Recharge PIN printing</div>
        </div>
    </div>
    <div class="mt-3">
        <a href="https://wa.link/9lllgc" class="btn btn-primary">Click Here</a>
    </div>
</div>

<h6>Quick Action</h6>
<div class="card bg-white p-2 rounded-lg">
    <div class="row text-center"> -->
       <?php
// if ($nbank == 'customer') {
//     echo '
//         <div class="col-3 left-1"> 
//             <a href="#" id="upgradeToReseller">
//                 <div class="border-primary box-2 bg-altt">
//                     <i class="ri-stock-line tps"></i>
//                     <form method="POST">
//                         <input type="hidden" id="charges" value="'. $reseller_upgrade .'">
//                     </form>
//                 </div>
//                 <small class="fs-11 d-block" style="white-space: nowrap">Reseller</small>
//             </a>
//         </div>';
// } elseif ($nbank == 'reseller') {
//     echo '
//         <div class="col-3 left-1"> 
//             <a href="#" id="upgradeToAgent">
//                 <div class="border-primary box-2 bg-altt">
//                     <i class="ri-stock-line tps"></i>
//                     <form method="POST">
//                         <input type="hidden" id="charges" value="'. $agent_upgrade .'">
//                     </form>
//                 </div>
//                 <small class="fs-11 d-block" style="white-space: nowrap">Agent</small>
//             </a>
//         </div>';
// } else {
//     echo ' <div class="col-3 left-1"> 
//             <a href="/profile">
//                 <div class="border-primary box-2 bg-altt">
//                     <i class="max-headphone"></i>
//                 </div>
//                 <small class="fs-11 d-block" style="white-space: nowrap">Support</small>
//             </a>
//         </div>';
// }

?>
        <!-- <div class="col-3 left-1"> 
            <a href="?vend=upgrade" id="upgradeToAgent">
                <div class="border-primary box-2 bg-altt m-box">
                    <i class="ri-stock-line tps i-box"></i>
                </div>
                <small class="fs-11 d-block" style="white-space: nowrap">Upgrade Account</small>
            </a>
        </div>
        <div class="col-3 left-1">
            <a href="/pricing">
                <div class="border-primary box-2 bg-altt">
                    <i class="max-directbox-notif"></i>
                </div>
                <small class="fs-11 d-block">Pricing</small>
            </a>
        </div>
        <div class="col-3 left-1">
            <a href="https://wa.link/9lllgc">
                <div class="border-primary box-2 bg-altt">
                    <i class="max-flash"></i>
                </div>
                <small class="fs-11 d-block" style="white-space: nowrap; position: relative; left: -10px">Become Agent</small>
            </a>
        </div>
        <div class="col-3 left-1"> 
            <a href="/profile">
                <div class="border-primary box-2 bg-altt">
                    <i class="max-code"></i>
                </div>
                <small class="fs-11 d-block" style="white-space: nowrap">Developer</small>
            </a>
        </div> -->
    </div>
</div>

<?php

echo '<div class="col-lg-12">
        <div class="card radius-30">
            <div class="card-header border-bottom-dashed align-items-center d-flex">
                <br> <h6 class="card-title mb-0 flex-grow-1 fw-medium">Recent Transactions</h6>
            </div>
            <div class="card-body p-2">
                <div data-simplebarr style="">
                    <ul class="list-group list-group-flush border-dashed mb-0">';

$tab = $wpdb->prefix.'sdata';
$transactions = $wpdb->get_results("SELECT * FROM $tab ORDER BY id DESC LIMIT 3");

if (empty($transactions)) {
    echo '<li class="list-group-item text-danger">No transaction found!🤒</li>';
} else {
    foreach ($transactions as $transaction) {
        $biller_name = "Data";
        $transaction_details = $transaction->plan ." Sent To ". $transaction->phone;
        $ref =  "#";
        $status = strtolower($transaction->status);

        $transaction_date = date("jS F, Y", strtotime($transaction->the_time));
        $transaction_amount = number_format($transaction->amount, 2);

        echo '<li class="list-group-item px-1 pointer" onclick="window.location.href=\'#\'">';
        echo '<a class="w-100" href="#">';
        echo '<div class="d-flex">';
            echo '<div class="flex-shrink-0 avatar-xs">';
                    echo '<span class="avatar-title bg-light p-1 rounded-circle">';
                    echo '<img src="'. plugins_url('msorg_template')."/msorg_template/data.jpg" .'" class="img-fluid" alt="' . $biller_name . '" width="30" height="30">';
                    echo '</span>';
            echo '</div>';
            echo '<div class="flex-grow-1 ms-2">';
                    echo '<h6 class="mb-1 fs-11 fw-medium">' . $biller_name . ' ' . $transaction_details . '</h6>';
                    echo '<p class="fs-12 mb-0 text-muted">';
                    echo '<i class="ri-time-line fs-10 align-middle text-primary me-1"></i>' . $transaction_date . '</p>';
            echo '</div>';
            echo '<div class="flex-grow-1 text-end">';

            if ($status == 'successful') {
                echo '<p class="text-success fs-11 mb-0"><i class="ri-check-fill text-success fs-14 align-middle me-1"></i> ₦' . $transaction_amount . '</p>';
                echo '<p class="mb-0 fs-12 text-success">' . $status . '</p>';
            } elseif ($status == 'pending' || $status == 'processing') {
                echo '<p class="text-warning fs-11 mb-0"><i class="ri-refresh-line text-warning fs-14 align-middle me-1"></i> ₦' . $transaction_amount . '</p>';
                echo '<p class="mb-0 fs-12 text-warning">' . $status . '</p>';
            } else {
                echo '<p class="text-danger fs-11 mb-0"><i class="ri-close-circle-fill text-danger fs-14 align-middle me-1"></i> ₦' . $transaction_amount . '</p>';
                echo '<p class="mb-0 fs-12 text-danger">' .$status . '</p>';
            }

            echo '</div>';
        echo '</div>';
        echo '</a>';
        echo '</li>';
    }
}

echo '</ul>
</div>
    <div class="text-center mt-3" style="margin-bottom:-90px;">
        <a href="?vend=history&for=transactions&type=data" class="tp"> See more <i class="ri-loader-2-line ri-spin fs-20 align-middle me-2"></i></a>
    </div>
</div>
</div>
</div>
</div>';
?>


</div>
</div>