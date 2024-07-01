<?php

$arr = [3, 2, 2, 3];

$val = 3;

$arr = [0, 1, 2, 2, 3, 0, 4, 2];

$val = 2;

echo '<pre>';
print_r(removeElement($arr, $val));
echo '</pre>';

/**
 * @param int[] $nums
 * @param int $val
 * @return int
 */
function removeElement(array $nums, int $val)
{
    $removedArray = [];
    foreach ($nums as $value) {
        if ($value != $val) {
            $removedArray[] = $value;
        }
    }

    return count($removedArray);
}
