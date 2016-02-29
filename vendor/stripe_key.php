<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('vendor/stripe/stripe-php/lib/Stripe.php');
$stripe= [
	'public_key' => 'pk_test_Ah6oO9NYpiresLjMJARpwDri',
	'secret_key' => 'sk_test_SX3KilScqnpfYVUv030Bbndp'
];

Stripe::setApiKey($stripe['secret_key']);
