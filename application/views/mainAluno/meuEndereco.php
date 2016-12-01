
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



<form action="<?= base_url() ?>Aluno_controller/atualizarEndereco" method="POST">
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <input type="hidden" name="codEnderecoAl" value="<?= $endereco[0]->codEnderecoAl ?>">
        
        <div class="col-xs-8 col-md-7">
            <label for="ruaAluno">Rua</label>
            <input type="text" class="form-control" id="ruaAluno" name="ruaAluno" placeholder="Informe sua rua..." value="<?= $endereco[0]->ruaAluno ?>" required>
        </div>
        <div class="col-xs-3 col-md-3">
            <label for="bairroAluno">Bairro</label>
            <input type="text" class="form-control" id="bairroAluno" name="bairroAluno" placeholder="Informe seu bairro..." value="<?= $endereco[0]->bairroAluno ?>" required>
        </div>
        <div class="col-xs-1 col-md-2">
            <label for="numeroAluno">Número</label>
            <input type="number" class="form-control" id="numeroAluno" name="numeroAluno" placeholder="Informe o numero..." value="<?= $endereco[0]->numeroEndAluno ?>" required>
        </div>
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"  style="padding-top: 1%;">
        <div class="col-xs-5 col-md-7" style="width: 41%">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidadeAluno" name="cidadeAluno" placeholder="Informe sua cidade..." value="<?= $endereco[0]->cidadeAluno ?>" required>
        </div>

        <div class="col-xs-2 col-md-2">
            <label for="estadoAluno">Estado</label>
            <select type="text" class="form-control" id="estadoAluno" name="estadoAluno"  required maxlength="2">
                <option value="<?= $endereco[0]->estadoAluno ?>"> São Paulo </option>
                <option value="AC">  Acre                </option>
                <option value="AL">  Alagoas             </option>
                <option value="AP">  Amapá               </option>
                <option value="AM">  Amazonas            </option>
                <option value="BA">  Bahia               </option>
                <option value="CE">  Ceará               </option>
                <option value="DF">  Distrito Federal    </option>
                <option value="ES">  Espírito Santo      </option>
                <option value="GO">  Goiás               </option>
                <option value="MA">  Maranhão            </option>
                <option value="MT">  Mato Grosso         </option>
                <option value="MS">  Mato Grosso do Sul  </option>
                <option value="MG">  Minas Gerais        </option>
                <option value="PA">  Pará                </option>
                <option value="PB">  Paraíba             </option>
                <option value="PR">  Paraná              </option>
                <option value="PE">  Pernambuco          </option>
                <option value="PI">  Piauí               </option>
                <option value="RJ">  Rio de Janeiro      </option>
                <option value="RN">  Rio Grande do Norte </option>
                <option value="RS">  Rio Grande do Sul   </option>
                <option value="RO">  Rondônia            </option>
                <option value="RR">  Roraima             </option>
                <option value="SC">  Santa Catarina      </option>
                <option value="SE">  Sergipe             </option>
                <option value="TO">  Tocantins           </option> 				
            </select>                    
        </div>

        <div class="col-xs-2 col-md-2" style="width: 24.8%; left:1%">
            <label for="cepAluno">CEP</label>
            <input type="text" class="form-control" id="cepaluno" name="cepAluno" maxlength="8" placeholder="Informe seu CEP..." value="<?= $endereco[0]->cepAluno ?>" required>
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


