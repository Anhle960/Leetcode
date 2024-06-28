<?php 

$nums = [1,1,1,3,3,4,3,2,4,2];

$nums2 = [1,2,3,1];

echo '<pre>'; 
print_r(containsDuplicate($nums2));
echo '</pre>';


    function containsDuplicate($nums) {
        $dict = [];
        for ($i = 0; $i < count($nums); $i++) {
            $value = $nums[$i];

            $duplicateCount = ($dict[$value] ?? 0) + 1; 

            $dict[$value] = $duplicateCount;
            
            if ($duplicateCount > 1) {
                return true;
            }
        }

        return false;
    }