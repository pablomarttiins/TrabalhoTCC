
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Painel do Adm</h1>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="texto"><?php echo $this->session->userdata('login'); ?></label>
        </div>
    </div>

    <form action="<?= base_url() ?>PainelAdm_controller/verificarQtdAlunosProfessores" method="post" style="padding-top: 100px">

        <div style="text-align: right">
            <button type="submit" class="btn btn-success" >Verificar Quantidade de Alunos</button>
        </div>

    </form>
    <form action="<?= base_url() ?>PainelAdm_controller/verificarQtdAlunosProfessores" method="post" style="padding-top: 100px">

        <div style="text-align: right">
            <button type="submit" class="btn btn-success" >Verificar Quantidade de Professores</button>
        </div>

    </form>


    <p>Olá Administrador! </p>


</div>
</div>
</div>


