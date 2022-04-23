<?php
/**
 * Problem Link: https://leetcode.com/problems/remove-duplicates-from-sorted-array/
 */
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function removeDuplicates(&$nums)
    {
        
        $c =0;
        
       for($i = 0; $i < count($nums);$i++){
           if($nums[$i] == $nums[$i + 1]){
               
               unset($nums[$i]);
               $nums[] = '_';
               $c ++;
           }
       }
        
        return  count($nums) - $c;
    }
}


$numsa = [0,0,1,1,1,2,2,3,3,4];
$ne = new Solution;

var_dump($ne->removeDuplicates($numsa));

print_r($numsa);


/*
Enhanced Sol.

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    /*
    function removeDuplicates(&$nums) {
        $nums = array_unique($nums, SORT_NUMERIC);
        
        return count($nums);   
    }
}
*/