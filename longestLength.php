<?php

namespace App\Solution;

function longestLength($str)
{
    // BEGIN (write your solution here)
    $result=0;
    $temp='';
    $temp1=0;
    $t = true;
    for ($i=0;$i<=strlen($str)-1;$i++) {
        var_dump($temp);
        //var_dump($str[$i]);
        var_dump(strrpos(strrev($temp), $str[$i]));
        if ($i==strlen($str)-1 && $t==true) {
            $temp1++;
        }
        if ((strrpos($temp, $str[$i]))!==false) {
            $t = false;
            var_dump($i);
            $i=$i-(strrpos(strrev($temp), $str[$i]));
            var_dump($i);
        }
        if (isset($str[$i+1]) && $t==true) {
            $temp=$temp . $str[$i];
            $temp1++;            
        } elseif ($temp1>=$result) {
            $result=$temp1;
            $temp1=0;
            $temp='';
            $t = true;
            $i=$i-1;
        }

    }
    return $result;
    // END
}
print_r(longestLength("jalbcdjel"));