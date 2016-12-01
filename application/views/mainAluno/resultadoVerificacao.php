
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h1 class="page-header">Evolução</h1>
    </div>

    <div class="col-md-12">
        <form action="<?= base_url() ?>Aluno_controller/objetivo" method="post">
            
            <fieldset>
                <div class="form-group col-md-12">
                    <div style="text-align:center; height:30px" >
                      <fieldset>
                          <legend>Medida Triceps</legend>
                        </br>                    
                    </div>
                    <div  class="form-group col-md-6" style="height:30px; left: 13%">
                        <h4>Direito</h4>
                        </br>                    
                    </div>
                    <div  class="form-group col-md-6" style="text-align:center; height:30px">
                        <h4>Esquerdo</h4>
                        </br>                    
                    </div>

                    <div class="form-group col-md-2">
                        <label for="circunferenciaTricepsDireitoContraido">Contraido</label>
                        <input type="text" class="form-control" name="circunferenciaTricepsDireitoContraido" id="circunferenciaTricepsDireitoContraido" value="<?= $avaliacao[0]->circunferenciaTricepsDireitoContraido ?>" readonly>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="circunferenciaTricepsDireitoAlongado">Alogado</label>
                        <input type="text" class="form-control" name="circunferenciaTricepsDireitoAlongado" id="circunferenciaTricepsDireitoAlongado" value="<?= $avaliacao[0]->circunferenciaTricepsDireitoAlongado ?>" readonly>
                    </div>

                    <div class="form-goup col-md-3">                    
                    </div>

                    <div class="form-group col-md-2">
                        <label for="circunferenciaTricepsEsquerdoContraido">Contraido</label>
                        <input type="text" class="form-control" name="circunferenciaTricepsEsquerdoContraido" id="circunferenciaTricepsEsquerdoContraido" value="<?= $avaliacao[0]->circunferenciaTricepsEsquerdoContraido ?>" readonly>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="circunferenciaTricepsEsquerdoAlongado">Alongado</label>
                        <input type="text" class="form-control" name="circunferenciaTricepsEsquerdoAlongado" id="circunferenciaTricepsEsquerdoAlongado" value="<?= $avaliacao[0]->circunferenciaTricepsEsquerdoAlongado ?>" readonly>
                    </div>
                </div>
            </fieldset>


            <div class="form-group col-md-12">
                <div style="text-align:center; height:30px;" >
                    <h4> Medida Biceps</h4>
                    </br>                    
                </div>
                <div  class="form-group col-md-6" style="height:30px; left: 13%" >
                    <h4>Direito</h4>
                    </br>                    
                </div>
                <div  class="form-group col-md-6" style="text-align:center; height:30px;" >
                    <h4>Esquerdo</h4>
                    </br>                    
                </div>

                <div class="form-group col-md-2">
                    <label for="circunferenciaBicepsDireitoContraido">Contraido</label>
                    <input type="text" class="form-control" name="circunferenciaBicepsDireitoContraido" id="circunferenciaBicepsDireitoContraido" value="<?= $avaliacao[0]->circunferenciaBicepsDireitoContraido ?>" readonly>
                </div>
                <div class="form-group col-md-2">
                    <label for="circunferenciaBicepsDireitoAlongado">Alongado</label>
                    <input type="text" class="form-control" name="circunferenciaBicepsDireitoAlongado" id="circunferenciaBicepsDireitoAlongado" value="<?= $avaliacao[0]->circunferenciaBicepsDireitoAlongado ?>" readonly>
                </div>

                <div class="form-goup col-md-3">                    
                </div>

                <div class="form-group col-md-2">
                    <label for="circunferenciaBicepsEsquerdoContraido">Contraido</label>
                    <input type="text" class="form-control" name="circunferenciaBicepsEsquerdoContraido" id="circunferenciaBicepsEsquerdoContraido" value="<?= $avaliacao[0]->circunferenciaBicepsEsquerdoContraido ?>" readonly>
                </div>
                <div class="form-group col-md-2">
                    <label for="circunferenciaBicepsEsquerdoAlongado">Alongado</label>
                    <input type="text" class="form-control" name="circunferenciaBicepsEsquerdoAlongado" id="circunferenciaBicepsEsquerdoAlongado" value="<?= $avaliacao[0]->circunferenciaBicepsEsquerdoAlongado ?>" readonly>
                </div>
             </div>   

            <div class="form-group col-md-12">
                <div class="form-group col-md-5">
                    <div style="text-align:center; height:30px;" >
                        <h4> Medida Coxas</h4>
                        </br>                    
                    </div>
                </div>

                <div class="form-group col-md-2">
                </div>

                <div class="form-group col-md-5">
                    <div style="text-align:center; height:30px;" >
                        <h4> Medida Panturrilha</h4>
                        </br>                    
                    </div>
                </div>    
            
                <div class="form-group col-md-12">
                    <div class="form-group col-md-2">
                        <label for="circunferenciaCoxaDireita">Direita</label> 
                        <input type="text" class="form-control" name="circunferenciaCoxaDireita" id="circunferenciaCoxaDireita" value="<?= $avaliacao[0]->circunferenciaCoxaDireita ?>" readonly>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="circunferenciaCoxaEsquerda">Esquerda</label>
                        <input type="text" class="form-control" name="circunferenciaCoxaEsquerda" id="circunferenciaCoxaEsquerda" value="<?= $avaliacao[0]->circunferenciaCoxaEsquerda ?>" readonly>
                    </div>

                    <div class="form-goup col-md-3">                    
                    </div>

                    <div class="form-group col-md-2">
                        <label for="circunferenciaPanturrilhaDireita">Direita</label>
                        <input type="text" class="form-control" name="circunferenciaPanturrilhaDireita" id="circunferenciaPanturrilhaDireita" value="<?= $avaliacao[0]->circunferenciaPanturrilhaDireita ?>" readonly>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="circunferenciaPanturrilhaEsquerda">Esquerda</label>
                        <input type="text" class="form-control" name="circunferenciaPanturrilhaEsquerda" id="circunferenciaPanturrilhaEsquerda" value="<?= $avaliacao[0]->circunferenciaPanturrilhaEsquerda ?>" readonly>
                    </div>
                </div>
            </div>

            <div class="form-group col-md-12">
                
                <div class="form-group col-md-2" style="margin-left: 4%">
                    <label for="circunferenciaGluteo">Medida Glúteos</label>
                    <input type="text" class="form-control" name="circunferenciaGluteo" id="circunferenciaGluteo" value="<?= $avaliacao[0]->circunferenciaGluteo ?>" readonly>
                </div>
                
                <div class="form-group col-md-2" style="margin-left: 4%">
                    <label for="Altura">Altura</label>
                    <input type="text" class="form-control" name="altura" id="altura" value="<?= $avaliacao[0]->altura ?>" readonly>
                </div>
                                
                <div class="form-group col-md-2" style="margin-left: 4%">
                    <label for="Peso">Peso</label>
                    <input type="text" class="form-control" name="peso" id="peso" value="<?= $avaliacao[0]->peso ?>" readonly>
                </div>

                <div class="form-group col-md-2" style="margin-left: 4%">
                    <label for="circunferenciaPeito">Medida Peito</label>
                    <input type="text" class="form-control" name="circunferenciaPeito" id="circunferenciaPeito" value="<?= $avaliacao[0]->circunferenciaPeito ?>" readonly>
                </div>
                
            </div>

             <div class="form-group col-md-12">   
                <div style="padding-left: 80%">
                    <button type="submit" class="btn btn-success">Proximo</button>
                </div>
            </div>
        </form>
    </div>
</div>


