<?php
    session_start();
    ob_start();
    require 'config.php';
    include 'head.php';


    

?>

<body style="margin-top: 2rem">  <!-- Formulário que resgata os valores para registro de um aluno -->
    <div class="container">

        <div>
            <h1> Registrar </h1><br/>
        </div>

        <td> <img class="image-product" src="arquivo/<?=$info['img']; ?>" alt="foto-do-produto" id="img-produto"> </td>
        
        <form action="recebedor_produto.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$info['id']; ?>" />
        <label for="" class="form-label">
            Imagem: <br/>
            <input type="file" name="img" class="form-control">
        </label><br/>
    
        <input type="submit" value="Enviar">    
    </form><br/><br/>

        <form method="POST" action="registrar_action.php">
            <label for="">
                CÓDIGO: <br/>
                <input type="text" name="codigo" class="form-control">
            </label><br/><br/>

            <label for="">
                PRODUTO: <br/>
                <input type="text" name="produto" class="form-control">
            </label><br/><br/>

            <label for="">
                PREÇO:
                <input type="number" name="preco" class="form-control">
            </label><br/><br/>

            <label for="">
                QUANTIDADE: <br/>
                <input type="number" name="quantidade" class="form-control">
            </label><br/><br/>

            <label for="">
                QUANTIDADE MÍN: <br/>
                <input type="number" name="quantidade_min" class="form-control">
            </label><br/><br/>  

            <input type="submit" value="Registrar" class="btn btn-primary">
            <a href="home.php" class="btn btn-danger"> Cancelar </a>
        </form>
    </div>
</body>