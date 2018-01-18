<?php

namespace App\Solution;

function longestLength($str)
{
    // BEGIN (write your solution here)
    $alphabet=[];
    for($i='a';$i<='z';$i++)
    {
        $alphabet[]=$i;
    }
    $str=str_split($str);
    $result=array_intersect($alphabet,$str);
    return $result;
    // END
}
print_r(longestLength("abcddaslker"));