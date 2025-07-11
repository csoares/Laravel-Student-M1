<?php

require __DIR__.'/vendor/autoload.php';

// Test the optional() helper function
$value = 'test';
$result = optional($value, function($value) {
    return $value . ' processed';
});

echo "Result: $result\n";

// Test the with() helper function
$result = with($value, function($value) {
    return $value . ' processed with with()';
});

echo "Result: $result\n";