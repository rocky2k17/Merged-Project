<?php
require('config.php');

if(isset($_POST['stripeToken'])){
\Stripe\Stripe::setVerifySslcerts(false);

$token = $_POST['stripeToken'];

\\stripe\Charge:: create(array{"amount"=>500,
"currency"=>"usd",
"description"=>"GSWA details",
"source" => "token",
}) ;

}
?>