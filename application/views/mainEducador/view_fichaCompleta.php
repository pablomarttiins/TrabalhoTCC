
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Ficha Completa</h1>
    </div>

    
        </div>
 
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <!-- Começo Segunda Tabela -->
        <table class="table table-striped">
        <thead>
            <tr>
            <th><h4><strong>Grupo A</strong></h4></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td><strong>Exercicio</strong></td>
                <td><strong>Series</strong></td>
                <td><strong>Repetições</strong></td>
                <td><strong>Tempo de Descanço</strong></td>
            </tr>
        <?php foreach($fichaEducador as $linha) { ?>
        <?php if($linha->grupo == "Grupo B") { ?>
            
            <tr>
            
                <td><?=  $linha->nomeMusculo ?></td>
                <td><?=  $linha->descricaoExercicio ?></td>
                <td><?=  $linha->serie ?></td>
                <td><?=  $linha->repeticao ?></td>
                <td><?=  $linha->tempoIntervalo?> </td>
            
            </tr>
        <?php } ?>
        <?php }  ?>
        </tbody>
        </table>

        
        <!-- Fim Primeira Tabela -->


        <!-- Começo Segunda Tabela -->
        <table class="table table-striped">
        <thead>
            <tr>
            <th><h4><strong>Grupo B</strong><h4></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td><strong>Exercicio</strong></td>
                <td><strong>Series</strong></td>
                <td><strong>Repetições</strong></td>
                <td><strong>Tempo de Descanço</strong></td>
            </tr>
        <?php foreach($fichaEducador as $linha) { ?>
        <?php if($linha->grupo == "Grupo B") { ?>
            
            <tr>
            
                <td><?=  $linha->nomeMusculo ?></td>
                <td><?=  $linha->descricaoExercicio ?></td>
                <td><?=  $linha->serie ?></td>
                <td><?=  $linha->repeticao ?></td>
                <td><?=  $linha->tempoIntervalo?> </td>
            
            </tr>
        <?php } ?>
        <?php }  ?>
        </tbody>
        </table>

        
        <!-- Fim Segunda Tabela -->


         <!-- Começo Terceira Tabela -->
        <table class="table table-striped">
        <thead>
            <tr>
            <th><h4><strong>Grupo C<strong></h4></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td><strong>Exercicio<strong></td>
                <td><strong>Series<strong></td>
                <td><strong>Repetições<strong></td>
                <td><strong>Tempo de Descanço<strong></td>
            </tr>
        <?php foreach($fichaEducador as $linha) { ?>
        <?php if($linha->grupo == "Grupo C") { ?>
            
            <tr>
            
                <td><?=  $linha->nomeMusculo ?></td>
                <td><?=  $linha->descricaoExercicio ?></td>
                <td><?=  $linha->serie ?></td>
                <td><?=  $linha->repeticao ?></td>
                <td><?=  $linha->tempoIntervalo?> </td>
            
            </tr>
        <?php } ?>
        <?php }  ?>
        </tbody>
        </table>

        
        <!-- Fim Terceira Tabela -->
        

         <!-- Começo Quarta Tabela -->
        <table class="table table-striped">
        <thead>
            <tr>
            <th><h4><strong>Grupo D<strong></h4></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td><strong>Exercicio<strong></td>
                <td><strong>Series<strong></td>
                <td><strong>Repetições<strong></td>
                <td><strong>Tempo de Descanço<strong></td>
            </tr>
        <?php foreach($fichaEducador as $linha) { ?>
        <?php if($linha->grupo == "Grupo D") { ?>
            
            <tr>
            
                <td><?=  $linha->nomeMusculo ?></td>
                <td><?=  $linha->descricaoExercicio ?></td>
                <td><?=  $linha->serie ?></td>
                <td><?=  $linha->repeticao ?></td>
                <td><?=  $linha->tempoIntervalo?> </td>
            
            </tr>
        <?php } ?>
        <?php }  ?>
        </tbody>
        </table>

        
        <!-- Fim Quarta Tabela -->

         

    </div>
    

</div>
</div>
</div>


