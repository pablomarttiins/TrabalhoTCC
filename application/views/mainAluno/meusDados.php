
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
</br>
    <div class="col-md-10">
        <h1 class="page-header">Meu Endereço</h1>
    </div>

    <!--   <div class="col-md-12">
           <div class="form-group">
               <label for="texto"><?php echo $this->session->userdata('login'); ?></label>
           </div>
       </div>
    -->


</div>

<div class="container">

    <div class="form-group">

<form action="<?= base_url() ?>Aluno_controller/atualizarDados" method="POST">
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <input type="hidden" name="codAluno" value="<?= $meusDados[0]->codAluno ?>">
        
        <div class="col-xs-3 col-md-3">
            <label for="ruaAluno">Nome</label>
            <input type="text" class="form-control" id="nomeAluno" name="nomeAluno"  value="<?= $meusDados[0]->nomeAluno ?>" required>
        </div>
        <div class="col-xs-8 col-md-7" >
            <label for="sobrenomeAluno">Sobre</label>
            <input type="text" class="form-control" id="sobrenomeAluno" name="sobrenomeAluno" value="<?= $meusDados[0]->sobrenomeAluno ?>" required>
        </div>
        <div class="col-xs-1 col-md-2">
            <label for="sexoAluno">Sexo</label>
            <input type="text" class="form-control" id="numeroAluno" name="sexoAluno" value="<?= ($meusDados[0]->sexoAluno == "M" ) ? "Masculino" : "Feminino"; ?>" required>
        </div>
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"  style="padding-top: 1%;">
        <div class="col-xs-5 col-md-7" style="width: 20%">
            <label for="CPF">CPF</label>
            <input type="text" class="form-control" id="CPF" name="CPF" value="<?= $meusDados[0]->CPF ?>">
        </div>

        <div class="col-xs-5 col-md-7" style="width: 20%">
            <label for="RG">RG</label>
            <input type="text" class="form-control" id="RG" name="RG" value="<?= $meusDados[0]->RG ?>">
        </div>

        <div class="col-xs-5 col-md-7" style="width: 41%">
            <label for="dataNascimento">Data de Nascimento</label>
            <input type="text" class="form-control" id="dataNascimento" name="dataNascimento" value="<?= $meusDados[0]->dataNascimento ?>">
        </div>
        <br>
        <div class="col-xs-3 col-md-2">
            <input type="submit" class="btn btn-success" value="Atualizar">
        </div>
    </div>
</form>

</div>
</div>


</div>
</div>
</div>


