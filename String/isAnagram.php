<?php

$s = "anagram";

$t = "nagaram";

// $s = "a";

// $t = "ab";

$dict = [
    "key1" => 1,
    "key2" => 1,
];

// $value = $dict['key1'];
// unset($value);
// var_dump($dict);

unset($dict['key1']);
var_dump($dict);

echo '<pre>';
// print_r(isAnagram($s, $t) ? 'true' : 'false');
echo '</pre>';

function test()
{
}
function isAnagram($s, $t)
{
    $splitFirstString = str_split($s);
    $splitSecondString = str_split($t);

    $firstDict = [];

    foreach ($splitFirstString as $key) {
        $firstDict[$key] = ($firstDict[$key] ?? 0) + 1;
    }

    foreach ($splitSecondString as $key) {
        if (!array_key_exists($key, $firstDict)) {
            return false;
        }

        $firstDict[$key] = ($firstDict[$key] ?? 0) - 1;

        if ($firstDict[$key] == 0) {
            unset($firstDict[$key]);
        }
    }
    // var_dump($firstDict);
    return empty($firstDict);

    // $firstDict = [];

    // $secondDict = [];

    // foreach ($splitFirstString as $key) {
    //     $firstDict[$key] = ($firstDict[$key] ?? 0) + 1;
    // }

    // var_dump($firstDict);

    // foreach ($splitSecondString as $key) {
    //     $secondDict[$key] = ($secondDict[$key] ?? 0) + 1;
    // }

    // var_dump($secondDict);

    // foreach ($firstDict as $key => $value) {
    //     if (!array_key_exists($key, $secondDict) || ($secondDict[$key] != $value)) {
    //         return false;
    //     }
    // }

    // foreach ($secondDict as $key2 => $value2) {
    //     if (!array_key_exists($key2, $firstDict) || ($firstDict[$key2] != $value2)) {
    //         return false;
    //     }
    // }

    // return true;
}
