<?php
// testSummaryRanges.php
// crewsycrews
// Реализуйте функцию summaryRanges, 
// которая находит в массиве непрерывные возрастающие последовательности
// чисел и возвращает массив с их перечислением.
namespace App\Solution;

// BEGIN (write your solution here)
function summaryRanges($arr)
{
    if(empty($arr))
    {
        return array();
    }
    $temp=[];
    $result=[];
    for($i=0;$i<=count($arr)-1;$i++)
    {
        if(!empty($arr[$i+1]))
        {
            if($arr[$i]+1==$arr[$i+1])
            {
                $temp[]=$arr[$i];
                if(!empty($arr[$i+2]) && $arr[$i]+2!=$arr[$i+2])
                {
                    $temp[]=$arr[$i+1];
                    $first=$temp[0];
                    $last=$temp[count($temp)-1];
                    $temp=[];
                    $result[]="$first->$last";
                }
            }
        }
        elseif(!empty($temp))
        {
            $temp[]=$arr[$i];
            $first=$temp[0];
            $last=$temp[count($temp)-1];
            $temp=[];
            $result[]="$first->$last";
        }
    }
    return $result;
}
// END