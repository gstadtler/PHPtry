<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Verdanatech</title>
</head>
<body>
    <a class="redirecionar" href="listar_produtos.php">Produtos Cadastrados</a>
    <h2 class="titulo">Cadastro de Produtos</h2>
    <form class="form" method="post" action="cadastrar.php">

        <p class="title_produto">Nome do Produto</p>
        <input class="produto" type="text" name="nomeDoProduto" value=""><br>
        
        <p class="title_quantidade">Quantidade</p>
        <input class="quantidade"type="text" name="quantidade" value=""><br>

        <p class="title_validade">Validade</p>
        <input class="validade" type="text" name="validade" value=""><br>

        <p class="title_valor">Preço</p>
        <input class="valor" type="text" name="preco" value=""><br>

        <input class="submeter" type="submit" value="Salvar">

    </form>
    
</body>