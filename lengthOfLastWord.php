<?php

namespace App\Solution;

// BEGIN (write your solution here)
function lengthOfLastWord($str)
{
    if(strlen($str)==0)
    {
        return;
    }
    $arr = explode(" ",$str);
    $result = array_diff($arr,array(''));
    $result = strlen($result[count($result)-1]);
    return $result;
}
print_r(lengthOfLastWord("BASLL ASDLL cxsfa asd    "));
// END
