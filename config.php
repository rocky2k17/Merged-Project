<?php
require('stripe-php-master/init.php');

$publishable_key =  "pk_test_51LcqPuEUCXNrDUlRaFLfpMf68ms0vtsLnAu3PdB3UEiMIN3BCMVXwTOU7JCgeDIv03mDcf7G7RkZYLMzyyGNsavO00cIXM1y0C";
$secret_key = "sk_test_51LcqPuEUCXNrDUlRzPkchQXBTTDnIvGExg2WwcxEQWD08gzSraFm23uApuz9TvKYuJWYxGGIhL4xTTCPND5YybeK00yiLAhPpS";


\Stripe\Stripe ::setApiKey($secret_key);
?>

