<?php

namespace App\Solution;

// BEGIN (write your solution here)
function binarySum($bin1,$bin2)
{
    $str1 = str_split($bin1);
    $str2 = str_split($bin2);
    var_dump(count($str1)>count($str2));
    var_dump(count($str1)<count($str2));
    if(count($str1)>count($str2))
    {
        $len = count($str1);
        $diff = count($str1)-count($str2);
        for($i=0;$i<=$diff-1;$i++)
        {
            array_unshift($str2, '0');
        }
        var_dump($str2);
    }
    elseif(count($str2)>count($str1))
    {
        $len = count($str2);
        $diff = count($str2)-count($str1);
         for($i=0;$i<=$diff-1;$i++)
        {
            array_unshift($str1, '0');
        }
    }
    else
    {
        $len = count($str1);
    }
    $result = [];
    $temp = 0;
    var_dump($len);
    for($i=$len-1;$i>=0;$i--)
    {
            // var_dump($str1[$i]);
            // var_dump($str2[$i]);
            // var_dump($str1[$i]+$str2[$i]);
            // var_dump($temp == 0 && $str1[$i]+$str2[$i]>1);
            // var_dump($temp == 0 && $str1[$i]+$str2[$i]==1);
            // var_dump($temp == 0 && $str1[$i]+$str2[$i]<1); 
            // var_dump($temp == 1 && $str1[$i]+$str2[$i]>1);
            // var_dump($temp == 1 && $str1[$i]+$str2[$i]==1);
            // var_dump($temp == 1 && $str1[$i]+$str2[$i]<1);
            if($temp == 0 && $str1[$i]+$str2[$i]>1)
            {
                $temp = 1;
                array_unshift($result, '0');
            }
            elseif($temp == 0 && $str1[$i]+$str2[$i]==1)
            {
                $temp = 0;
                array_unshift($result, '1');
            }
            elseif($temp == 0 && $str1[$i]+$str2[$i]<1)
            {
                array_unshift($result, '0');
            }
            elseif($temp == 1 && $str1[$i]+$str2[$i]>1)
            {
                $temp = 1;
                array_unshift($result, '1');
            }
            elseif($temp == 1 && $str1[$i]+$str2[$i]==1)
            {
                $temp = 1;
                array_unshift($result, '0');
            }
            elseif($temp == 1 && $str1[$i]+$str2[$i]<1)
            {
                $temp = 0;
                array_unshift($result, '1');
            }
    }
    if($temp == 1)
    {
        array_unshift($result, '1');
    }
    return $result;
}
print_r(binarySum('1101', '101'));
// END
