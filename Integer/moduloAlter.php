<?php

$num1 = 10;

echo '<pre>';
print_r(moduloAlter($num1));
echo '</pre>';

$num2 = 18;

echo '<pre>';
print_r(moduloAlter($num2));
echo '</pre>';

$num3 = 30;

echo '<pre>';
print_r(moduloAlterNew($num3));
echo '</pre>';

$num4 = 17;

echo '<pre>';
print_r(moduloAlterNew($num4));
echo '</pre>';

function moduloAlter($num)
{
    $div3 = intval($num / 3);

    $div5 = intval($num / 5);

    $numMultiply3 = $div3 * 3;

    $numMultiply5 = $div5 * 5;

    if ($numMultiply3 == $num && $numMultiply5 == $num) {
        return 35;
    } elseif ($numMultiply5 == $num) {
        return 5;
    } elseif ($numMultiply3 == $num) {
        return 3;
    } else {
        return 0;
    }
}

function moduloAlterNew($num)
{
    $mod3 = $num % 3;

    $mod5 = $num % 5;


    if ($mod3 == 0 && $mod5 == 0) {
        return 35;
    } elseif ($mod3 == 0) {
        return 3;
    } elseif ($mod5 == 0) {
        return 5;
    } else {
        return 0;
    }
}
