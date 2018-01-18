<?php
// isPowerOfThree.php
// crewsycrews
// Реализуйте функцию isPowerOfThree которая определяет, является ли переданное 
// число натуральной степенью тройки. Например число 27 это третья степень (3^3), а 81 это четвертая (3^4).

namespace App\Solution;

// BEGIN (write your solution here)
function isPowerOfThree($num)
{
    $current = 1;
    while ($current <= $num) {
        if ($current == $num) {
            return true;
        }
        $current *= 3;
    }
    return false;
}
// END
print_r(isPowerOfThree(1));
