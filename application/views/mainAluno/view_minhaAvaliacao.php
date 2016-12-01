
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Minha Avaliação</h1>
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
            <th>Triceps Direito Contraido</th>
            <th>Triceps Direito Alongado</th>
            <th>Triceps Esquerdo Contraido</th>
            <th>Triceps Esquerdo Alongado</th>
            <th>Biceps Direito Contraido</th>
            <th>Biceps Direito Alongado</th>
            <th>Data de Avaliação</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($avaliacao as $linha) { ?>
            <tr> 
                <td><?=  $linha->circunferenciaTricepsDireitoContraido ?></td>
                <td><?=  $linha->circunferenciaTricepsDireitoAlongado ?></td>
                <td><?=  $linha->circunferenciaTricepsEsquerdoContraido ?></td>
                <td><?=  $linha->circunferenciaTricepsEsquerdoAlongado ?></td>
                <td><?=  $linha->circunferenciaBicepsDireitoContraido ?></td>
                <td><?=  $linha->circunferenciaBicepsDireitoAlongado ?></td>
                <td><?=  $linha->dataAvaliacao ?></td>
            </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>


</div>
</div>
</div>


