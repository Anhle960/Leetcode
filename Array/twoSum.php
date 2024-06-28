<?php

$arr = [5, 8, 10, 14, 25, 36, 40];

// $arr = [3, 2, 4];

$arr = [3, 3];

$k = 6;

echo '<pre>';
print_r(twoSum($arr, $k));
echo '</pre>';


// linear search
function twoSum($nums, $target)
{
    for ($i = 0; $i < count($nums) - 1; $i++) {
        for ($j = $i + 1; $j < count($nums); $j++) {
            if ($nums[$i] + $nums[$j] == $target) {
                return ([$nums[$i], $nums[$j]]);
            }
        }
    }

    //alternatively, use the hash map method to optimize time complexity.

    $map = [];
    for ($i = 0; $i < count($nums); $i++) {
        $element = $target - $nums[$i];

        // if element has been found in the hash map, return it along with the current $i element
        if (isset($map[$element])) {
            return [$map[$element], $i];
        }

        // push the current element into the hash map - this map format : [value] => [key] 
        $map[$nums[$i]] = $i;
    }

    return [];
}
