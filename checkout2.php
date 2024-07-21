<?php

require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = 'sk_test_51Pf55RKuB1CKSk0tdKCzmPZxnoboyZsyJdjCkOuHwWcBi8tAll5YgdzcyVBnluEdQOFjRRBVVt91UgGfUWV9bOSM00YDYG8F3F'; 

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/success.php",
    "cancel_url" => "http://localhost/index.php",
    "line_items" => [
        [
            "quantity" => 2,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => 13900,
                "product_data" => [
                    "name" => "Sơ mi thiên nhiên"
                ]
            ]
        ],
        [
            "quantity" => 2,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => 12000,
                "product_data" => [
                    "name" => "Sơ mi hoa"
                ]
            ]
        ],
        [
            "quantity" => 2,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => 12000,
                "product_data" => [
                    "name" => "Sơ mi hoa 2"
                ]
            ]
        ]        
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);
