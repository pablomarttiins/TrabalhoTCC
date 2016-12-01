<div class="container">
    <div class="col-md-5">
        <form action="<?= base_url() ?>Adm_controller/inserirAdm" method="post" style="padding-top: 100px">
            <section>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe seu nome..." required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Informe o email..." required>
                </div>
                <div style="text-align: right">
                    <button type="submit" class="btn btn-success" >Enviar</button>
                    <button type="reset" class="btn btn-default" >Cancelar</button>
                </div>
            </section>

        </form>
    </div>
</div> </br></br>
