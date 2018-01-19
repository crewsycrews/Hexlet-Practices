<?php
// fib.php
// crewsycrews
// Реализуйте функцию fib находящую числа Фибоначчи. Аргументом функции является порядковый номер числа.

namespace App\Solution;

// BEGIN (write your solution here)
function fib($number)
{
    if($number<0)
    {
        return null;
    }
    elseif($number<2)
    {
        return $number;
    }
    $arr=[];
    $arr[0]=0;
    $arr[1]=1;
    for($i=2;$i<=$number;$i++)
    {
    $arr[$i]=$arr[$i-1]+ $arr[$i-2];
    }
    return end($arr);
}
// END
