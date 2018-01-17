<?php

namespace App\Solution;

function generate($rowNumber)
{
    // BEGIN (write your solution here)
    $result=[[]];
    for ($i=0;$i<=$rowNumber;$i++)
    {
        for ($j=0;$j<=$rowNumber*2+1;$j++)
        {
            if ($j==$rowNumber+1 && $i==0)
            {
                $result[$i][$rowNumber+1]=1;
            }
            if ($i>=1)
            {
                
                if (($result[$i-1][$j+1]==1 && $j==0) || ($result[$i-1][$j+1]==1 && empty($result[$i-1][$j-1])) )
                {
                    $result[$i][$j]==1;
                }
                elseif (($result[$i-1][$j-1]==1 && empty($result[$i-1][$j+1])) || ($result[$i-1][$j-1]==1 && $j==$rowNumber*2+1))
                {
                    $result[$i][$j]==1;
                }
                elseif ($result[$i-1][$j-1]!=0)
                {
                    $result[$i][$j]=$result[$i-1][$j-1]*$result[$i-1][$j+1];
                }
            }
        }
    }
    return $result;
    // END
}
print_r(generate(4));