<?php
    require 'config.php';

    $codigo = filter_input (INPUT_POST, 'codigo');
    $nome = filter_input (INPUT_POST, 'nome');
    $preco = filter_input (INPUT_POST, 'preco');
    $quantidade = filter_input (INPUT_POST, 'quant');
    $min_quantidade = filter_input (INPUT_POST, 'min_quant');

    if ($codigo && $nome && $preco && $quantidade && $min_quantidade ) { 
        echo "entrou";
        $sql = $pdo->prepare("UPDATE produtos SET codigo = :codigo, nome = :nome, preco = :preco, quantidade = :quantidade, min_quantidade = :quantidade WHERE id = :id");
        $sql->bindValue(':codigo', $codigo);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':preco', $preco);
        $sql->bindValue(':quantidade', $quantidade);
        $sql->bindValue(':min_quantidade', $min_quantidade);
        $sql->execute();

        header("Location: index.php");
        exit;
    
    } else {
        header("Location: editar.php");
        exit;
    }


?>