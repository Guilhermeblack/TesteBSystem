<?php 
    include 'db.php';

    if(isset($_GET['id_usr'])){
        $id_usr = $_GET['id_usr'];
    }else
    {
        echo ('erro');
    }

    $query="DELETE FROM usuario WHERE id ='$id_usr'";
        
    $query_delete = mysqli_query($conexao,$query);

    
    if($query_delete){
        header('location:/TesteBSystem/index.php?pagina=usuarios');
        
    }else
    {
       echo 'deu ruin';
    }
    mysqli_close($conexao);
?>