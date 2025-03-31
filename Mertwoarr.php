<?php
//Function to Merge Two Arrays
function mergeArrays($arr1, $arr2) {
    return array_merge($arr1, $arr2);
}


$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$result = mergeArrays($arr1, $arr2);
print_r($result);
?>