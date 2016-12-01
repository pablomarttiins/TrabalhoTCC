<!DOCTYPE html>
<html>
    <head>
       	<meta content="text/html" charset="utf-8"/>
        <title>Ficha de Treino</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#codMusculo").change(function() {
                    $("#codMusculo option:selected").each(function() {
                        codMusculo = $('#codMusculo').val();
                        $.post("<?php echo base_url(); ?>FichaTreino_controller/buscaExerciciosPorMusculo", {
                            codMusculo: codMusculo
                        }, function(data) {
                            $("#codExercicio").html(data);
                        });
                    });
                });
            });

            $(document).ready(function() {
                $('#form_prepare').submit(function() {
                    var $this = $(this);

                    var descricaoGrupo = $this.find("input[name='descricaoGrupo']").val(),
                            codMusculo = $this.find("select[name='codMusculo']").val(),
                            codExercicio = $this.find("select[name='codExercicio']").val(),
                            series = $this.find("input[name='series']").val(),
                            repeticao = $this.find("input[name='repeticao']").val(),
                            tempoIntervalo = $this.find("input[name='tempoIntervalo']").val();

                    var tr = '<tr>' +
                            '<td>' + descricaoGrupo + '</td>' +
                            '<td>' + codMusculo + '</td>' +
                            '<td>' + codExercicio + '</td>' +
                            '<td>' + series + '</td>' +
                            '<td>' + repeticao + '</td>' +
                            '<td>' + tempoIntervalo + '</td>' +
                            '</tr>'
                    $('#grid').find('tbody').append(tr);

                    var hiddens = '<input type="hidden" name="descricaoGrupo[]" value="' + descricaoGrupo + '" />' +
                            '<input type="hidden" name="codMusculo[]" value="' + codMusculo + '" />' +
                            '<input type="hidden" name="codExercicio[]" value="' + codExercicio + '" />' +
                            '<input type="hidden" name="series[]" value="' + series + '" />' +
                            '<input type="hidden" name="repeticao[]" value="' + repeticao + '" />' +
                            '<input type="hidden" name="tempoIntervalo[]" value="' + tempoIntervalo + '" />';

                    $('#form_insert').find('fieldset').append(hiddens);

                    return false;
                });
            });

        </script>

    </head>
    <body>

        <br>
        <div id="main">
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <div class="col-md-10">
                    <h1 class="page-header">Cabeçalho Ficha de Treino</h1>
                </div>	

                <!-- ADICIONAR O FORM CORRETO (FichaTreino_controller/inserirFicha) -->
                <form method="POST" action="<?= base_url() ?>FichaTreino_controller/inserirFicha">


                    <div id='ficha' class="col-md-12">

                        <div class="col-md-4">
                            <label for="nomeFicha">Nome da Ficha</label>
                            <input type="text" class="form-control" id="nomeFicha" name="nomeFicha" placeholder="Informe o nome da ficha">
                        </div>

                        <div class="col-md-3">
                            <label for="obj">Tipo da ficha de treino</label>
                            <select id="obj" class="form-control" name="obj">
                                <option value="0"> Selecione </option>
                                <?php foreach ($descricao as $linha) { ?>
                                    <option value="<?= $linha->codObjetivoTipo ?>"> <?= $linha->descricao . ' - Nivil ' . $linha->nivel ?> </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-2" style="width:25% ">
                            <label for="tempoUtil">Tempo útil</label>
                            <input type="text" class="form-control" name="tempoUtil" id="tempoUtil" placeholder="Informe a duracação da ficha ">
                        </div>
                        
                        <div class="col-md-4" style="width:40% ">
                            <label for="tempoUtil">Observação</label>
                            <input type="text" class="form-control" name="observacao" id="observacao" placeholder="Campo para informar alguma particularidade da ficha ">
                        </div>

                        <div  class="col-md-3" style="margin-top:35px">
                            <button type="submit" class="btn btn-success" >Enviar</button>
                        </div>

                    </div> <!-- FIM DIVS PARA A FICHA DE TREINO -->
                    <hr>

                </form> <!--  FIM DAS DIVS DE GRUPOS E EXERCICIO -->


            </div>

        </div>    
    </body>
</html>