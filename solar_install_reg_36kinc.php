<?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "mDBnBl";

// Merchant Salt as provided by Payu
$SALT = "96XwPY3L";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";
$amount = 36000;
$info = "solarinstall";
$failure = "http://www.s-sparq.com/failure.php";
$success = "http://www.s-sparq.com/success.php";
$service = "payu_paisa";

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['udf1'])
          || empty($posted['udf2'])
          || empty($posted['udf3'])
         
         || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} else if(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}

?>
<html lang="en">

<head>
<head>
<title>SOLARINSTALL | S-SparQ</title>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="kWatt Solutions Private Limited,kWatt Solutions,Solar,Solar Power,Renewable Energy,SINE,SINE IIT Bombay,Solar Farm,Solar Park,Renewable Energy,Solar Labs,Solar Products,Solar Water Heater,Glowing Street,Solar Power Plant" />
	<meta name="description" content="kWatt Solutions Private Limited is a company incubated in Society for Innovation and Entrepreneurship or SINE at renowned institute, Indian Institute of Technology (IIT) Bombay." />
	<!-- Google fonts -->

<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="css/animate/animate.css" />
<link rel="stylesheet" href="css/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="css/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.bmp" type="image/x-icon">
<link rel="icon" href="images/favicon.bmp" type="image/x-icon">

	<!-- CSS FILES -->
		<link rel="stylesheet" href="css/style2.css">
		
	<link rel="stylesheet" href="css/hover.css">
	<link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
	<link rel="shortcut icon" href="img/favicon.ico" />



	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ekko-lightbox.css" rel="stylesheet">
<link rel="stylesheet" href="css/install.css">

	<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="js/form_submit.js"></script>
	
	<script>
		$(".details").hide();
	</script>
	
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
		  
$("#loader").hide();
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
</head>
<body onLoad="submitPayuForm()">
	
	
	<?php include("header.php")?>
	

	<!--start wrapper-->
	<section class="wrapper">
			<section class="content about">
            
			<div class="container">
            
				<div class="row sub_content">
					<div class="who">
						<div class="col-lg-12 col-md-12 col-sm-12" align="justify" style="margin-top:25px;">
<center style="margin-bottom:50px;"><b><font size="5" color="#0088cc" style="line-height:25px;">SOLARINSTALL Registration</font></b></center>
                
                            
<div class="col-sm-8 col-sm-offset-2 well workshop-frm">
<form action="<?php echo $action; ?>" method="POST" name="payuForm">

  <div class="form-group control-group">
      <input type="hidden" name="key" id="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" id="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" id="txnid" value="<?php echo $txnid ?>" />
      <input type="hidden" name="amount" id="amount" value="<?php echo $amount ?>" />
      <div class="col-xs-12 control-group">
<div class="form-group floating-label-form-group controls ">
    <label>Venue &amp; Date</label>
    <select name="date" class="form-control"  required>
<option value="" style="display:none;">Select Venue &amp; Date</option>
<option value="Mumbai">IIT Bombay, Mumbai 3<sup>rd</sup> - 12<sup>th</sup> December 2016</option>

</select>
</div>
</div>
                          <div class="col-xs-6 control-group">
                            <div class="form-group floating-label-form-group controls">
    <label>First Name</label>
    <input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" placeholder="Enter your firstname name" required>
  </div>
  </div>
                          <div class="col-xs-6 control-group">
                            <div class="form-group floating-label-form-group controls">
    <label>Last Name</label>
    <input type="text" class="form-control" name="udf1" id="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" placeholder="Enter your lastname name" required>
  </div>
  </div>
                          <div class="col-xs-12 control-group">
                            <div class="form-group floating-label-form-group controls">
    <label>Email</label>
    <input type="email" class="form-control" name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" placeholder="Enter your email id" required>
    
  </div>
  </div>
                          <div class="col-xs-6 control-group">
                            <div class="form-group floating-label-form-group controls">
    <label>Mobile</label>
    <input type="number" class="form-control" name="phone" id="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" placeholder="Enter your mobile no." required>
  </div>
  </div><br>
                          <div class="col-xs-6 control-group">
                            <div class="form-group floating-label-form-group controls">
    <label>Company</label>
    <input type="text" class="form-control" name="udf2" id="udf2" value="<?php echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>" placeholder="Enter your company name" required>
  </div>
  </div>
                          <div class="col-xs-6 control-group">
                            <div class="form-group floating-label-form-group controls">
    <label>City</label>
    <input type="text" class="form-control" name="city" id="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>" placeholder="Enter your city name" required>
  </div>
  </div>
                          <div class="col-xs-6 control-group">
                            <div class="form-group floating-label-form-group controls">
    <label>State</label>
    <input type="text" class="form-control" name="udf3" id="udf3" value="<?php echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" placeholder="Enter your state name" required>
  </div>
  </div>
 
  
<!--<center><span class="text-danger" id="flash"> Hurry!!! Limited Early Bird Seats Available for First 10 Registartions Only.</sup></span>-->
  <textarea name="productinfo" id="productinfo" hidden="hidden"><?php echo $info ?></textarea>
  <input type="hidden" name="furl" id="furl" value="<?php echo $failure ?>" size="64" />
  <input type="hidden" name="surl" id="surl" value="<?php echo $success ?>" size="64" />
  <input type="hidden" name="service_provider" id="service_provider" value="<?php echo $service ?>" size="64" />
                          <div class="col-xs-12 control-group">
                            <div class="form-group floating-label-form-group controls"><br>
          <?php if(!$hash) { ?>
  <div align="center"><input type="submit" name="submit" id="submit" class="btn btn-prime" value="Proceed to payment" /></div>
          <?php } else { ?>
  <div align="center"><input type="button" disabled class="btn btn-prime" value="Proceed to payment" /></div>
          <?php } ?>
  </div>
  </div>
</div>

</form>
  						</div>
                        
					<div id="loader" class="loader" align="center"><img src="img/preloader.gif"></img></div>
					</div>
				</div>	
                	
			</div>
		</section>
	</section>
                  
	<!--end wrapper-->
	<div style="margin-top:20px;"></div>
	<!--start footer-->	
	
	<?php include("footer.php")?>
    
	 <!-- Latest compiled and minified JS -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/ekko-lightbox.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script type="text/javascript">
        function show_div(div_id) {
            if (false == $(div_id).is(':visible')) {
                $(div_id).show(250);
            }
            else {
                $(div_id).hide(250);
            }
        }
    </script>
	 <script>
	 $(document).ready(function ($) {

	 	 $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox();
        });
	});
	</script>

</body>
</html>