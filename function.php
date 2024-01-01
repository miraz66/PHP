<?php

declare(strict_types=1);

function foo(int|float &$x, int|float $y):int | float {
    if($x % 2 === 0) {
        $x/= 2;
    }
    return $x * $y;
}
$a = 6.0;
$b = 7;


echo foo($a, $b);

