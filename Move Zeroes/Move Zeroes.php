<?php

/**
 * Problem Link: https://leetcode.com/problems/move-zeroes/
 */

function moveZeroes(&$nums)
{
    $pl =$pr= 0;
    

    while ($pr<count($nums)) {
        if ($nums[$pr] == 0) {
            $pr++;
            continue;
        }else {
            $plVal = $nums[$pl];
            $nums[$pl] = $nums[$pr];
            $nums[$pr] = $plVal;
            $pl++;
            $pr++;
            
        }
        
    }
}

$nums = [0];
 
moveZeroes($nums);

print_r($nums);