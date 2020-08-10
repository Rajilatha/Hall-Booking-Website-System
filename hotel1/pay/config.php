<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

	$stripeDetails = array(
		"secretKey" => "pk_test_eHAsSdSEWUlU9zv3sOndHdED0086NX6vYY",
		"publishableKey" => "pk_test_eHAsSdSEWUlU9zv3sOndHdED0086NX6vYY"
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);
?>
