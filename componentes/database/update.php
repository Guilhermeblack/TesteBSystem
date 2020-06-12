<?php

include 'db.php';

if(isset($_POST)){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];
}

$query="UPDATE usuario SET
    nome = '$nome',
    numero= '$numero',
    email= '$email'
    WHERE id = '$id'";

$query_update = mysqli_query($conexao, $query);

if($query_update){
    
    header('location:/TesteBSystem/index.php?pagina=usuarios');
}else
{
    echo 'erro';
}
mysqli_close($conexao);

