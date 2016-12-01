<div class="container">
    <div class="col-xs-12 col-md-12">
        <form action="<?= base_url() ?>UsuarioEducador_controller/inserir" method="post" style="padding-top: 100px">
             
            <div class="col-xs-12 col-md-12"> 
                
                <div class="col-xs-5 col-md-5">
                    <input type="hidden" class="form-control" id="codAluno" name="codEducador" value="<?= $codEducador; ?>" placeholder="<?= $codEducador; ?>" readonly>
                </div>

            </div>

            <div class="col-xs-12 col-md-12"> 

                <div class="col-xs-7 col-md-7"> 
                </div>

                <div class="col-xs-5 col-md-5">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" id="login" name="login" placeholder="Informe seu login..." required>
                </div>
            </div>

            <div class="col-xs-12 col-md-12"> 

                <div class="col-xs-7 col-md-7"> 
                </div>

                <div class="col-xs-5 col-md-5" style="padding-top: 1%">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe sua senha..." required>
                </div>
            </div>

            <div class="col-xs-12 col-md-12">                 

                <div class="col-xs-7 col-md-7">                    
                </div>

                <div class="col-xs-5 col-md-5" style="padding-top: 1%">
                    <label for="confirmaSenha">Confirmar Senha</label>
                    <input type="password" class="form-control" id="confirmaSenha" name="confirmaSenha" placeholder="Confirme sua senha..." required>
                </div>
            </div>

            <div class="col-xs-12 col-md-12">                 
                
                <div class="col-xs-7 col-md-7">                    
                </div>

                <div class="col-xs-5 col-md-5" style="text-align: right; padding-top: 1%">
                    <button type="submit" class="btn btn-success" >Enviar</button>
                    <button type="reset" class="btn btn-danger" >Cancelar</button>
                </div>
            </div>

        </form>
    </div>
</div> </br></br>