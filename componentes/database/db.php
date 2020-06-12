
<?php

$servidor ="127.0.0.1";   
$usuario ="root";
$senha = "";
$bd = "testedb";

#funçao para conectar com o banco de dados

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
#-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-==-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-

#recuperar todos
$querysubs = "SELECT nome, numero, email,'id' FROM usuario";
$consulta_users= mysqli_query($conexao, $querysubs) or die (mysql_error());
#-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-==-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-

#recupera apenas um pela id
$query= 'SELECT * FROM usuario WHERE id = "$id_sub"';
$query_usr = mysqli_query($conexao, $query);

#-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-==-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-



?>
