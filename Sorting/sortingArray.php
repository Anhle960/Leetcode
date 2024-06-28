<?php
$nums = [5, 2, 3, 1];

echo '<pre>';
print_r(sortingArray($nums));
echo '</pre>';

/**
 * @param array $nums
 * @return array
 */
function sortingArray($nums): array
{
    $min_val = min($nums);
    $max_val = max($nums);
    $range = $max_val - $min_val + 1;
    $count = array_fill(0, $range, 0);

    foreach ($nums as $num) {
        $count[$num - $min_val]++;
    }
    $sorted_array = array();
    $index = 0;
    for ($i = 0; $i < $range; $i++) {
        while ($count[$i] > 0) {
            $sorted_array[$index++] = $i + $min_val;
            $count[$i]--;
        }
    }
    return $sorted_array;
}
