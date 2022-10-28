<?php
    require 'config.php';

    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');
    $password_confirm = filter_input(INPUT_POST, 'password_confirm');

    if($name && $email && $password && $password_confirm){

        $sql = $pdo->prepare("SELECT * from tbl_login WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();

        //Verificação se tem um mesmo email já cadastrado.
        if($sql->rowCount() ===0){
            // Verificar se a senha e a confirmação de senha são iguais.
            if($password === $password_confirm){

                $password_hash = password_hash($password, PASSWORD_DEFAULT);

                $sql = $pdo->prepare( "INSERT INTO tbl_login (nome,email,senha) VALUES (:name, :email, :password)" );
                $sql->bindValue(':name', $name);
                $sql->bindValue(':email', $email);
                $sql->bindValue(':password', $password_hash);
                $sql->execute();

                header("Location: index.php");
                exit;
            } else {
                header('Location: inscrever.php ');
                exit;
            } 
       
        } else {
            header('Location: inscrever.php ');
            exit;
        }
    } else {
        header('Location: inscrever.php ');
        exit;
    }
            