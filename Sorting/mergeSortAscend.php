<?php
$input1 = [1, 6, 8, 9];

$input2 = [2, 3, 4, 7, 10, 11, 12];

echo '<pre>';
print_r(mergeSortAscend($input1, $input2));
echo '</pre>';

/**
 * @param array $input
 * @param array $input2
 * @return array
 */
function mergeSortAscend(array $input1, array $input2): array
{
    $result = [];
    $index1 = 0;
    $index2 = 0;

    while ($index1 < count($input1) && $index2 < count($input2)) {
        if ($input1[$index1] < $input2[$index2]) {
            $result[] = $input1[$index1];
            $index1++;
        } else {
            $result[] = $input2[$index2];
            $index2++;
        }
    }

    for ($i = $index1; $i < count($input1); $i++) {
        $result[] = $input1[$i];
    }

    for ($i = $index2; $i < count($input2); $i++) {
        $result[] = $input2[$i];
    }
    return $result;
}
