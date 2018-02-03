<?php
/** 
 * IsPrime.php
 * crewsycrews
 * Реализуйте функцию isPrime определяющую, является ли число простым. */

namespace App\Solution;

// BEGIN (write your solution here)
function isPrime($num)
{
    for ($i=2;$i*$i<=$num;$i++) {
        if ($num % $i==0) {
            return false;
        }
    }
    return true;
}
// END
print_r(isPrime(6));