<?php
// lengthOfLastWord.php
// crewsycrews
// Реализуйте функцию lengthOfLastWord, которая возвращает длину последнего слова переданной на вход строки. 
// Словом считается любая последовательность не содержащая пробелов.

namespace App\Solution;

// BEGIN (write your solution here)
function lengthOfLastWord($str)
{
    if(strlen($str)==0)
    {
        return;
    }
    $arr = explode(" ",$str);
    $result = array_diff($arr,array(''));
    $result = strlen($result[count($result)-1]);
    return $result;
}
print_r(lengthOfLastWord("BASLL ASDLL cxsfa asd    "));
// END
