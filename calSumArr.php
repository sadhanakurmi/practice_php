<?php
//Function to calculate Sum of Array Elements
function sumArray($arr) {
    return array_sum($arr);
}


$arr = [1, 2, 3, 4, 5];
echo "Sum of array: " . sumArray($arr);
?>