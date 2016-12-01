
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Grupos</h1>
    </div>

 <!--   <div class="col-md-12">
        <div class="form-group">
            <label for="texto"><?php echo $this->session->userdata('login'); ?></label>
        </div>
    </div>
-->

    <form method="post" action="<?= base_url() ?>FichaAluno_controller/buscarTodasFichas">
        <div class="col-xs-12 col-md-12">
            <div>
                <input type="hidden" class="form-control" id="codObjetivoTipo" name="codObjetivoTipo" value="<?= $dados->codObjetivoTipo; ?>" placeholder="<?= $dados->codObjetivoTipo; ?>" readonly>
            </div>

            <div class="col-xs-12 col-md-12">
                <label for="login">Verificamos que seu objetivo é: </label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="<?= $dados->descricao; ?>" placeholder="">
            </div>
            
            <div class="col-xs-12 col-md-12">
                <label for="login">E seu IMC: </label>
                <input type="text" class="form-control" id="imc" name="descricao" value="" placeholder="">
            </div>


            <br />

            <div class="col-xs-12 col-md-12" style="text-align: right; padding-top: 1%">
                <button type="submit" class="btn btn-success" >Buscar Fichas de Treino</button>
            </div>
            
        </div>

    </form>

</div>
</div>
</div>


