<style>
    .primary-color{
        background-color: <?php echo vp_getoption("msorg_from");?>;
    }
    .text-primary, .primary-text{
        color: <?php echo vp_getoption("msorg_from");?>;
    }
    .primary-border{
        border: 1px solid <?php echo vp_getoption("msorg_from");?>;
    }
</style>


<div class="container position-relative" id="main-page">

    <div id="airtime-page-header" class="row p-4 bg-white">
        <div class="col d-flex flex-row justify-content-start align-items-start">
           <span class="general-text"><a href="#" class="back cursor-pointer text-decoration-none text-black"><i class="fa-solid fa-angle-left me-3 "></i></a>Bank Transfer</span>
        </div>
    </div>


	
<div class="transfer-row container-fluid  ">
    <div class="row hooktop d-none">
        <div class="col primary-color text-white p-3 d-flex justify-content-between">
            <i class="fa-solid fa-caret-left go-back fs-2 "></i>
            <i class="fa-solid fa-clock-rotate-left fs-2 refresh"></i>
        </div>
    </div>
    <div class="row mt-3 d-none">
        <div class="col">
            <!-- alert-->
             <div class="alert alert-info alert-dismissible fade show" role="alert">
                  <strong>Hello!</strong> Welcome to out chatroom where you can buy/sell.
                  
                  <button type="button" class="btn-close d-none" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
            <!-- end of alert-->
        </div>
    </div>

    <div class="row hookafter p-2 ">
        <div class="col-12 my-2 d-flex justify-content-center align-items-center p-3 shadow rounded border">
            <form action="" class="withdrawalForm py-3">
                    
                <div class="balance">
                    <span class="text-primary rounded primary-border py-2 ps-3 "> <span class="primary-text me-2">Your Balance:</span> <span class="userbalance  p-2 rounded-end text-white fw-bold primary-color d-none"><?php echo intval($bal);?></span><span class="userbalNow p-2 rounded-end text-white fw-bold primary-color"><?php echo number_format($bal);?></span></span>
                </div>
                
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" class="form-control" id="amount" placeholder="Enter amount">
                    <small id="amountHelp" class="form-text text-muted">Please enter a valid amount.</small>
                </div>
                <div class="form-group">
                    <label for="accountName">Bank:</label>
                    <select name="bankCode" class="form-control bankCode"  id="bankCode" >
                        <option value=""> Select Bank </option>
                        <option value='120001'> 9mobile 9Payment Service Bank </option>
                        <option value='404'> Abbey Mortgage Bank </option>
                        <option value='51204'> Above Only MFB </option>
                        <option value='51312'> Abulesoro MFB </option>
                        <option value='044'> Access Bank </option>
                        <option value='063'> Access Bank (Diamond) </option>
                        <option value='602'> Accion Microfinance Bank </option>
                        <option value='50315'> Aella MFB </option>
                        <option value='90077'> AG Mortgage Bank </option>
                        <option value='50036'> Ahmadu Bello University Microfinance Bank </option>
                        <option value='120004'> Airtel Smartcash PSB </option>
                        <option value='51336'> AKU Microfinance Bank </option>
                        <option value='090561'> Akuchukwu Microfinance Bank Limited </option>
                        <option value='035A'> ALAT by WEMA </option>
                        <option value='090629'> Amegy Microfinance Bank </option>
                        <option value='50926'> Amju Unique MFB </option>
                        <option value='645'> Amucha MFB </option>
                        <option value='645'> Amucha Microfinance Bank </option>
                        <option value='50083'> Aramoko MFB </option>
                        <option value='401'> ASO Savings and Loans </option>
                        <option value='50092'> Assets Microfinance Bank </option>
                        <option value='MFB50094'> Astrapolaris MFB LTD </option>
                        <option value='090478'> AVUENEGBE MICROFINANCE BANK </option>
                        <option value='51351'> AWACASH MICROFINANCE BANK </option>
                        <option value='51337'> AZTEC MICROFINANCE BANK LIMITED </option>
                        <option value='51229'> Bainescredit MFB </option>
                        <option value='50117'> Banc Corp Microfinance Bank </option>
                        <option value='51341'> BANKLY MFB </option>
                        <option value='MFB50992'> Baobab Microfinance Bank </option>
                        <option value='51100'> BellBank Microfinance Bank </option>
                        <option value='51267'> Benysta Microfinance Bank Limited </option>
                        <option value='50123'> Beststar Microfinance Bank </option>
                        <option value='50931'> Bowen Microfinance Bank </option>
                        <option value='FC40163'> Branch International Finance Company Limited </option>
                        <option value='565'> Carbon </option>
                        <option value='51353'> Cashbridge Microfinance Bank Limited </option>
                        <option value='865'> CASHCONNECT MFB </option>
                        <option value='50823'> CEMCS Microfinance Bank </option>
                        <option value='50171'> Chanelle Microfinance Bank Limited </option>
                        <option value='312'> Chikum Microfinance bank </option>
                        <option value='023'> Citibank Nigeria </option>
                        <option value='070027'> CITYCODE MORTAGE BANK </option>
                        <option value='50910'> Consumer Microfinance Bank </option>
                        <option value='50204'> Corestep MFB </option>
                        <option value='559'> Coronation Merchant Bank </option>
                        <option value='FC40128'> County Finance Limited </option>
                        <option value='51297'> Crescent MFB </option>
                        <option value='090560'> Crust Microfinance Bank </option>
                        <option value='51334'> Davenport MICROFINANCE BANK </option>
                        <option value='50162'> Dot Microfinance Bank </option>
                        <option value='050'> Ecobank Nigeria </option>
                        <option value='50263'> Ekimogun MFB </option>
                        <option value='098'> Ekondo Microfinance Bank </option>
                        <option value='090678'> EXCEL FINANCE BANK </option>
                        <option value='50126'> Eyowo </option>
                        <option value='51318'> Fairmoney Microfinance Bank </option>
                        <option value='50298'> Fedeth MFB </option>
                        <option value='070'> Fidelity Bank </option>
                        <option value='51314'> Firmus MFB </option>
                        <option value='011'> First Bank of Nigeria </option>
                        <option value='214'> First City Monument Bank </option>
                        <option value='090164'> FIRST ROYAL MICROFINANCE BANK </option>
                        <option value='413'> FirstTrust Mortgage Bank Nigeria </option>
                        <option value='501'> FSDH Merchant Bank Limited </option>
                        <option value='832'> FUTMINNA MICROFINANCE BANK </option>
                        <option value='MFB51093'> Garun Mallam MFB </option>
                        <option value='812'> Gateway Mortgage Bank LTD </option>
                        <option value='00103'> Globus Bank </option>
                        <option value='090574'> Goldman MFB </option>
                        <option value='100022'> GoMoney </option>
                        <option value='090664'> GOOD SHEPHERD MICROFINANCE BANK </option>
                        <option value='50739'> Goodnews Microfinance Bank </option>
                        <option value='562'> Greenwich Merchant Bank </option>
                        <option value='51276'> GROOMING MICROFINANCE BANK </option>
                        <option value='058'> Guaranty Trust Bank </option>
                        <option value='51251'> Hackman Microfinance Bank </option>
                        <option value='50383'> Hasal Microfinance Bank </option>
                        <option value='120002'> HopePSB </option>
                        <option value='51211'> IBANK Microfinance Bank </option>
                        <option value='51244'> Ibile Microfinance Bank </option>
                        <option value='50439'> Ikoyi Osun MFB </option>
                        <option value='50442'> Ilaro Poly Microfinance Bank </option>
                        <option value='50453'> Imowo MFB </option>
                        <option value='415'> IMPERIAL HOMES MORTAGE BANK </option>
                        <option value='50457'> Infinity MFB </option>
                        <option value='090701'> ISUA MFB </option>
                        <option value='301'> Jaiz Bank </option>
                        <option value='50502'> Kadpoly MFB </option>
                        <option value='51308'> KANOPOLY MFB </option>
                        <option value='082'> Keystone Bank </option>
                        <option value='100025'> KONGAPAY (Kongapay Technologies Limited)(formerly Zinternet) </option>
                        <option value='50200'> Kredi Money MFB LTD </option>
                        <option value='50211'> Kuda Bank </option>
                        <option value='90052'> Lagos Building Investment Company Plc. </option>
                        <option value='50549'> Links MFB </option>
                        <option value='031'> Living Trust Mortgage Bank </option>
                        <option value='50491'> LOMA MFB </option>
                        <option value='303'> Lotus Bank </option>
                        <option value='090171'> MAINSTREET MICROFINANCE BANK </option>
                        <option value='50563'> Mayfair MFB </option>
                        <option value='50304'> Mint MFB </option>
                        <option value='946'> Money Master PSB </option>
                        <option value='50515'> Moniepoint MFB </option>
                        <option value='120003'> MTN Momo PSB </option>
                        <option value='090190'> MUTUAL BENEFITS MICROFINANCE BANK </option>
                        <option value='090679'> NDCC MICROFINANCE BANK </option>
                        <option value='51361'> NET MICROFINANCE BANK </option>
                        <option value='51142'> Nigerian Navy Microfinance Bank Limited </option>
                        <option value='561'> NOVA BANK </option>
                        <option value='50629'> NPF MICROFINANCE BANK </option>
                        <option value='999992'> OPay Digital Services Limited (OPay) </option>
                        <option value='107'> Optimus Bank Limited </option>
                        <option value='100002'> Paga </option>
                        <option value='999991'> PalmPay </option>
                        <option value='104'> Parallex Bank </option>
                        <option value='311'> Parkway - ReadyCash </option>
                        <option value='090680'> PATHFINDER MICROFINANCE BANK LIMITED </option>
                        <option value='100039'> Paystack-Titan </option>
                        <option value='50743'> Peace Microfinance Bank </option>
                        <option value='51226'> PECANTRUST MICROFINANCE BANK LIMITED </option>
                        <option value='51146'> Personal Trust MFB </option>
                        <option value='50746'> Petra Mircofinance Bank Plc </option>
                        <option value='050021'> PFI FINANCE COMPANY LIMITED </option>
                        <option value='268'> Platinum Mortgage Bank </option>
                        <option value='00716'> Pocket App </option>
                        <option value='076'> Polaris Bank </option>
                        <option value='50864'> Polyunwana MFB </option>
                        <option value='105'> PremiumTrust Bank </option>
                        <option value='50739'> Prospa Capital Microfinance Bank </option>
                        <option value='050023'> PROSPERIS FINANCE LIMITED </option>
                        <option value='101'> Providus Bank </option>
                        <option value='51293'> QuickFund MFB </option>
                        <option value='502'> Rand Merchant Bank </option>
                        <option value='090496'> RANDALPHA MICROFINANCE BANK </option>
                        <option value='90067'> Refuge Mortgage Bank </option>
                        <option value='50761'> REHOBOTH MICROFINANCE BANK </option>
                        <option value='50994'> Rephidim Microfinance Bank </option>
                        <option value='51286'> Rigo Microfinance Bank Limited </option>
                        <option value='50767'> ROCKSHIELD MICROFINANCE BANK </option>
                        <option value='125'> Rubies MFB </option>
                        <option value='51113'> Safe Haven MFB </option>
                        <option value='951113'> Safe Haven Microfinance Bank Limited </option>
                        <option value='40165'> SAGE GREY FINANCE LIMITED </option>
                        <option value='50582'> Shield MFB </option>
                        <option value='106'> Signature Bank Ltd </option>
                        <option value='51062'> Solid Allianze MFB </option>
                        <option value='50800'> Solid Rock MFB </option>
                        <option value='51310'> Sparkle Microfinance Bank </option>
                        <option value='221'> Stanbic IBTC Bank </option>
                        <option value='068'> Standard Chartered Bank </option>
                        <option value='090162'> STANFORD MICROFINANCE BANK </option>
                        <option value='50809'> STATESIDE MICROFINANCE BANK </option>
                        <option value='51253'> Stellas MFB </option>
                        <option value='232'> Sterling Bank </option>
                        <option value='100'> Suntrust Bank </option>
                        <option value='50968'> Supreme MFB </option>
                        <option value='302'> TAJ Bank </option>
                        <option value='51269'> Tangerine Money </option>
                        <option value='000304'> The Alternative bank </option>
                        <option value='102'> Titan Bank </option>
                        <option value='090708'> TransPay MFB </option>
                        <option value='50840'> U&C Microfinance Bank Ltd (U AND C MFB) </option>
                        <option value='090706'> UCEE MFB </option>
                        <option value='51322'> Uhuru MFB </option>
                        <option value='50870'> Unaab Microfinance Bank Limited </option>
                        <option value='50871'> Unical MFB </option>
                        <option value='51316'> Unilag Microfinance Bank </option>
                        <option value='032'> Union Bank of Nigeria </option>
                        <option value='033'> United Bank For Africa </option>
                        <option value='215'> Unity Bank </option>
                        <option value='50894'> Uzondu Microfinance Bank Awka Anambra State </option>
                        <option value='050020'> Vale Finance Limited </option>
                        <option value='566'> VFD Microfinance Bank Limited </option>
                        <option value='51355'> Waya Microfinance Bank </option>
                        <option value='035'> Wema Bank </option>
                        <option value='594'> Yes MFB </option>
                        <option value='057'> Zenith Bank </option>
                    </select>
                    <small id="amountHelp" class="form-text text-muted">Select Your Bank</small>
                </div>
                <div class="form-group">
                    <label for="accountNumber">Account Number:</label>
                    <input type="number" class="form-control" id="accountNumber" placeholder="Enter account number">
                    <small id="amountHelp" class="form-text text-muted">Please enter a valid account Number.</small>
                </div>
                <div class="form-group">
                    <label for="accountName">Account Name:</label>
                    <input type="name" class="form-control" id="accountName" placeholder="Enter account name" disabled>
                    <small id="amountHelp" class="form-text text-muted">Wait for around 5seconds after entering your account number.</small>
                </div>


                <button type="button" class="btn primary-color text-white withdrawNow">Transfer</button>


            </form>
        </div>
    </div>
</div>	
		



</div>


<script>


var withdrawUrl = "<?php echo plugins_url('vtupress/transfer.php');?>";

function doAjax(url, data, type, successCallback = defaultSuccessfullMessage){
  
  if(url == ""){
    showToast("URL is not defined","red",2000);
    return;
  }
  else if (!data || typeof data !== 'object') {
    showToast("Data object is not defined","red",2000);
    return;
  }
  else if (type.toLowerCase() != 'post' && type.toLowerCase() != 'get'){
    showToast("Type must be either post or get","red",2000);
    return;
  }

  showToast("Processing","yellow",5000);

  jQuery.ajax({
    url: url,
    data: data,
    dataType: "text",
    "cache": false,
    "async": true,
    type: type.toUpperCase(),
    error: function (jqXHR, exception) {
      var msg = "";
      if (jqXHR.status === 0) {
          msg = "No Connection.\n Verify Network.";
      }   else if (jqXHR.status == 403) {
            msg = "Access Forbidden [403].";
      }  else if (jqXHR.status == 404) {
          msg = "Requested page not found. [404]";
      } else if (jqXHR.status == 500) {
              msg = "Internal Server Error [500].";
      } else if (exception === "parsererror") {
            msg = "Requested JSON parse failed.";
      } else if (exception === "timeout") {
            msg = "Time out error.";
      } else if (exception === "abort") {
            msg = "Ajax request aborted.";
      } else {
          msg = "Uncaught Error.\n" + jqXHR.responseText;
      }
      
      showToast(msg, "red",4000);
      jQuery("button").removeAttr("disable");
      },
      success: function(response) {
        successCallback(response);
      }


  });

}

    jQuery("#amount").on("input", function() {
    var amt = jQuery(this).val();
    var bal = parseInt(jQuery(".userbalance").text());
    
    if (isNaN(amt) || amt <= 0) {
        jQuery(this).val("");
        return;
    }

    else if(amt > bal){
        jQuery(this).val("");
        showToast("Insufficient balance!","red");
        return;
    }
    
});

jQuery("#amount").on("change", function() {
    var amt = jQuery(this).val();
    var bal = parseInt(jQuery(".userbalance").text());
    if(amt < 100){
        jQuery(this).val("");
        showToast("Minimum withdrawal is ₦100!","red");
        return;
    }
    
});


function generateName(response){
   jQuery("#accountName").val(response);
}

function transferResponse(response){

    jQuery(".withdrawNow").removeClass("disabled");

    if(response == "success"){
        showToast("Transfer successful!","green");
        jQuery("#amount").val("");
        jQuery("#accountNumber").val("");
        jQuery("#bankCode").val("");

        setTimeout(function() {
           window.location.href = "?vend=history&for=wallet";
        },1000);
    }
    else if(response == "failed"){
        showToast("Transfer failed!","red");
        setTimeout(function() {
           window.location.href = "?vend=history&for=wallet";
        },1000);
    }
    else if(response == "101"){
        showToast("Error Processing - 101","red");
        setTimeout(function() {
           window.location.href = "?vend=history&for=wallet";
        },1000);
    }
    else if(response == "102"){
        showToast("Error Processing - 102","red");
    }
    else{
        showToast(response,"red");
    }
}

var userId = "123456"; // Replace with user ID
var userCode = "";


jQuery("#accountNumber").on("input", function() {
    var amt = jQuery("#amount").val();
    var acct = jQuery(this).val();
    var bank = jQuery("#bankCode").val();
    

    jQuery("#accountName").val("");
    if(acct.length != 10){
        //showToast("Invalid account number!","red");
        jQuery("#accountNumber").focus();
        return;
    }
    else if(bank == ""){
        showToast("Invalid bank!","red");
        jQuery("#bankCode").select();
        return;
    }

    setTimeout(function() {
        var obj = {
            "id":userId,
            "code":userCode,
            "account_number": acct,
            "bank_code": bank,
            "amount": amt,
            "account_name": "Akor Victor",
            "get_details": "yes",
            "action": "details"
        };

        console.log(obj);
        console.log(withdrawUrl);
        doAjax(withdrawUrl,obj,'post',generateName);
    },500);
});

jQuery(".withdrawNow:not('.disabled')").click(function() {
    var amt = jQuery("#amount").val();
    var bal = parseInt(jQuery(".userbalance").text());
    var acct = jQuery("#accountNumber").val();
    var accountName = jQuery("#accountName").val();
    var bank = jQuery("#bankCode").val();
    var bankCode = jQuery("#bankCode").val();
    
    if(isNaN(amt) || amt <= 0){
        showToast("Invalid amount!","red");
        jQuery("#amount").focus();
        return;
    }
    else if(amt > bal){
        showToast("Insufficient balance!","red");
        return;
    }
    else if(acct.length != 10){
        showToast("Invalid account number!","red");
        jQuery("#accountNumber").focus();
        return;

    }
    else if(accountName.length < 3 || accountName == ""){
        showToast("Invalid account holder name!","red");
        jQuery("#accountName").focus();
        return;
    }
    else if( bankCode == ""){
        showToast("Invalid bank!","red");
        jQuery("#accountName").focus();
        return;
    }
    

    //do ajax

    var obj = {
        "id":userId,
        "code":userCode,
        "account_number": acct,
        "bank_code": bank,
        "amount": amt,
        "account_name": "Akor Victor",
        "action": "transfer"
    };

    console.log(obj);
    console.log(withdrawUrl);
    jQuery(this).addClass("disabled");
    doAjax(withdrawUrl,obj,'post',transferResponse);
    
});
</script>
