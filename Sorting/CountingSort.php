<?php

$input = [5, 3, -1, 0, 5, 10, 9];

$k = 3;


echo '<pre>';
print_r(findLocatedNumber($input, $k));
echo '</pre>';

/**
 * @param array $nums
 * @param int $k
 * @return array
 */
function countingSort(array &$nums, int $k): int
{
    $minVal = min($nums);

    $maxVal = max($nums);

    //idea here is creating an array with its end index is the max value of the array input.
    $range = $maxVal - $minVal + 1;

    //create a count array, this will be used to detect the indexes where the sorted values appear
    $count = array_fill(0, $range, 0);

    foreach ($nums as $value) {
        $count[$value - $minVal]++;
    }

    //created a sorted array, with its value will be the index range - minimum value of array input.  

    $sortedArr = [];
    $index = 0;

    for ($i = 0; $i < $range; $i++) {
        while ($count[$i] > 0) {
            $sortedArr[$index++] = $i + $minVal;
            $count[$i]--;
        }
    }

    return $sortedArr[$k - 1];

    //WARNING ABOUT THIS ALGORITHMS: 
    // + Depend on the maximum value of the input array => large space complexity consumption in exchange for low time complexity.
}
