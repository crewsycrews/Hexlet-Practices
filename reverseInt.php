<?php
// reserseInt.php
// crewsycrews  
// Реализуйте функцию reverseInt, которая переворачивает цифры в переданном числе:

namespace App\Solution;

// BEGIN (write your solution here)
function reverseInt($var)
{
    $result = strrev ((string)$var);
    if ($result[strlen($result)-1]=='-')
    {
        $result = rtrim ($result, '-');
        $result = '-' . $result;
    }
    return $result;
}
// END
print_r (reverseInt(123123123));