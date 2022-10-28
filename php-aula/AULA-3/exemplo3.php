<?php

function soma($n1, $n2, $n3 = 0) {
    $total = $n1 + $n2 + $n3;

    return $total;
}

$x = soma(1, 3);
$y = soma(5, 3);
$w = soma($x, $y);

echo $w;