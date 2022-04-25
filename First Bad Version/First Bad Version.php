<?php
/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */
/**
 * Problem Link: https://leetcode.com/problems/first-bad-version/
 * 
 * */
class Solution  {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {
        // if ($n == 1 && $this->isBadVersion($n) == false) return 1;
        $head = 0;
        $tail = $n ;
        while($head <= $n){
            
            $current = round(($head + $tail) / 2);

            if($this->isBadVersion($current) == false){
                if($this->isBadVersion($current + 1) == true) return $current+1;
                $head = $current +1;
            }else{
                if($this->isBadVersion($current - 1) == false) return $current ;
                $tail = $current - 1;
            }
        }
    }

    public function isBadVersion($n)
    {
        if ($n >= 65){return true;}else {return false;} 
    }
}

$n = new Solution;

var_dump($n->firstBadVersion(100));
