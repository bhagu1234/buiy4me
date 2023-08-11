<?php
// Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
$stripe = new \Stripe\StripeClient('sk_test_51MOweQArAHfnnpVFMWRkZnxNSt8BVrZcubmiKiVHkr5xnembMFAeLfS0QrmFTT8Kk7R9apchfwNDE21E9XNllzBY00KCpMpQzq');

$stripe->accounts->create(['type' => 'express']);

$stripe = new \Stripe\StripeClient('sk_test_51MOweQArAHfnnpVFMWRkZnxNSt8BVrZcubmiKiVHkr5xnembMFAeLfS0QrmFTT8Kk7R9apchfwNDE21E9XNllzBY00KCpMpQzq');

$stripe->accountLinks->create([
  'account' => '{{CONNECTED_ACCOUNT_ID}}',
  'refresh_url' => 'https://example.com/reauth',
  'return_url' => 'https://example.com/return',
  'type' => 'account_onboarding',
]);