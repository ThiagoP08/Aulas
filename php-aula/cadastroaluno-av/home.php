<?php
    session_start();
    ob_start();

    //Impede que o usuario retorne para página "login.php" sem deslogar
    if((!isset($_SESSION['nome'])) && (!isset($_SESSION['email']))){
        header("Location: home.php");
        exit;
    }

?>

<?php

    require 'config.php';
    include 'head1.php';

    $lista = [];    //Cria uma variavel com um array

    $sql = $pdo->query("Select * from alunos"); //Atribui o "query" e seleciona tudo da tabela "alunos"

    if($sql->rowCount() > 0) {  //Verifica se recebeu algum valor
        $lista = $sql->fetchall(PDO::FETCH_ASSOC);  //Se receber atribui o valor ao array
    }

    $nome = filter_input(INPUT_GET, 'nome');
    $email = filter_input(INPUT_GET, 'email');
    $idade = filter_input(INPUT_GET, 'idade');
    $contato = filter_input(INPUT_GET, 'contato');
    $endereco = filter_input(INPUT_GET, 'endereco');
    
    $lista = $pdo->query("SELECT * FROM alunos WHERE nome LIKE'%$nome%' and email LIKE'%$email%' and idade LIKE'%$idade%' and contato LIKE'%$contato%' and endereco LIKE'%$endereco%'");

?>
    <!-- Lista de "alunos" -->
<body style="margin: 2rem">

    <div class="container">
        
        
        <div>
            <a class="btn btn-primary" href="adicionar.php"> Adicionar usúario </a>            
        </div>

        <div class="d-flex">

            <form action="" method="get">
                <label for="" style="margin: 1.5rem">
                    Pesquisar: </br>
                    <input type="search" name="nome" id="" placeholder="Buscar por nome...">
                    <input type="search" name="email" id="" placeholder="Buscar por email...">
                    <input type="search" name="idade" id="" placeholder="Buscar por idade...">
                    <input type="search" name="contato" id="" placeholder="Buscar por contato...">
                    <input type="search" name="endereco" id="" placeholder="Buscar por endereço...">
                    <input class="btn btn-primary" type="submit" value="Buscar">
                </label>
            </form>

        </div>
        
        <div>
            
            <table class="table">
                
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Idade</th>
                    <th>Contato</th>
                    <th>Endereço</th>    
                </tr>

                <?php foreach($lista as $usuario): ?>
                    <tr>
                        <td> <?php echo $usuario['id']; ?> </td>
                        <td> <?= $usuario['nome']; ?> </td>
                        <td> <?= $usuario['email']; ?> </td>
                        <td> <?= $usuario['idade']; ?> </td>
                        <td> <?= $usuario['contato']; ?> </td>
                        <td> <?= $usuario['endereco']; ?> </td>
                        <td>
                            <a href="editar.php?id=<?=$usuario['id']; ?>" 
                                class="btn btn-success"
                            >
                                editar
                            </a>

                            <a 
                            href="excluir.php?id=<?=$usuario['id']; ?>"
                            onclick="return confirm('Tem certeza que deseja excluir ?')"
                            class="btn btn-danger"
                            >
                            excluir
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
    
        </div>

    </div>    


    <a href="sair.php" class="btn btn-danger" style="margin-left: 7.5rem;">Sair</a>
</body>
</html>


    