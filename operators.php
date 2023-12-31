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
// $x ='Hello world';
// $y = strpos($x, 'H');
// if ($y === false) {
//     echo "H Not Found";
// } else { echo"H Found at index " . $y; }
// $result = $y === false ? "H Not Found" : "H Found " . $y;
// echo $result;
// $z = $m ?? "hello world";
// echo $z;

// Error control operators (@)
// $z = @file(foo.txt)

// Increment operators / Decrement operators (++, --)
// $z = 5;
// $z++; // Post increment operator
// $z--; // Post decrement operator
// ++$z; // pre increment operator
// --$z; // pre decrement operator
// echo $z;

// Logical operators (&&, ||, and, or, xor)
// $x = true;
// $y = false;
// $z = $x or $y;
// var_dump($z);

// Bitwise operators (&, |, ^, ~, <<, >>)
$x = 6;
$y = 3;

//110
//& 
//011
//010 = 2
// var_dump($x & $y); // set value to 1 & 1 = 1 and 0 & 1 = 0
// var_dump($x | $y); // set value to 0 | 1 = 1 and 0 | 0 = 0 and 1 | 1 = 1
// var_dump($x ^ $y); // set value to 0 ^ 1 = 1 and 0 ^ 1 = 1 and 1 ^ 1 = 0

//110
//~
//001
//&
//011
//001 = 1
var_dump(~$x & $y);

// Array operations (+, ==, ===, !=, !==, <>)

// Execution operators (``)

// Type Operations (instanceof)

// Nullsafe operations - PHP8 (?)