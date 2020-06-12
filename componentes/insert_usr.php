
<?php

include 'database/db.php';

if(isset($_POST)){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];
}

$query = "INSERT INTO usuario(
    id,
    nome,
    numero,
    email
    )VALUES(
    '$id',   
    '$nome',
    '$numero',
    '$email'
    )";


$query_insert= mysqli_query($conexao,$query);


if($query_insert){
    mysqli_close($conexao);
    header('location:/TesteBSystem/index.php?pagina=usuarios');
}else
{
    echo 'erro';
}

?>