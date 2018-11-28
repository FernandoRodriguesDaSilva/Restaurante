<?php 

include_once ('conexao.php');


$inserir_banco = "SELECT * FROM pratos WHERE destaque=1";
// variavel que vai armazenar a query que vai ser usada em index
$result = $db_connect->query($inserir_banco);






