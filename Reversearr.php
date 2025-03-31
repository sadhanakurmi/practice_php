<?php
//Function to Reverse an Array
function reverseArray($arr) {
    return array_reverse($arr);
}


$arr = [1, 2, 3, 4, 5];
print_r(reverseArray($arr));
?>