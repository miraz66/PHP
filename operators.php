<?php 
/* Operators */
 $x = 10;
 $y = 3;

// Arithmetic operators (+, -, *, /, %, and **)
// echo $x ** $y;

// Assignments operators (=, +=, -=, *=, /=, %=, and **=)
// $z = ($x = 20) + 10;
// echo $z , $x;
// $x += 10;
// $x **= 2; // (10 * 10) = 100
// $x /= 2; // (10 / 2) = 5
// $x %= 3 ; // (10 % 3) = 1
// echo $x;

// Strings operators (. and .= )
// $x = 'Hello';
// $x .= ' World';
// echo $x;

// Comparison operators (==, ===,!=, !== <=, >=, <>, <=>, ??, ?:)
// var_dump($x <=> $y);  // Print comparison $x = 5 and $y = 10 ans -1 , $x = 10 and $y = 2 ans 1 , $x = 10 and $y = 10 ans 0
$x ='Hello world';
$y = strpos($x, 'H');

// if ($y === false) {
//     echo "H Not Found";
// } else { echo"H Found at index " . $y; }

$result = $y === false ? "H Not Found" : "H Found " . $y;
echo $result;

// Error control operators (@)

// Increment operators / Decrement operators (++, --)

// Logical operators (&&, ||, and, or, xor)

// Bitwise operators (&, |, ^, ~, <<, >>)

// Array operations (+, ==, ===, !=, !==, <>)

// Execution operators (``)

// Type Operations (instanceof)

// Nullsafe operations - PHP8 (?)