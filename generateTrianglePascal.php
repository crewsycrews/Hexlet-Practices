<?php
// geterateTrianglePascal.php
// crewsycrews
// Напишите функцию generate, которая возвращает указанную строку треугольника паскаля в виде массива
// Треугольник Паскаля — бесконечная таблица биномиальных коэффициентов, имеющая треугольную форму. В этом треугольнике на вершине и по бокам стоят единицы. Каждое число равно сумме двух расположенных над ним чисел. 
// Строки треугольника симметричны относительно вертикальной оси.
// 0:      1
// 1:     1 1
// 2:    1 2 1
// 3:   1 3 3 1
// 4:  1 4 6 4 1

namespace App\Solution;

function generate($rowNumber)
{
    // BEGIN (write your solution here)
    $result = array_fill(0,$rowNumber+1,array_fill(0,$rowNumber*2+1,0));
    for ($i=0;$i<=$rowNumber;$i++)
    {
        for ($j=0;$j<=$rowNumber*2+1;$j++)
        {
            if ($j==$rowNumber && $i==0)
            {
                $result[$i][$rowNumber]=1;
            }
            elseif ($i>=1)
            {
                if($j>0 && $j<$rowNumber*2)
                {                    
                    if($result[$i-1][$j-1]==1 && $j==$rowNumber*2+1)
                    {
                        $result[$i][$j]=1;
                    }
                    elseif ($result[$i-1][$j+1]!=0 || $result[$i-1][$j-1]!=0)
                    {
                        $result[$i][$j]=$result[$i-1][$j-1]+$result[$i-1][$j+1];
                    }
                }
                elseif($j==0)
                {
                    if($result[$i-1][$j+1]==1)
                    {
                        $result[$i][$j]=1;
                    }
                }
                elseif($j==$rowNumber*2)
                {
                    if ($result[$i-1][$j-1]==1) 
                    {
                        $result[$i][$j]=1;
                    }
                }
            }
        }
    }
    return array_values(array_filter($result[$rowNumber]));
    // END
}
print_r(generate(5));