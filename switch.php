<?php 
$payment = 'rejected';

switch ($payment) { 
    case 'paid':
        echo 'payment paid';
        break;

    case 'declined':
    case 'rejected':
        echo 'payment declined';
        break;

    case 'pending':
        echo 'pending payment';
        break;

    default:
        echo 'unknown payment status';
}