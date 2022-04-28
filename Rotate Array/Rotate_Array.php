<?php

/**
 * Problem Link: https://leetcode.com/problems/rotate-array/submissions/
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        
        if($k > count($nums)) $k = $k -count($nums);

        $arr1 = array_slice($nums,count($nums)-$k,$k);
       

        $arr2 = array_slice($nums,0,count($nums)-$k);

        $nums = array_merge($arr1,$arr2);
        return $nums;
    }
}

$r = [3,5,6];
$n = new Solution;

var_dump($n->rotate($r,4));