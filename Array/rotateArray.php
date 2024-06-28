<?php

$input = [1, 2, 3, 4, 5, 6, 7];

$k = 2;

echo '<pre>';
print_r(rotateArray($input, $k));
echo '</pre>';

/**
 * @param array $nums
 * @param int $k
 * @return array
 */
function rotateArray(array &$nums, int $k)
{
    //first, we must detect how many times the rotations really runs
    //it's for optimizing performance for the function - AVOID TIME LIMIT EXCEEDS ERROR

    //Count the total elements of array
    $total = count($nums);

    //If the total count is even with the rotation number, THE ROTATED ARRAY WILL RETURN TO THE SAME STATE.

    //TO PREVENT TIME LIMIT EXCEED ERROR DUE TO TOO MANY OBSOLETE ROTATIONS LIKE MENTIONED ABOVE, IN LARGE ARRAYS
    //We must divide the total count with rotate num.

    //The divided percentage will be the real rotation turns. 

    $realCount = ($k < $total) ? $k : ($k % $total);

    //Divide array into 2 part & merge them right after.

    $firstArray = array_slice($nums, 0, count($nums) - $realCount);

    $secondArray = array_slice($nums, -$realCount, $realCount);

    $nums = array_merge($secondArray, $firstArray);

    return $nums;
}
