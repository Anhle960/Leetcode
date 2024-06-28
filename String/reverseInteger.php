<?php

$x = 123;

// $x = -123;

// $x = -120;

// $x = 100;

// $x = 1534236469;

echo '<pre>';
// print_r(reverseInteger($x));
print_r(splitInt($x));
echo '</pre>';

function reverseInteger($x)
{
    if ($x == 0) {
        return 0;
    }

    $isNegativeInt = false;
    if ($x < 0) {
        $isNegativeInt = true;
        $x = -$x;
    }

    $splitInt = str_split($x);

    var_dump($splitInt);

    var_dump($splitInt[0]);

    $left = 0;
    $right = count($splitInt) - 1;

    while ($left < $right) {
        $temp = $splitInt[$left];
        $splitInt[$left] = $splitInt[$right];
        $splitInt[$right] = $temp;

        $left++;
        $right--;
    }

    var_dump($splitInt);

    $reversedInt = $isNegativeInt ? '-' . ltrim(implode('', $splitInt), '0') : ltrim(implode('', $splitInt), '0');

    if ($reversedInt >= 2147483647 || $reversedInt < -2147483649) {
        return 0;
    }

    return $reversedInt;
}

function splitInt($num): array
{
    $result = [];
    $temp = $num;

    while ($temp > 0) {
        $mod = $temp % 10;
        array_unshift($result, $mod);

        $div = intval($temp / 10);
        $temp = $div;
    }

    return $result;
}
