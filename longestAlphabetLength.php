<?php

namespace App\Solution;

function longestAlphabetLength($str)
{
    // BEGIN (write your solution here)
    $alphabet=[];
    $result=0;
    $temp=0;
    for($i='a';$i<='z';$i++)
    {
        $alphabet[]=$i;
        if($i=='z')
        {
            break;
        }
    }
    $str=str_split($str);
    for($i=0;$i<=count($str)-1;$i++)
    {
        for($j=0;$j<=count($alphabet)-1;$j++)
        {
            if($j<=count($alphabet)-2 && $i<=count($str)-2)
            {
                if($str[$i]==$alphabet[$j])
                {
                    if($str[$i+1]==$alphabet[$j+1])
                    {
                        $temp++;
                        break;
                    }
                    elseif($temp>=$result)
                    {
                        $result=$temp+1;
                        $temp=0;
                        break;
                    }
                }
            }
        }
    }
    return $result;
    // END
}
print_r(longestLength("abcddaefghijkslker"));