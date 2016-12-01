<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Ambiente Administrativo - MaxFitt</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.min.js"></script>

  </head>

  <body>

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Parâmentros Ficha de Treino</h1>
    </div>

    <section>
        <div class="col-md-10">
            <div id='ficha' class="col-md-4">
                <label for="obj">Tipo de ficha de treino:</label>
                <select id="obj" class="form-control" name="obj">
                    <option value="0"> Informe o tipo da ficha de treino...</option>
                    <?php foreach ($descricao as $linha) { ?>
                       <option value="<?= $linha->codObjetivoTipo ?>"> <?= $linha->descricao . ' - ' . $linha->nivel ?> </option>
                    <?php } ?>
                </select>
            </div>

            <div class="col-md-4">
                <label for="sexo">Sexo</label>
                <select id="sexo" class="form-control" name="sexo" required>
                    <option value="0"> Informe o sexo... </option>
                    <option value="M"> Masculino </option>
                    <option value="F"> Feminino </option>
                </select>
            </div>
        </div>

        <div class="col-md-10" style="padding-top: 1%;">

            <div class="col-md-3">
                <label for="imc">IMC</label>
                <input type="text" class="form-control" id="imdde" name="imdde" value="" placeholder="De...">
                </br>
                <input type="text" class="form-control" id="imdate" name="imdate" value="" placeholder="Até...">
            </div>

            <div class="col-md-3">
                <label for="gordura">% de Gordura</label>
                <input type="text" class="form-control" id="gordurade" name="gordurade" value="" placeholder="De...">
                </br>
                <input type="text" class="form-control" id="gorduraate" name="gorduraate" value="" placeholder="Até...">
            </div>

            <div class="col-md-3">
                <label for="idade">Idade</label>
                <input type="text" class="form-control" id="idadede" name="idadede" value="" placeholder="De...">
                </br>
                <input type="text" class="form-control" id="idadeate" name="idadeate" value="" placeholder="Até...">
            </div>

        </div>

        <div class="col-md-10" style="padding-top: 1%;">    
            <div style="margin-left: 0%; padding-left: 55%">
                <button type="submit" class="btn btn-success" style="width: 20%" >Enviar</button>
                <button type="reset" class="btn btn-danger" style="width: 20%" >Cancelar</button>
            </div>
        </div>
    </section>

    





















      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!---   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="http://localhost/tcc/assets/js/jquery-1.11.0.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="http://localhost:8080/tcc/assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="http://localhost:8080/tcc/assets/js/vendor/holder.min.js"></script>
    <script src="http://localhost:8080/tcc/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://localhost:8080/tcc/assets/js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="js/ValidacaoCampos.js"></script>

  </body>
</html>