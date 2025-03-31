<?php
//Function to find maximum value in an array
function findMaxValue($arr) {
    return max($arr);
}

$arr = [10, 20, 50, 30, 40];
echo "Maximum value: " . findMaxValue($arr);
?>