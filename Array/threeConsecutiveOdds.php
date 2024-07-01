<?php

$arr = [1, 1, 2, 1, 1];

// $arr = [1, 2, 34, 3, 4, 5, 7, 23, 12];

echo '<pre>';
print_r(threeConsecutiveOdds($arr) ? "true" : "false");
echo '</pre>';

// binary search
function threeConsecutiveOdds($arr)
{
    $odds = 0;

    for ($i = 0; $i < count($arr); $i++) {
        // reset the counter right when facing an even number
        $odds = ($arr[$i] % 2 != 0) ? $odds++ : 0;

        if ($odds == 3) {
            return true;
        }
    }

    return false;
}
