<?php

include "componentes/database/db.php"; 
include "componentes/views/header.php";

if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina = 'usuarios.php';
}


switch($pagina){
    case 'usuarios':include 'componentes/usuarios.php'; break;
    case 'insert': include 'componentes/insert_usr.php'; break;
    case 'novoU': include 'componentes/views/new_usr.php'; break;
    case 'usr': include 'componentes/usr.php'; break;
    case 'update': include 'componentes/database/update.php'; break;
    case 'delete': include 'componentes/delete_usr.php'; break;
    default: include 'componentes/usuarios.php'; break;
}

include "componentes/views/footer.php";
?>