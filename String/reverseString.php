<?php

$s = ["h", "e", "l", "l", "o"];

echo '<pre>';
print_r(reverseString($s));
echo '</pre>';

function reverseString($s)
{
    $left = 0;
    $right = count($s) - 1;

    while ($left < $right) {
        $temp = $s[$left];
        $s[$left] = $s[$right];
        $s[$right] = $temp;

        $left++;
        $right--;
    }

    return $s;
}
