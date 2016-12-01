
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="icon" type="image/png" href="http://localhost/tcc/assets/images/favicon.jpg" />

    <title>Ambiente Administrativo - MaxFitt</title>

    
</head>
<body background="<?= base_url() ?>assets/images/1.jpg">
<div class="container">

    <form class="form-signin" method="POST" action="<?= base_url() ?>Painel_controller/logar">
        
        <h2 class="form-signin-heading" style="color:#8BC3A3" >Realizar Login</h2>
        <div>
            <label for="inputLogin" class="sr-only">Usuario</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Login" name="login" required autofocus>
        </div>
        <br/>
        <div>
            <label for="inputSenha" class="sr-only">Senha</label>
            <input type="password" id="inputSenha" class="form-control" placeholder="Senha" name="senha" required>
        </div>
        
        <div class="checkbox">
            <label style="color:#8BC3A3">
                <input type="checkbox" value="remember-me"> Lembrar-me
            </label>
            
        </div>
        
        <div class="col-xs-12 .col-md-12" style="margin-left:8%">
            <div class="col-xs-12 .col-md-12">
                <button class="btn btn-success" type="submit" style="width: 40%">Logar</button>
                <a href='http://localhost:8080/tcc/' class="btn btn-danger" style="width: 40%">Voltar</a>
            </div>
        </div>
    </form>

</div> <!-- /container -->

<div class="container" style="margin-top: 60px">
    <?php if (validation_errors() ) { ?>
    <div class="alert alert-error alert-block">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo validation_errors(); ?>
    </div>
    <?php } ?>

    <?php if ($this->session->flashdata('type-info') ) { ?>
        <div class="alert <?php echo ($this->session->flashdata('type-info') == 'error' ? 'alert-error' : 'alert-sucess' ); ?> alert-block" >
           <script>alert('Usuario não cadastrado.');window.location='http://localhost/tcc/Painel_controller/login'</script>; 
    
        </div>
    <?php
        $this->session->set_flashdata('type-info', '');
        $this->session->set_flashdata('info-message', '');
    ?>
    <?php } ?>
</div>
</body>
</html>
