<?php 

include_once ('conexao.php');

// filtrar as categorias na table pratos mas não repete
$filtrar_banco = "SELECT DISTINCT categoria FROM pratos";
// variavel que vai armazenar a query que vai ser usada em index
$resultado = $db_connect->query($filtrar_banco);






