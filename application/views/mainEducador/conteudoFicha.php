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
                            codFicha = $this.find("input[name='codFicha']").val();

                    var tr = '<tr>' +
                            '<td>' + descricaoGrupo + '</td>' +
                            '<td>' + codMusculo + '</td>' +
                            '<td>' + codExercicio + '</td>' +
                            '<td>' + series + '</td>' +
                            '<td>' + repeticao + '</td>' +
                            '<td>' + tempoIntervalo + '</td>' +
                            '<td>' + codFicha + '</td>' +
                            '</tr>';
                    $('#grid').find('tbody').append(tr);

                    var hiddens = '<input type="hidden" name="descricaoGrupo[]" value="' + descricaoGrupo + '" />' +
                            '<input type="hidden" name="codMusculo[]" value="' + codMusculo + '" />' +
                            '<input type="hidden" name="codExercicio[]" value="' + codExercicio + '" />' +
                            '<input type="hidden" name="series[]" value="' + series + '" />' +
                            '<input type="hidden" name="repeticao[]" value="' + repeticao + '" />' +
                            '<input type="hidden" name="tempoIntervalo[]" value="' + tempoIntervalo + '" />' +
                            '<input type="hidden" name="codFicha" value="' + codFicha + '" />';

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
                    <h1 class="page-header">Cadastro de Fichas de Treino</h1>
                </div>	

                <!-- ADICIONAR O FORM CORRETO (FichaTreino_controller/inserirFicha) -->
                <form method="post" action="" id="form_prepare">

                    <?= form_open(base_url() . '<?= base_url() ?>FichaTreino_controller/buscaExerciciosPorMusculo') ?>

                    <!-- ADICIONAR O FORM CORRETO (FichaTreino_controller/inserirGrupo) -->


                    <legend> </legend>
                    <div class="col-md-12">

                        <div  class="col-md-3" style="margin-top:1%">
                            <label for="descricaoGrupo">Descrição Grupo</label>
                            <input type="text" class="form-control" id="descricaoGrupo" name="descricaoGrupo" value="" placeholder="Informe a descrição do grupo">
                        </div>

                        <div class="col-md-4" style="margin-top:1%">
                            <label for="codMusculo">Musculo</label>
                            <select id="codMusculo" class="form-control" name="codMusculo">
                                <option value="0"> Selecione </option>
                                <?php foreach ($musculo as $linha) { ?>
                                    <option value="<?= $linha->codMusculo ?>"> <?= $linha->descricao ?> </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-4" style="margin-top:1%" id="load_exercicios">
                            <label for="codExercicio">Exercicio</label>
                            <select name="codExercicio" id="codExercicio" class="form-control">
                                <option value="0"> Selecione </option>
                            </select>
                        </div>


                    </div>

                    <div class="col-md-12">

                        <div  class="col-md-3" style="margin-top:1%">
                            <label for="serie">Número de series</label>
                            <input type="text" class="form-control" id="series" name="series" value="" placeholder="Informe o numero de series">
                        </div>

                        <div  class="col-md-3" style="margin-top:1%">
                            <label for="repeticao">Número de Repetições</label>
                            <input type="text" class="form-control" id="repeticao" name="repeticao" value="" placeholder="Informe o numero de repetições">
                        </div>

                        <div  class="col-md-3" style="margin-top:1%">
                            <label for="tempo">Tempo de intervalo</label>
                            <input type="text" class="form-control" id="tempoIntervalo" name="tempoIntervalo" value="" placeholder="Informe o tempo de intervalo">
                        </div>


                        <div class="col-md-3" style="margin-top:35px">
                            
                            <input type="text" class="form-control" id="codFicha" name="codFicha" readonly="readonly" value="<?= $codFicha; ?>" placeholder="<?= $codFicha; ?>" readonly> 
                        </div>


                        <div  class="col-md-3" style="margin-top:35px">
                            <label><input type="submit" name="ok" value="Inserir" class="btn btn-large btn-success" /></label>
                        </div>
                    </div>	        

                </form> <!--  FIM DAS DIVS DE GRUPOS E EXERCICIO -->


            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <table id="grid" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Grupo</th>
                            <th>Musculo</th>
                            <th>Exercicio</th>
                            <th>Series</th>
                            <th>Repetições</th>
                            <th>Tempo de intervalo</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table><!-- /grid -->

                <form action="<?= base_url() ?>FichaTreino_controller/inserirGrupo" method="post" id="form_insert">
                    <fieldset style="display: none;"></fieldset>
                    <label><input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-large btn-success" /></label>
                </form><!-- /form_insert -->

            </div>
        </div>    
    </body>
</html>