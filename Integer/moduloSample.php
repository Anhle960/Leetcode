<?php

$input = [13, 12, 11, 15, 16, 14];
// $sorted = [16, 15, 14, 13, 12, 11]
// $result = $sorted[$k - 1]

// $k = 2;

// $input = [3, 2, 13, 14, 1, 5, 6, 4, 7, 8, 9, 10, 12];

$k = 3;

$num = 5;


echo '<pre>';
print_r(modulo($num));
echo '</pre>';

function modulo($num)
{
    $div = intval($num / 3);

    $num2 = $div * 3;

    return $num2 == $num ? 1 : 0;
}
