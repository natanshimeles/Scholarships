<?php
$root =$_SERVER['DOCUMENT_ROOT'];
echo $root;
require "$root/Scholarships/cs connections/braintree-php-3.26.1/lib/autoload.php";
require "$root/Scholarships/cs connections/braintree-php-3.26.1/lib/Braintree.php";

  //echo($clientToken = Braintree_ClientToken::generate());
  $nonceFromTheClient = $_POST["payment_method_nonce"];
  echo $nonceFromTheClient;


?>