
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Todas Fichas de Treino</h1>
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
            <th>Nome Criador Ficha</th>
            <th>Objetivo da Ficha</th>
            <th>Observação</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($fichas as $linha) { ?>
            <tr> 
                <td><?=  $linha->descricao ?></td>
                <td><?=  $linha->tempoUtil ?></td>
                <td><?=  $linha->nomeEducador ?></td>
                <td><?=  $linha->objetivoFicha ?></td>
                <td><?=  $linha->observacao ?></td>
                <td><a href="<?= base_url('Educador_controller/fichaCompleta/'.$linha->codFichaTreino/$linha->codEducador) ?>" class="btn btn-success">Expandir Ficha</td> 
            </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>


</div>
</div>
</div>


