<?php
    session_start();
    ob_start();
    require 'head.php';

    if((!isset($_SESSION['id'])) && (!isset($_SESSION['nome']))){
        $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário fazer o login!</p>";
        header("Location: index.php");
    }
?>
<h1>Home</h1>
<h2>Bem-vindo, <?php echo $_SESSION['nome'] ?></h2>

<?php

$permitidos = array('image/jpg','image/jpeg','image/png');

if(in_array($_FILES['arquivo']['type'], $permitidos)){
    $nome = md5(time().rand(0, 1000).'.jpg');
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivo/'.$nome);

?>


<a href="sair.php">Sair</a>

<?php include 'footer.php'; ?>