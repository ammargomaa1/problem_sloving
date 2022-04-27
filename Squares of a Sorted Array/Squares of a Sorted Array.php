<?php

/**
 * Problem Link: https://leetcode.com/problems/squares-of-a-sorted-array/
 */
class Solution {

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function sortedSquares($nums) {
    $p1 = 0;
    $p2 = count($nums) - 1;
    $sorted_arr = [];

    while ($p1 <= $p2){
       
        if (pow($nums[$p2],2) > pow($nums[$p1],2)) {
            array_unshift($sorted_arr,pow($nums[$p2],2));
            $p2 -= 1;
        }elseif(pow($nums[$p2],2) == pow($nums[$p1],2)) {
            if ($p1 != $p2) {
                array_unshift($sorted_arr,pow($nums[$p1],2));
                array_unshift($sorted_arr,pow($nums[$p1],2));
            
            }else{
                array_unshift($sorted_arr,pow($nums[$p1],2));
            }
            $p2 -= 1;
            $p1 +=1;
            
        }else{
            array_unshift($sorted_arr,pow($nums[$p1],2));
            $p1 +=1;
        }
    }
    
    return $sorted_arr; 
}
}

$a = [-4,-1,0,3,10] ;

$n = new Solution;

var_dump($n->sortedSquares($a));