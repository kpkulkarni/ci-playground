<?php
// A simple function to add numbers
function add($a, $b) {
    return $a + $b; // BUG: We are subtracting instead of adding!
}

// The "Test"
$result = add(2, 2);

if ($result == 4) {
    echo "Test Passed! \n";
    exit(0); // 0 means Success in Linux
} else {
    echo "Test Failed! Expected 4, got $result \n";
    exit(1); // 1 means Error/Failure in Linux
}
?>
