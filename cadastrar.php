<?php 
session_start();
include_once("conexao.php");

$nomeDoProduto = filter_input(INPUT_POST,'nomeDoProduto',FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST,'quantidade',FILTER_SANITIZE_STRING);
$validade = filter_input(INPUT_POST,'validade',FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST,'preco',FILTER_SANITIZE_STRING);


$resultado_produto = "INSERT INTO produtos(nomeDoProduto, quantidade, validade, preco) VALUES('$nomeDoProduto','$quantidade','$validade','$preco')";
$result_produto = mysqli_query($conn,$resultado_produto);
if (mysqli_insert_id($conn)){
    $_SESSION['msgcad'] = "<div class='alert alert-success'>Produto cadastrado com sucesso</div>";
	header("Location: index.php");
}else{
    $_SESSION['msgcad'] = "<div class='alert alert-danger'>Erro de cadastro</div>";
}

?>