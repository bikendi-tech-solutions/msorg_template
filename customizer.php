<?php
global $option_array;
$option_array =  json_decode(get_option("vp_options"),true);


    function msorg_checkbox($value=""){
        global $option_array;
        if(strtolower(vp_option_array($option_array,$value)) == "yes"){
            echo "checked";
        }
        else{
            //do nothing
            echo vp_option_array($option_array,$value);
        }
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="background: var(--bs-gray-100);padding: 10px;border-radius: 10px;box-shadow: inset 0px 0px 11px 2px rgb(99,100,102);border-style: none;">
            <div>
                <h1 style="font-size: 16px;">Template Background Colors (gradient):</h1>
                <div style="background: var(--bs-white);margin-left: 10px;padding: 10px;">
                    <div class="row">
                        <div class="col">
                            <h1 style="font-size: 12px;">from:</h1><input type="color" value="<?php echo vp_option_array($option_array,"msorg_from");?>" name="msorg_from"/>
                        </div>
                        <div class="col">
                            <h1 style="font-size: 12px;">to:</h1><input type="color" value="<?php echo vp_option_array($option_array,"msorg_to");?>" name="msorg_to"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container ">
    <div class="row">
        <div class="col-md-12" style="background: var(--bs-gray-100);padding: 10px;border-radius: 10px;box-shadow: inset 0px 0px 11px 2px rgb(99,100,102);border-style: none;margin-top: 10px;">
            <div>
                <h1 style="font-size: 16px;">Section One (HERO):</h1>
                <div style="background: var(--bs-white);margin-left: 10px;padding: 10px;">
                    <div class="row">
                        <div class="col">
                            <div>
                                <h1 style="font-size: 14px;font-weight: bold;">Top Main Message (Referral Info):</h1>
                                <div style="padding: 5px;border-style: solid;border-color: var(--bs-gray-200);border-radius: 5px;">
                                    <form style="margin-left: 7px;">
                                    <div class="form-check">
                                        <input id="formCheck-02" class="form-check-input " <?php msorg_checkbox("msorg_referral_message_enable");?> name="msorg_referral_message_enable" type="checkbox" />
                                        <label class="form-check-label" for="formCheck-02">Enable Top Main Message</label>
                                    </div>
                                        <div class="field">
                                            <textarea type="text" class="form-control"  name="msorg_referral_message" placeholder=" " style="border: 3px none rgb(73, 80, 87);border-top: 2px solid var(--bs-gray-200);border-right: 2px solid var(--bs-gray-200);border-bottom: 2px solid #E0E0E0;border-left: 2px solid var(--bs-gray-200);"><?php echo vp_option_array($option_array,"msorg_referral_message");?></textarea>
                                            <label class="form-label mb-0" for="float-textarea" style="font-size: 10px;">Type In Raw Message</label>
                                        </div>
                                    </form>
                                    <div class="form-check">
                                        <input id="formCheck-1" class="form-check-input " <?php msorg_checkbox("msorg_referral_copy_button_enable");?> name="msorg_referral_copy_button_enable" type="checkbox" />
                                        <label class="form-check-label" for="formCheck-1">Show Referrer Link &amp; Copy Button</label>
                                    </div>
                                    <input name="msorg_download_button_link" type="url" style="margin-top: 15px;" placeholder="Enter APP Download URL" value="<?php echo vp_option_array($option_array,"msorg_download_button_link");?>"/>
                                    <div class="form-check">
                                        <input name="msorg_download_button_enable" id="formCheck-2" class="form-check-input " <?php msorg_checkbox("msorg_download_button_enable");?> type="checkbox" />
                                        <label class="form-check-label" for="formCheck-2">Show Download Button</label>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 20px;">
                                <h1 style="font-size: 14px;font-weight: bold;margin-top: 48px;">Message Below Plan (Reseller Websites Info):</h1>
                                <div style="padding: 5px;border-style: solid;border-color: var(--bs-gray-200);border-radius: 5px;">
                                    <form style="margin-left: 7px;">
                                    <div class="form-check">
                                        <input name="msorg_message_reseller_enable" id="formCheck-4" class="form-check-input " <?php msorg_checkbox("msorg_message_reseller_enable");?> type="checkbox" />
                                        <label class="form-check-label" for="formCheck-4">Enable This Message</label>
                                    </div>

                                        <div class="field">
                                            <textarea type="text" class="form-control" name="msorg_message_reseller" placeholder=" " style="border: 3px none rgb(73, 80, 87);border-top: 2px solid var(--bs-gray-200);border-right: 2px solid var(--bs-gray-200);border-bottom: 2px solid #E0E0E0;border-left: 2px solid var(--bs-gray-200);"><?php echo vp_option_array($option_array,"msorg_message_reseller");?></textarea>
                                            <label class="form-label mb-0" for="float-textarea" style="font-size: 10px;">Type In Raw Message</label>
                                        </div>
                                    </form>
                                    <input name="msorg_reseller_button_link" type="url" placeholder="Enter Redirection Link Here" style="margin-left: 7px;margin-top: 5px;" value="<?php echo vp_option_array($option_array,'msorg_reseller_button_link');?>" />

                                    <div class="form-check">
                                        <input name="msorg_reseller_button_enable" id="formCheck-04" class="form-check-input"   <?php msorg_checkbox("msorg_reseller_button_enable");?> type="checkbox" />
                                        <label class="form-check-label" for="formCheck-04">Show Click To Action Button</label>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 20px;">
                                <h1 style="font-size: 14px;font-weight: bold;margin-top: 48px;">Marquee (Scrolling Text):</h1>
                                <div class="field" style="padding: 5px;border-style: solid;border-color: var(--bs-gray-200);border-radius: 5px;">
                                    <form>
                                        <div class="field">
                                            <textarea class="form-control" name="msorg_marquee_message" placeholder=" " style="border: 3px none rgb(73, 80, 87);border-top: 2px solid var(--bs-gray-200);border-right: 2px solid var(--bs-gray-200);border-bottom: 2px solid #E0E0E0;border-left: 2px solid var(--bs-gray-200);" type="text"><?php echo vp_option_array($option_array,"msorg_marquee_message");?></textarea>
                                            <label class="form-label mb-0" for="float-textarea" style="font-size: 10px;">Type In Raw Message</label>
                                        </div>
                                    </form>
                                    <div class="form-check">
                                        <input name="msorg_marquee_message_enable" id="formCheck-3" class="form-check-input  " <?php msorg_checkbox("msorg_marquee_message_enable");?> type="checkbox" />
                                        <label class="form-check-label" for="formCheck-3">Enable Marquee</label>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 20px;">
                                <h1 style="font-size: 14px;font-weight: bold;margin-top: 48px;">FAQ:</h1>
                                <div class="field">
                                    <input type="url" name="msorg_faq_link" placeholder="Enter Valid FAQ Page Link" value="<?php echo vp_option_array($option_array,"msorg_faq_link");?>"/>
                                    <div class="form-check">
                                        <input id="formCheck-5" name="msorg_faq_link_enable" class="form-check-input " <?php msorg_checkbox("msorg_faq_link_enable");?> type="checkbox" />
                                        <label class="form-check-label" for="formCheck-5">Enable FAQ</label>
                                    </div>
                                </div>
                                <br>
                                <br>

                                <button class="btn btn-primary save_msorg" type="button">Save</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(".save_msorg").click(function(){
jQuery(".save_msorg").text("Please Wait...");
var obj = {};
var toatl_input = jQuery(".loginit input, .loginit textarea").length;
var run_obj;

for(run_obj = 0; run_obj <= toatl_input; run_obj++){
var current_input = jQuery(".loginit input, .loginit textarea").eq(run_obj);


var obj_name = current_input.attr("name");
var obj_value = current_input.val();
var obj_type = current_input.attr("type");

if(typeof obj_name !== typeof undefined && obj_name !== false){
    //alert(obj_type);
    if(obj_type == "checkbox"){
        if(current_input.is(":checked")){
            obj_value = "yes";
        }
        else{
            obj_value = "no";
        }
    }
    else{
        //obj_value = obj_value;
    }

//alert(obj_name+" - "+obj_value);
//alert(obj_name);
//alert(obj_value);
}

obj[obj_name] = obj_value;
	
}



jQuery.ajax({
  url: "<?php echo vp_option_array($option_array,'siteurl').'/wp-content/plugins/msorg_template/save.php';?>",
  data: obj,
  dataType:'text',
  "cache": false,
  "async": true,
  error: function (jqXHR, exception) {
	  console.log(jqXHR);
       console.log(exception);
		jQuery(".save_msorg").text("Save");
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

		jQuery(".save_msorg").text("Save");
        if(data == "100" ){
	
		  swal({
  title: "Saved",
  text: "Successfully",
  icon: "success",
  button: "Okay",
}).then((value) => {
	location.reload();
});
	  }
	  else{
		  msg = data;
	 swal({
  title: "Error Saving",
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