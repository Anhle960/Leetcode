<?php
$input = [13, 12, 11, 15, 16, 14];
// $sorted = [16, 15, 14, 13, 12, 11]
// $result = $sorted[$k - 1]

// $k = 2;

// $input = [3, 2, 13, 14, 1, 5, 6, 4, 7, 8, 9, 10, 12];

$k = 3;



echo '<pre>';
print_r(findLocatedNumber($input, $k));
echo '</pre>';

/**
 * @param array $nums
 * @param int $k
 * @return array
 */
function findLocatedNumber(array &$nums, int $k): int
{
    for ($i = 0; $i < count($nums) - 1; $i++) {
        for ($j = 0; $j < count($nums) - 1; $j++) {
            $temp = $nums[$j];
            if ($nums[$j] < $nums[$j + 1]) {
                $nums[$j] = $nums[$j + 1];
                $nums[$j + 1] = $temp;
            }
        }
    }

    // n * n
    // selection sort, bubble sort

    // n * logn
    // merge sort, quick sort


    // $expectElement = $k - 1;

    // $locatedNumber = $nums[$expectElement];

    // return $locatedNumber;

    return $nums[$k - 1];
}
