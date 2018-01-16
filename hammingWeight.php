<?php

namespace App\Solution;

// BEGIN (write your solution here)
function hammingWeight($number)
{
    if ($number==0)
    {
        return $number;
    }
    (string)$bin=decbin($number);
    $result=0;
    for ($i=0;$i<=strlen($bin)-1;$i++)
    {
        if ($bin[$i]==1)
        $result++;
    }
    return $result;
}
// END
