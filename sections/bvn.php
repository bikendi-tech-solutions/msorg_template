<?php
if(isset($_GET["vend"]) && $_GET["vend"]=="bvn" && vp_option_array($option_array,"setbvn") == "checked" && vp_option_array($option_array,"vtupress_custom_bvn") == "yes"){
			echo'
			<!-- bvn -->
<div class="mb-2 row" style="height:fit-content;">
       <span style="float:left;" class="col"> Wallet: '.$bal.'</span>
<span style="float:right;" class="col"><a href="?vend=wallet" style="text-decoration:none; float:right;" class="white btn-primary btn-sm">Fund Wallet</a></span>

</div>
		<div class="user-vends">
';
?>

<link rel="stylesheet" href="<?php echo plugins_url('msorg_template');?>/msorg_template/form.css" media="all">

<div class="container-md mt-3">
		<?php vp_kyc_update();?>
    <div class="data-form p-3" style="border: 1px solid grey; border-radius: 5px;">
	<div class="p-2 check-balance" style="text-align:center;"></div>
        <div class="mb-2">

            <label for="vtype">Verification Type<code>*</code></label>
                <select id="vtype" class="type form-select form-select-sm ">
                    <option value="">Please Select</option>
                    <option value="bvn">BVN</option>
                    <option value="nin">NIN</option>
                </select>

            <label for="vvalue">Verification Value<code>*</code> </label>
                <input id="vvalue" class="value form-control" type="number" placeholder="Please enter value"/>

            <label for="amount">Charge</label>
                <input id="amount" class="form-control" readonly>

            <button class="btn vverify p-2 text-xs font-bold text-white uppercase bg-gray-600 rounded shadow data-proceed-cancled btn-danger">Verify</button>

            <script>
                jQuery("#vtype").on("change",function(){
                    var amt = jQuery("#amount");
                    var type = jQuery("#.vtype").val();

                    switch(type){
                        case"bvn":
                            amt.val(parseInt("<?php echo vp_getoption('bvn_verification_charge');?>"));
                            break;
                        case"nin":
                            amt.val(parseInt("<?php echo vp_getoption('nin_verification_charge');?>"));
                            break;
                        default:
                            amt.val(0);
                            alert("Please choose a valid verification type");
                            break;
                    }

                });
                		

                jQuery(".vverify").on("click",function(){
                    var vtype = jQuery("#vtype").val();
                    var vvalue = jQuery("#vvalue").val();

                    obj = {};
                    obj["type"] = vtype;
                    obj["value"] = vvalue;
                   
                    if(vtype == "" || vvalue == "" ){
                        alert("Please fill all the fields");
                        return;
                    }else{
                        jQuery.LoadingOverlay("show");

                        jQuery.ajax({
                            url:"<?php echo plugins_url('vtupress');?>/bvn_verification.php",
                            method:"POST",
                            data:obj,
                            success:function(data){
                                jQuery.LoadingOverlay("hide");
                                if(data == "success"){

                                }else{
                                    
                                }
                            }
                        });
                    }
                });

            </script>



        </div>


    </div>

</div>





<?php
echo'
		
        </div>

		
		<!-- bvn End -->
		
		
			';
			

		}

?>