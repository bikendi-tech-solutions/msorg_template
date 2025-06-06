<?php
if(isset($_GET["vend"]) && $_GET["vend"]=="bvn" && vp_option_array($option_array,"setbvn") == "yes" && vp_option_array($option_array,"vtupress_custom_bvn") == "yes"){
			echo'
			<!-- bvn -->

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
            <label for="card_type" class="mt-2 d-none" >Card Type<code>*</code></label>
                <select id="card_type" class="card_type d-none form-select form-select-sm ">
                    <option value="">Please Select</option>
                    <option value="premium_card">Premium Card</option>
                    <option value="portrait_card">Portrait Slip</option>
                    <option value="landscape_card">Landscape Slip</option>
                </select>

            <label for="vvalue" class="mt-2" ><span class="text-type">Verification</span> Number<code>*</code> </label>
                <input id="vvalue" class="value form-control" type="number" placeholder="Please enter value"/>

            <label for="amount" class="mt-2">Charge</label>
                <input id="amount" class="form-control" type="number" readonly>

            <button class="btn vverify p-2 text-xs font-bold text-white uppercase bg-gray-600 rounded shadow data-proceed-cancled btn-success">Verify</button>

            <script>



                jQuery("#vtype").on("change",function(){
                    var amt = jQuery("#amount");
                    var type = jQuery("#vtype").val();

                    switch(type){
                        case"bvn":
                            amt.val(parseInt("<?php echo vp_getoption('u_bvn_verification_charge');?>"));
                            jQuery(".card_type, [for=card_type]").addClass("d-none");
                            jQuery(".text-type").text("Bvn");
                            break;
                        case"nin":
                            amt.val(parseInt("<?php echo vp_getoption('u_nin_verification_charge');?>"));
                            jQuery(".card_type,[for=card_type] ").removeClass("d-none");
                            jQuery(".text-type").text("Nin");

                            break;
                        default:
                            amt.val(0);
                            alert("Please choose a valid verification type");
                            jQuery(".card_type, [for=card_type]").addClass("d-none");
                            jQuery(".text-type").text("Verification");

                            break;
                    }

                });
                		


                var url = location.href;

                if(url.indexOf("bvn&bvn") > 0){
                    jQuery("#vtype").val("bvn");
                    jQuery("#vtype").change();
                    jQuery(".card_type, [for=card_type], [value=nin]").hide();

                }
                else if(url.indexOf("bvn&nin") > 0){
                    jQuery("#vtype").val("nin");
                    jQuery("#vtype").change();
                    jQuery("[value=bvn]").hide();
                }


                jQuery(".vverify").on("click",function(){
                    var vtype = jQuery("#vtype").val();
                    var card = jQuery("#card_type").val();
                    var vvalue = jQuery("#vvalue").val();

                    obj = {};
                    obj["type"] = vtype;
                    obj["value"] = vvalue;
                    obj["card"] = card;
                   
                    if(vtype == "" || vvalue == "" ){
                        alert("Please fill all the fields");
                        return;
                    }else{
                        jQuery.LoadingOverlay("show");

                        jQuery.ajax({
                            url:"<?php echo plugins_url('vtupress');?>/bvn_verification.php",
                            method:"POST",
                            data:obj,
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
                                
                            success:function(data){
                                jQuery.LoadingOverlay("hide");
                                if(data == "success"){
                                    swal({
                                    title: "Verification Successful!",
                                    text: "Please check history for verification information!",
                                    icon: "success",
                                    button: "Okay",
                                    }).then((value) => {
                                        //?vend=history-plain&id='.$resultsd->id.'&plain_receipt
                                        //location.reload();
                                        var vtype = jQuery("#vtype").val();

                                        if(vtype == "nin"){
                                            location.href = "?vend=history-plain&id=last&plain_receipt";
                                        }
                                    });
                                }else{
                                    swal({
                                    title: "Verification Failed!",
                                    text: data,
                                    icon: "error",
                                    button: "Okay",
                                    });
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