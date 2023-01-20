<?php
session_start();
ob_start();
require 'config.php';
$id = filter_input(INPUT_POST, 'id');


print_r($_FILES);
$sql = $pdo->query("SELECT * FROM produtos WHERE id = '$id'");

$permitidos = array('image/jpg','image/jpeg','image/png');

if(in_array($_FILES['arquivo']['type'], $permitidos)){
    $img = $_FILES['arquivo']['name'];
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivo/'.$img);

    $sql = $pdo->prepare("INSERT INTO produtos SET img = :img WHERE id = :id");
    $sql->bindValue('id',$id);
    $sql->bindValue(':img',$img);
    $sql->execute();

    echo 'Arquivo salvo com sucesso';
    header('Location: registrar_produto.php');
} else {
    echo 'Arquivo não permitivo';
}