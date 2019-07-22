<?php
include_once("conexao.php");

$item = $_GET['id'];
$del = "DELETE FROM produtos WHERE id=$item";
$deleta = mysqli_query($conn,$del);

?>