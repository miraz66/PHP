<?php 

// require/ require once / include/ include once

// ----------------------------------------------------------------
// include - the file not found next line code run not all error

// include 'file.php';
// echo "Hello World";

// ----------------------------------------------------------------
// require - the file not found next line code run error all code

// require 'file.php';
// echo "Hello World";

// ----------------------------------------------------------------
// require_once

require_once 'file.php';
$x++; 
echo $x . "\n";

require_once 'file.php';
$x++; 
echo $x . "\n";