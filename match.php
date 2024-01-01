<?php
$paymentStatus = 1;

$paymentStatusDisplay = match($paymentStatus) {
    1 => "paid",
    2=> "payment Delivered",
    3=> "pending payment",
};

echo $paymentStatusDisplay;