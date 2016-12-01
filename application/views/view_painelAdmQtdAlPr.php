
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Painel do Adm</h1>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="texto"><?php echo $this->session->userdata('login'); ?></label>
        </div>
    </div>


    <div>
        <table border="1" class="table table-hover">
            <thead>
                <tr>
                    <th>Quantidade de Professores Cadastrados</th>
                    <th>Quantidade de Alunos Cadastrados</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $quantidadeAlunos ?></td>
                    <td><?php echo $quantidadeProfessores ?></td>
                </tr>
            </tbody>
        </table>
    </div>



</div>
</div>
</div>