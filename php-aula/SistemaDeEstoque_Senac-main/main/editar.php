<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos</title>
</head>
<body>

<h1>Edição de Produtos</h1>

    <form action="editar_action.php" method="post">
        <label for="">
            Código:
            <input type="number" name="codigo" placeholder="Digite o código do produto" value="<?php echo $codigo['codigo']; ?>">
        </label> </br>
        
        <label for="">
            Nome:
            <input type="text" name="nome" placeholder="Digite o nome do produto" value="<?php echo $nome['nome']; ?>">
        </label> </br>

        <label for="">
            Preço:
            <input type="text" name="preco" placeholder="Digite o preço do produto" value="<?php echo $preco['preco']; ?>">
        </label> </br>
        
        <label for="">
            Quantidade:
            <input type="text" name="quant" placeholder="Digite a quantidade do produto" value="<?php echo $quantidade['quant']; ?>">
        </label> </br>

        <label for="">
            Quantidade mínima:
            <input type="text" name="min_quant" placeholder="Digite a quantidade mínima do produto" value="<?php echo $min_quantidade['min_quant']; ?>">
        </label> </br>

        <input type="submit" value="Editar">
    </form>
    
</body>
</html>