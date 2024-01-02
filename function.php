<?php

declare(strict_types=1);

// function foo(int|float &$x, int|float $y):int | float {
//     if($x % 2 === 0) {
//         $x/= 2;
//     }elseif($x % 2 === 1) {
//         echo "Please";
//     }
//     return $x * $y;
// }
// $a = 6.0;
// $b = 7;


// echo foo($a, $b) . "\n";

// var_dump($a, $b);

function sum(int | float $x, int | float $y , int| float ...$number):int | float {
    return $x + $y + array_sum($number);
}

$a = 6.0;
$b = 7;

echo sum($a, $b, 10,30,400.23, 70);