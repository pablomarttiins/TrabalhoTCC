<div class="container">
    <div class="col-md-5">
        <form action="<?= base_url() ?>Adm_controller/inserirUsuarioAdm" method="post" style="padding-top: 100px">
            <div class="form-group">
                <label for="login">ID</label>
                <input type="text" class="form-control" id="codAdm" name="codAdm" value="<?= $codAdm; ?>" placeholder="<?= $codAdm; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Informe seu login..." required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe sua senha..." required>
            </div>
            <div class="form-group">
                <label for="confirmaSenha">Confirmar Senha</label>
                <input type="password" class="form-control" id="confirmaSenha" name="confirmaSenha" placeholder="Confirme sua senha..." required>
            </div>
            <div style="text-align: right">
                <button type="submit" class="btn btn-success" >Enviar</button>
                <button type="reset" class="btn btn-default" >Cancelar</button>
            </div>

        </form>
    </div>
</div> </br></br>