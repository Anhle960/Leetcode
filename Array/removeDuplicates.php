<?php

$input =  [2, 2, 5, 5, 5, 6, 6, 9, 9, 14];

echo '<pre>';
print_r(removeDuplicates($input));
echo '</pre>';

/**
 * @param int[] $nums
 * @return array
 */
function removeDuplicates(array $nums)
{
    $removedArray = [];
    for ($i = 0; $i < count($nums); $i++) {
        if (!in_array($nums[$i], $removedArray)) {
            $removedArray[] = $nums[$i];
        }
    }

    return $removedArray;
}
