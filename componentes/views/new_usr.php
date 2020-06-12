
<div class="container" style="width:75%;">
    <form method='POST' action='componentes/insert_usr.php' class='form-group' style='width: 80%; margin: 5%'>
        <div class="form-group">
            <label >ID</label>
            <input type="text" class="form-control" id="nome" name="id">
            <small id="idHelp" class="form-text text-muted">Entre com o id.</small>
        </div>
        <div class="form-group">
            <label >Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
            <small id="nomelHelp" class="form-text text-muted">Entre com o seu nome.</small>
        </div>
        <div class="form-group">
            <label >Numero</label>
            <input type="text" class="form-control" id="numero" name="numero">
            <small id="numHelp" class="form-text text-muted">Entre com o seu numero.</small>
        </div>
        <div class="form-group">
            <label >Email</label>
            <input type="email" class="form-control" id="email" name="email">
            <small id="emailHelp" class="form-text text-muted">Entre com o seu email.</small>
        </div>
        <button type="submit" class="btn btn-primary btn-lg"">Cadastrar</button>
    </form>
</div>