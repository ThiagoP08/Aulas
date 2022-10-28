<?php
    session_start();
    ob_start(); //limpa o buffer de saida. Usado no redirecionamento.
    require 'head.php';
    require 'config.php';
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //var_dump($dados);
    if(!empty($dados['SendLogin'])){

        $sql = $pdo->prepare("SELECT * FROM tbl_login WHERE email = :email");
        $sql->bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $sql->execute();

        if(($sql) && ($sql->rowCount() !=0)){
            $resultado = $sql->fetch(PDO::FETCH_ASSOC);
            
            if(password_verify($dados['password'], $resultado['senha'])){
                $_SESSION['id'] = $resultado['id'];
                $_SESSION['nome'] = $resultado['nome'];
                header('Location: home.php');
                exit;
            } else {
                $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Usuário ou senha inválida!</p>";
            }
        } else {
            $SESSION['msg'] = "<p style='color: #ff0000'>Erro: Usuário ou senha inválida!</p>";
        }

        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            //Destroi a mensagem para não imprimir na tela novamente
            unset($_SESSION['msg']);
        }
    }
?>