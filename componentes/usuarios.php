
<div class='container' style="padding: 5px; height:450px;">
    <div class='card' style='align-self: left; width: 30%'>
        <a class="btn btn-success" href="index.php?pagina=novoU">Inserir usuario</a>
    </div>


    <table class="table table-hover table-dark table-responsive-md" id="table_subs">
        <thead class='table-bordered' >
            <tr>
                <th>Nome</th>
                <th>email</th>
                <th>numero</th><br>

            </tr>
        </thead>
        <tbody>
            <?php
                include 'database/db.php';
                $querys= "SELECT * FROM usuario ORDER BY nome, email";
                $consulta_usr= mysqli_query($conexao, $querys);

                while($linha= mysqli_fetch_array($consulta_usr)){
                    $id= $linha['id'];
                    #echo $id;
                    ?>
                    <tr onclick="location.href='index.php?pagina=usr&id_usr=<?php echo $id; ?>'" style="cursor:pointer">
                        <td>
                            <?php echo $linha["nome"].'</td>';
                            echo '<td>'.$linha['email'].'</td>';
                            echo '<td>'.$linha['numero'].'</td>';
                            ?>

                        <td>
                            <a href="index.php?pagina=delete&id_usr=<?php echo $id; ?>" class="btn btn-danger">
                            <i class="fas fa-user-times"> Deleta </i>
                        </td>
                        <td>
                            <a href="index.php?pagina=usr&id_usr=<?php echo $id; ?>" class="btn btn-warning">
                            <i class="fas fa-user-times"> alterar </i>
                        </td>                        
                            </a>
                    </tr>
                    <?php 
                }
            ?>
        </tbody>
    </table>
    <div class='button'>
    <a href='index.php?pagina=home' class="btn btn-outline-danger"> Voltar </a>
    </div>
</div>
