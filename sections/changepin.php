<?php
vtupress_auto_override();
if(isset($_GET["vend"]) && $_GET["vend"]=="changepin"){

echo'
<style>
	.side-wallet-w{background-color: white !important;
    padding: 20px !important;
    text-align: center !important;
    border-radius: 10px !important;
	border:2px solid purple;
		  }
		  
</style>
		
<div id="side-wallet-w" class="side-wallet-w dark-white">
<div class="fund-other-wallet">

<form method="post" target="_self" >

<label for="user-id" class="form-label">New Pin</label><br>

<div class="input-group mb-2">
<input type="password" name="pin" class="form-control pin" maxlength="5" required><br>
</div>

<label for="user-id" class="form-label">Confirm Pin</label><br>

<div class="input-group mb-2">
<input type="password" name="cpin" class="form-control cpin" maxlength="5" required><br>
</div>

<label for="amount" class="form-label">Your Password</label><br>
<input type="password" name="password" class="form-control mb-2 password" required><br>

<input type="button" name="changepin" class="form-submit form-control mb-2 btn-primary w-full p-2 text-xs font-bold text-white uppercase bg-indigo-600 rounded shadow changepin" value="Change Pin"><br>

</form>

<script>





/*CHANGE PIN*/
jQuery(".changepin").click(function(){


jQuery.LoadingOverlay("show");
	
var obj = {};
obj["changepin"] = "change";
obj["pin"] = jQuery(".cpin").val();
obj["password"] = jQuery(".password").val();

if(jQuery(".pin").val() != obj["pin"]){
alert("Pin Mis-match");
return;
}

jQuery.ajax({
  url: "'.plugins_url("msorg_template").'/sections/sub/changepin.php",
  data: obj,
  dataType: "json",
  "cache": false,
  "async": true,

  error: function (jqXHR, exception) {
	  jQuery.LoadingOverlay("hide");
	jQuery(".spinner-grow").addClass("visually-hidden");
	jQuery(".verify-user").show();
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
	 jQuery(".user-balance").text(data.balance);
	jQuery.LoadingOverlay("hide");
        if(data.status == "100"){
		  swal({
  title: "Successful!",
  text: "Pin Changed Successfully!",
  icon: "success",
  button: "Okay",
}).then((value) => {
	location.reload();
});
	  }
	  else if(data.status == "200"){
		  var msg = data.balance;
	  swal({
  title: "Not Successful!",
  text: msg,
  icon: "error",
  button: "Okay",
});
	  }
  else{
	  swal({
  title: "Not Successful!",
  text: "There Was A Problem Proceeding!",
  icon: "error",
  button: "Okay",
});
}

  },
  type: "POST"
});

});
</script>

<br>
';

echo'

</div>
		
		
		
		</div>
		
		<!-- Account End -->
		
		';
		
}
else{

echo "<h1>TRANSFER NOT ENABLED FOR THIS PLAN OR HAS BEEN TURNED OFF GENERALLY</h1>";
	
}

?>