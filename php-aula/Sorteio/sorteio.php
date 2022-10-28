<?php

$participantes = ['Ricardo', 'Jessica', 'Andre', 'Janaina', 'Raphael', 'Rose', 'Camila', 'Isabel', 'Matheus', 'Ana'];

$qtde_participantes = count($participantes)-1;

echo $qtde_participantes. " participantes <br/>";

$resultado = rand(1, $qtde_participantes);

echo "O resultado é ".$resultado.". O vencedor(a) foi ". $participantes[$resultado] ;
