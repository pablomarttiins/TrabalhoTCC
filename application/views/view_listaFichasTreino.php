
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Fichas encontradas</h1>
    </div>

 <!--   <div class="col-md-12">
        <div class="form-group">
            <label for="texto"><?php echo $this->session->userdata('login'); ?></label>
        </div>
    </div>
-->

    
        </div>

    </form>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <table class="table table-striped">
        <thead>
            <tr>
            <th>Descrição Ficha</th>
            <th>Tempo Util da Ficha</th>
            <th>Criador da Ficha</th>
            <th>Objetivo da Ficha</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($fichas as $linha) { ?>
            <tr> 
                <td><?=  $linha->descricaoFicha ?></td>
                <td><?=  $linha->tempoUtilFicha ?></td>
                <td><?=  $linha->nomeEducador ?></td>
                <td><?=  $linha->descricaoObjetivo ?></td>
                <td><a href="<?= base_url('AvaliacaoAluno_controller/expandirFicha/'.$linha->codFichaTreino) ?>" target="_blank" class="btn btn-success">Expandir Ficha</td>
                <td><a href="<?= base_url('FichaAluno_controller/relacionaFichaComAluno/'.$linha->codFichaTreino) ?>" class="btn btn-success" onclick="return confirm('Deseja realmente vincular esta ficha? ');">Quero essa ficha</td> 
            </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>


</div>
</div>
</div>


