<?php 
// Error handling

// trigger_error('Example error', E_WARNING);
// echo 1;  

function errorHandler(int $type, string $msg, ?string $file = null, ?int $line = null) {
    echo $type . ':' . $msg . 'in ' . $file . 'on line ' . $line;

    exit;
}

