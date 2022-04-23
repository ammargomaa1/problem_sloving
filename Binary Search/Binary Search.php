<?php
/**
 * Problem Link: https://leetcode.com/problems/binary-search/
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        
        $first = 0;
        $last = count($nums) - 1;

        while ($first <= $last){
            $midPoint = floor(($first + $last) / 2);
            if($nums[$midPoint] == $target){
                return $midPoint;
            }elseif($nums[$midPoint] < $target){
                $first = $midPoint;
            }else{
                $last = $midPoint;
            }
            if ($nums[$midPoint+1] == $target) return $midPoint+1;
            if ($oldMid == $midPoint) return -1;
            $oldMid = $midPoint;
        }
        
    }
}

$numsa = [-1,0,3,5,9,12];

$ne = new Solution;

var_dump($ne->search($numsa,15));
/**
 * Better Approach
 */

function binary($nums, $target) {
    $head = 0;
    $tail = count($nums) - 1;
    
    while($head <= $tail) {
        $current = round(($head + $tail) / 2);
        
        if ($nums[$current] == $target) {
            return $current;
        }
        
        if ($nums[$current] < $target) {
            $head = $current + 1;
        } else {
            $tail = $current - 1;
        }
    }

    return -1;
}