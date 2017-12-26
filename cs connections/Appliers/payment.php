<?php
$root =$_SERVER['DOCUMENT_ROOT'];
//echo $root;
//require "$root/Scholarships/cs connections/braintree-php-3.26.1/lib/autoload.php";
//require "$root/Scholarships/cs connections/braintree-php-3.26.1/lib/Braintree.php";

  //echo($clientToken = Braintree_ClientToken::generate());
  //$nonceFromTheClient = $_POST["payment_method_nonce"];
  //echo $nonceFromTheClient;


?>

<form action="https://www.paypal.me/Connectionsme" method="post">

  <!-- Saved buttons use the "secure click" command -->
  <INPUT TYPE="hidden" name="cmd" value="_xclick">

  <!-- Saved buttons are identified by their button IDs -->
  <input type="hidden" name="hosted_button_id" value="221">

  <!-- Saved buttons display an appropriate button image. -->
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">
  <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>