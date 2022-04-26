<?php
/**
 * Problem Link: https://leetcode.com/problems/search-insert-position/
 */

class Solution
{

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
    public function searchInsert($nums, $target)
    {
        $head = 0;
        $tail = count($nums) ;
        if ($target > $nums[$tail - 1] ) {
            return $tail;
        }else if($target == 0 && $tail == 1|| $target < $nums[0]){
            return 0;
        }
        

        while ($head <= $tail){
            $current = round(($head+$tail)/2);
            if (!isset($nums[$current])) {
                return 0;
            }
            if ($nums[$current] == $target || ($nums[$current] > $target && $nums[$current-1] < $target) || ($nums[$current] < $target && $nums[$current+1]>$target)) {
                if($nums[$current] < $target && $nums[$current+1]>$target){
                    return $current+1;
                }
                return $current;
            }

            if ($nums[$current] > $target) {
                $tail = $current - 1;
            }else{
                $head = $current;
            }
        }
    }
}

$r = [3,5,6];
$n = new Solution;

var_dump($n->searchInsert($r,0));