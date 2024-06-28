<?php

$s = "abc";

$s2 = "abba";

echo '<pre>';
print_r(checkIsReverseString($s2) ? 1 : 0);
echo '</pre>';

function checkIsReverseString($s)
{
    $splitStr = str_split($s);

    for ($i = 0; $i < count($splitStr); $i++) {
        if ($splitStr[$i] != $splitStr[count($splitStr) - 1 - $i]) {
            return false;
        }
    }

    return true;
}
