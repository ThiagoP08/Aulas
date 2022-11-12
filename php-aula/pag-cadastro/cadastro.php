<?php

require 'config.php'

?>

<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buslada Cadastro</title>
</head>
<body>
    
    <nav>
        <div class="container">
            
            <form action="" method="post">
            
                <div class="name">
                    <label for="">
                        Nome:
                        <input type="text" name="name" placeholder="Digite seu Nome completo" required>
                    </label>
                </div>
        
                <div class="email">
                    <label for="">
                        Email:
                        <input type="email" name="email" placeholder="Digite seu E-mail" required>
                    </label>
                </div>
        
                <div class="password">
                    <label for="">
                        Senha:
                        <input type="password" name="password" placeholder="Digite sua senha" required>
                    </label>
                </div>
        
                <div class="password_confirm">
                    <label for="">
                        Confirmar Senha:
                        <input type="password" name="password_confirm" placeholder="Digite sua senha novamente" required>
                    </label>
                </div>
        
                <div class="cpf">
                    <label for="">
                        CPF:
                        <input type="number" maxlength="11" placeholder="Digite seu CPF">
                    </label>
                </div>
        
                <div class="button">
                    <input type="submit" name="button" value="Enviar">
                </div>            
            </form>        
        </div>
    </nav>
    
</body>
</html>