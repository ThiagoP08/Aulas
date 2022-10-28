<!-- 3- Faça um programa que mostre se eleitor pode ou não votar e mostre quando esse voto for facultativo. -->

<?php
    
    $idade = 80;

    if($idade >= 18 && $idade < 70) {
        
        echo "Voto obrigatório";

    } else if(($idade >= 16 && $idade <= 17) || ($idade > 70)) {

        echo "Voto é facultativo";

    } else if($idade < 16) {

        echo "Não pode votar";

    };