<nav class="navbar navbar-inverse navbar-fixed-top">

  <div class="container-fluid">

    <div class="navbar-header">
      <div class="logo">
                <img src="<?= base_url(); ?>assets/images/logo-icon.png" width="134" alt="Logo" />
      </div>
        </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Perfil <b class="caret"></b></a>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="#">Meu Endereço</a></li>
                    <li><a href="#">Meus Dados</a></li>
                    <li><a href="#">Meus Contatos</a></li>
                    <li><a href="#">Minha Senha</a></li>
                  </ul>
              </li>
              <li><a href="<?= base_url() ?>Painel_controller/logoff">Logoff</a></li>
            </ul>
          </div>
  </div>
</nav>


    <div class="container-fluid">
      <div class="row">
        <div id="menu" class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="<?= base_url(); ?>FichaTreino_controller/montarFicha">Tela Inicial <span class="sr-only">(current)</span></a></li>
            <li><a href="<?= base_url(); ?>Educador_controller/minhasFichas">Minhas Fichas de Treino</a></li>
            <li><a href="<?= base_url(); ?>Educador_controller/todasFichas">Todas Fichas de Treino</a></li>
                        

          </ul>
        </div>