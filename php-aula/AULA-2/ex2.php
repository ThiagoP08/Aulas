<!-- 2- Um professor atribui pesos de 1 a 4 para as notas de quatro avaliações.
    *A nota é calculada por meio da média ponderada (N1*1 + N2*2 + N3*3 + N4*4)/(1+2+3+4),
    *Onde N1 é a nota da primeira avaliação, N2 a da segunda, etc.
    *Um aluno tirou as seguintes notas: 8, 7.5, 10, 9.
    *Faça um programa que calcula e escreva a média do aluno. -->

<?php

echo "EXERCÍCIO 2 </br>";

    $v1 = 8;
    $v2 = 7.5;
    $v3 = 10;
    $v4 = 9;

    $resultado = ($v1 * 1 + $v2 * 2 + $v3 * 3 + $v4 * 4) / (1+2+3+4);

    echo "A média é:" . $resultado;