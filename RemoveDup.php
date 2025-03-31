<?php
//Function to Remove Duplicate Values from an Array
function removeDuplicates($arr) {
    return array_unique($arr);
}


$arr = [1, 2, 2, 3, 3, 4, 5, 5];
print_r(removeDuplicates($arr));
?>