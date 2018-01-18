<?php
// toRna.php
// crewsycrews
// ДНК и РНК это последовательности нуклеотидов.
// Четыре нуклеотида в ДНК это аденин (A), цитозин (C), гуанин (G) и тимин (T).
// Четыре нуклеотида в РНК это аденин (A), цитозин (C), гуанин (G) и урацил (U).
// Цепь РНК составляется на основе цепи ДНК последовательной заменой каждого нуклеотида:
// G -> C
// C -> G
// T -> A
// A -> U
// Напишите функцию toRna, которая принимает на вход цепь ДНК и возвращает соответствующую цепь РНК (совершает транскрипцию РНК).

namespace App\Solution;

// BEGIN (write your solution here)
function toRna($dna)
{
    $result = '';
    for($i=0;$i<=strlen($dna)-1;$i++)
    {
        switch($dna[$i])
        {
            case "A":
                $result= $result . str_replace("A", "U", $dna[$i]);
                break;
            case "C":
                $result= $result . str_replace("C", "G", $dna[$i]);
                break;
            case "G":
                $result= $result . str_replace("G", "C", $dna[$i]);
                break;
            case "T":
                $result= $result . str_replace("T", "A", $dna[$i]);
                break;
        }
    }
    return $result;
}
// END
print_r(toRna("UGCACCAGAAUU"));