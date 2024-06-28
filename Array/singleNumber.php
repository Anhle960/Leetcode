<?php

$nums = [4, 1, 2, 1, 2];

echo '<pre>';
print_r(singleNumber($nums));
echo '</pre>';

function singleNumber($nums)
{
    $dict = [];

    var_dump(array_count_values($nums));

    foreach ($nums as $value) {
        $countDuplicate = ($dict[$value] ?? 0) + 1;

        $dict[$value] = $countDuplicate;
    }

    foreach ($dict as $key => $value) {
        if ($value < 2) {
            return $key;
        }
    }
}
