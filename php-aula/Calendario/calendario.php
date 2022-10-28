<?php

    $hoje = date("H");
    $msg = "";

    if ($hoje >= 0 && $hoje < 12) {
        
        $msg = "Bom dia";

    }else if($hoje >= 12 && $hoje < 18) {

        $msg = "Boa tarde";

    } else {
        
        $msg = "Boa noite";

    };

?>

<?php
    
    $month = date("F");
    $mes = "";

    if ($month == "January") {

        $mes = "Janeiro";

    } else if ($month == "February") {

        $mes = "Fevereiro";

    } else if ($month == "March") {

        $mes = "Março";

    } else if ($month == "April") {

        $mes = "Abril";

    } else if ($month == "May") {

        $mes = "Maio";

    } else if ($month == "June") {

        $mes = "Junho";

    } else if ($month == "July") {

        $mes = "Julho";

    } else if ($month== "August") {

        $mes = "Agosto";

    } else if ($month == "September") {

        $mes = "Setembro";

    } else if ($month == "October") {

        $mes = "Outubro";

    } else if ($month == "November") {

        $mes = "Novembro";

    } else if ($month == "December") {

        $mes = "Dezembro";

    }
?>

<?php

function calendario () {

    for ($dia = 1; $dia <= 31; $dia++) {
        echo "$dia ";
        
        if ($dia === 7 or $dia === 14 or $dia === 21 or $dia === 28) {
            echo "<br>";
        }

    }

}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calendario</title>
    <link rel="stylesheet" href="./calendario.css">
</head>
<body>
    
    <h1>Calendário</h1>

    <h2>Estamos em <?php echo date("Y"); ?></h2>

    <h3><?php echo $msg ."! Agora são ".date('H')." horas e ".date("i")." minutos.";?></h3>

    <p> <?php echo $mes; ?></p>

    <div class="tabela">
        <table border="5">
    
            <tr>
                <th>Dom</th>
                <th>Seg</th>
                <th>Ter</th>
                <th>Qua</th>
                <th>Qui</th>
                <th>Sex</th>
                <th>Sab</th>
            </tr>
    
            <!-- <tr>
                <?php calendario(); ?>
            </tr> -->
    
            <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td></tr><tr><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td></tr><tr><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td><td>21</td></tr><tr><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td><td>27</td><td>28</td></tr><tr><td>29</td><td>30</td><td>31</td><td></td><td></td><td></td><td></td></tr>
    
    
    
        </table>
    </div>
    


</body>
</html>