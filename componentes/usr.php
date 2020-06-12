<?php 

    include 'database/db.php';
    // echo $_GET['id_usr'];
    $id_usr = $_GET['id_usr'];

    $select="SELECT * FROM usuario WHERE id= '$id_usr'";

    $consulta_sub= mysqli_query($conexao,$select);
    $ls= mysqli_fetch_array($consulta_sub);
    
    $cont_coluna= "SHOW COLUMNS FROM usuario";
    $colunas= mysqli_query($conexao,$cont_coluna);
    #-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    
    #pega nome da coluna
    for($b=0;$b<=3;$b++)
    {
        
        $name = mysqli_fetch_array($colunas);
        // echo $name[0];
        $col_name[$b]= $name['Field'];
        
    }
    ;
    if(isset($ls))
    {?>
    <form method='POST' action='componentes/database/update.php'>
    <?php
    #=-=-=-=-=-=-=-=-==-==-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
        $c=1;
        ?>  
            <div class="container" style="width:75%;">
                <table><thead><tr class='row'><th>
                    id
                </td></tr></thead>
                <tbody></tr><tr class='row'><td>
                    <input type="text" name ='id' class="form-control" readonly="readonly" value='<?php echo $id_usr; ?>'>
                    <small id="Help" class="form-text text-muted">Id único</small>
                </td></tr></tbody>
                </table>
            </div>
        <?php
        foreach($ls as $key => $var)
        {
            if($var!=NULL and $key>0)
            {
                
                ?>
                <div class="container" style="width:75%; padding-top: 14px;">
                    <table>
                        <thead>
                            <tr class='row'>       
                                <th>
                                    <?php
                                    if($col_name)
                                    {                                          
                                        echo $col_name[$key];                                  
                                    }                               
                                    ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class='row'>
                                <td>
                                    <?php
                                    // $id = $_GET['id_usr'];
                                    if(isset($ls))
                                    {
                                        if($key>=1)
                                        {
                                            ?>
                                            <div class="input-group mb-3">
                                            <input type="text" name ='<?php echo $col_name[$key] ?>' class="form-control" value='<?php echo $ls[$key]; ?>'></div>
                                            <small id="Help" class="form-text text-muted">Dados cadastrais</small>
                                            <?php
                                        }
                                        elseif($col_name[$key]=='id')
                                        {
                                            ?><div class="input-group mb-3">
                                            <div type="text" name ='id' class="form-control" ><?php echo $ls[$key]; ?></div>
                                                
                                            </div>
                                            <small id="idHelp" class="form-text text-muted">id único</small>
                                            <?php
                                        }
                                    }else
                                    {
                                        echo('con:'.$conexao->error);
                                    }                                   
                                    ?>   
                                </td>

                            </tr>
                        </tbody>
                    </table> 
                </div>
                <?php
            }
        }
        ?>
        <p><p>
        <div>
            <button type='submit' class="btn btn-success btn-lg" name='submit'>Alterar</button>
        </div>
        <p>
        <div class='button'>
            <a href='index.php' class="btn btn-outline-danger"> Voltar </a>
        </div>
    </form>
    <?php
    }




    
    mysqli_close($conexao);
?>
