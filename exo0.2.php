<?php


$tab_impair= array(1400,2400,2100,4500,800,900,1800);
$tab_pair = array(1500, 1700, 2200, 3300, 1800, 1700, 2000, 4000);
sort($tab_impair);
print_r($tab_impair);
function salaires($arg2)
{
    $n = count($arg2);

    if (($n % 2) == 0) {
        $resultat = ($arg2[4] + $arg2[3]) / 2;
        return $resultat;

    } else
        $resultat2=$arg2[($n-1)/2];

        return $resultat2;
}
//testpull

echo salaires($tab_impair);
