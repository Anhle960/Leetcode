<?php

$strs = ["flower", "flow", "flight"];

echo '<pre>';
print_r(longestComboPrefix($strs));
echo '</pre>';

function longestComboPrefix($strs)
{
    $shortestLength = PHP_INT_MAX;

    $combo = "";

    foreach ($strs as $str) {
        $shortestLength = min($shortestLength, strlen($str));
    }

    for ($i = 0; $i < $shortestLength; $i++) {
        $check = "";
        foreach ($strs as $str) {
            $character = $str[$i];

            if ($check == "") {
                $check = $character;
            } elseif ($check != $character) {
                return $combo;
            }
        }

        $combo .= $check;
    }

    return $combo;
}
