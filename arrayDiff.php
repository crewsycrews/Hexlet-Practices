<?php
/** 
 * ArrayDiff.php
 * crewsycrews
 * Реализуйте функцию getDifference, которая принимает на вход два массива, 
 * а возвращает массив, составленный из элементов первого, которых нет во втором. 
 * Сделайте решение функциональным.
 * Эту задачу можно решить с помощью функции array_diff, 
 * но подразумевается что вы сделаете это без ее использования.  
 * 
 * PHP version 7
 * 
 * @author crewsycrews <crewsycrews@yandex.ru>
 */

namespace App\Arrays;

// BEGIN (write your solution here)
/** 
 * GetDifference 
 * 
 * @param array $array1 - первый массив
 * @param array $array2 - второй
 * 
 * @return массив составленный из элементов $array1, которых нет в $array2. 
 */
function getDifference($array1, $array2)
{
    $m = function ($acc, $i) use ($array1, $array2, &$m) {
        if ($i>count($array1)-1) {
            return $acc;
        }
        if (!in_array($array1[$i], $array2)) {
            $acc[]=$array1[$i];
        }
        $i++;
        return $m($acc, $i);
    };
    return $m([], 0);
}
// END