<?php

// $nums1 = [1, 1, 2, 1, 2];

// $nums2 = [2, 2];

// $nums1 = [9, 4, 8];

// $nums2 = [9, 4, 9, 8, 4];

$nums1 = [1, 2, 2, 1];

$nums2 = [2, 2];

// $nums1 = [1, 2];

// $nums2 = [1, 1];

echo '<pre>';
print_r(intersectArr($nums1, $nums2));
echo '</pre>';

function intersectArr($nums1, $nums2)
{
    $totalElementFirst = count($nums1);
    $totalElementSecond = count($nums2);

    $biggerArr = $totalElementFirst >= $totalElementSecond ? $nums1 : $nums2;

    $lesserArr = $totalElementSecond > $totalElementFirst ? $nums1 : $nums2;

    $intersectArr = [];

    $dict1 = [];
    foreach ($biggerArr as $value) {
        $countDuplicate = ($dict1[$value] ?? 0) + 1;
        $dict1[$value] = $countDuplicate;
    }

    $dict2 = [];
    foreach ($lesserArr as $value) {
        $countDuplicate = ($dict2[$value] ?? 0) + 1;
        $dict2[$value] = $countDuplicate;
    }

    //alternatively, we can use this function instead of dictionary:

    // $dict1 = array_count_values($biggerArr);

    // $dict2 = array_count_values($lesserArr);

    foreach ($dict1 as $key => $value) {
        if (isset($dict2[$key])) {
            $intersectTime = ($value <= $dict2[$key]) ? $value : $dict2[$key];
            for ($i = 0; $i < $intersectTime; $i++) {
                $intersectArr[] = $key;
            }
        }
    }

    return $intersectArr;
}
