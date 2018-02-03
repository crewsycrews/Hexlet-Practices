<?php
/** 
 * CompareVersion.php
 * crewsycrews
 * Реализуйте функцию compareVersion, которая сравнивает переданные 
 * версии version1 и version2. Если version1 > version2,
 * то функция должна вернуть 1, если наоборот то -1, в противном случае 0.
 * Версия это строка в которой два числа (мажорная и минорные версии)
 * разделены точкой, например: 12.11. Важно понимать, что версия, это не число 
 * с плавающей точкой, это несколько чисел не связанных между собой. 
 * Проверка на больше/меньше производится сравнением каждого 
 * числа независимо. Поэтому версия 0.12 больше версии 0.2.
 * Пример порядка версий:
 * 0.1 < 1.1 < 1.2 < 1.11 < 13.37 */

namespace App\Solution;

// BEGIN (write your solution here)
function compareVersion($version1, $version2)
{
    $version1=explode('.', $version1);
    $version2=explode('.', $version2);
    var_dump($ver1);
    var_dump($ver2);
    if ($version1 > $version2) {
        return 1;
    } elseif ($version1 == $version2) {
        return 0;
    } else {
        return -1;
    }
    
}
// END