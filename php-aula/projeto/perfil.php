<?php
    require 'config.php';
    require 'head.php';

    $info = [];  //Cria uma variável que contém um array.

    $id = filter_input(INPUT_GET, 'id');  //Filtra os valores de ID no fomulário.
    
    if($id) {
        $sql = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");  //Seleciona todos os dados da tabela aluno onde ID possui um valor definido.
        $sql->bindValue(':id', $id);  //Atribui esse valor à variável.
        $sql->execute();

        if($sql->rowCount() > 0) {
            $info = $sql->fetch(PDO::FETCH_ASSOC);  //Coloca os valores, sem duplicá-los, no array criando anteriormente.

        } else {
            header("Location: home.php");
            exit;
        }
    } else {
        header("Location: home.php");
        exit;
    }

   


?>
<div class="container">  <!-- Formulário que irá editar os valores do Aluno. -->
    <h1> Perfil </h1>

    <img src="imagens/<?=$info['img']; ?>" width="160" heigth="160" >                                                      
    
    
        <input type="hidden" name="id" value="<?=$info['id']; ?>" />
        <label for="" class="form-label">
         <br/>
        </label><br/>
    

    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$info['id']; ?>" />
        <div class="mb-3">
            <label for="" class="form-label">
                CÓDIGO: <br/>
                <?=$info['codigo']; ?>
            </label><br/><br/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">
                PRODUTO: <br/>
                <?=$info['produto']; ?>
            </label><br/><br/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">
                PREÇO: <br/>
                <?=$info['preco']; ?>
            </label><br/><br/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">
                QUANTIDADE: <br/>
                <?=$info['quantidade']; ?>
            </label><br/><br/>
        </div>
 
      
        <a href="home.php" class="btn btn-danger"> Voltar </a>
    </form>
</div>