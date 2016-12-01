
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Objetivo</h1>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="texto"><?php echo 'Bem vindo: '. $this->session->userdata('login'); ?></label>
        </div>
    </div>

    <form method="post" action="<?= base_url() ?>FichaTreino_controller/inserirObjetivo">
        <div class="col-md-12">
            <div class="col-md-3">
                <label for="obj">Selecione seu objetivo</label>
                <select id="obj" class="form-control" name="obj">
                    <option value="0"> --- </option>
                        <?php foreach ($descricao as $linha) { ?>
                            <option value="<?= $linha->codObjetivoTipo ?>"> <?= $linha->descricao . ' - ' . $linha->nivel ?> </option>
                        <?php } ?>
                </select>
            </div>
            
            <div class="col-md-2" style="padding-top:25px">
                <button type="submit" class="btn btn-success" >Enviar</button>
            </div>
                
        </div>   
    </form>

</div>
</div>
</div>


