<?php
//Function to Count Occurrences of Values in an Array
function countOccurrences($arr) {
    return array_count_values($arr);
}


$arr = [1, 2, 2, 3, 3, 3, 4];
print_r(countOccurrences($arr));
?>