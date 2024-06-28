<?php

$arr = [5, 8, 10, 14, 25, 36, 40];

$k = 8;

echo '<pre>';
print_r(binarySearch($arr, $k));
echo '</pre>';


// linear search
function findInputIndex($array, $number)
{
    foreach ($array as $key => $value) {
        if ($number === $value) {
            return $key;
        }
    }
    return -1;
}

// binary search
function binarySearch($arr, $number)
{
    $start = 0;
    $end = count($arr) - 1;

    while ($start <= $end) {
        $mid = ($start + $end) / 2;

        if ($number == $arr[$mid]) {
            return $mid;
        } elseif ($arr[$mid] > $number) {
            $end = $mid - 1;
        } else {
            $start = $mid + 1;
        }
    }

    return -1;
}
