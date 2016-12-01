<div class="container">

    <div class="form-group">

        <form action="<?= base_url() ?>Aluno_controller/inserir" method="post" style="padding-top: 100px">

            <section>

                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-6 col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe seu nome..." required>
                    </div>
                    <div class="col-xs-5 col-md-5">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Informe seu sobrenome..." required>
                    </div>
                    <div class="col-xs-1 col-md-1" style="width: 16.333%">
                        <label for="sexo">Sexo</label>
                        <select id="sexo" class="form-control" name="sexo" required>
                            <option value="0"> Informe seu sexo... </option>
                            <option value="M"> Masculino </option>
                            <option value="F"> Feminino </option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12" style="padding-top: 1%;">
                    <div class="col-xs-6 col-md-6" style="width: 30.333%">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Informe seu e-mail..." required>
                    </div>
                    <div class="col-xs-2 col-md-2" style="width: 23.333%">
                        <label for="datanascimento">Data Nascimento</label>
                        <input type="date" class="form-control" id="datanascimento" maxlength="8" name="datanascimento" placeholder="Informe sua data de nascimento...">
                    </div>

                    <div class="col-xs-2 col-md-2" style="width: 23.333%">   
                        <label for="CPF">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf"  maxlength="11" onblur="validaCPF(cpf) " placeholder="Informe seu CPF..." required>
                    </div>
                    <div class="col-xs-2 col-md-2" style="width: 22.893%">
                        <label for="rg">RG</label>
                        <input type="text" class="form-control" id="rg" name="rg" maxlength="10" placeholder="Informe seu RG..." required>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12">
                    <h2>Informações do Endereço</h2>
                    <div class="col-xs-8 col-md-7">
                        <label for="ruaAluno">Rua</label>
                        <input type="text" class="form-control" id="ruaAluno" name="ruaAluno" placeholder="Informe sua rua..." required>
                    </div>
                    <div class="col-xs-3 col-md-3">
                        <label for="bairroAluno">Bairro</label>
                        <input type="text" class="form-control" id="bairroAluno" name="bairroAluno" placeholder="Informe seu bairro..." required>
                    </div>
                    <div class="col-xs-1 col-md-2">
                        <label for="numeroAluno">Número</label>
                        <input type="number" class="form-control" id="numeroAluno" name="numeroAluno" placeholder="Informe o numero..." required>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12"  style="padding-top: 1%;">
                    <div class="col-xs-5 col-md-7" style="width: 41%">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidadeAluno" name="cidadeAluno" placeholder="Informe sua cidade..." required>
                    </div>

                    <div class="col-xs-2 col-md-2">
                        <label for="estadoAluno">Estado</label>
                        <select type="text" class="form-control" id="estadoAluno" name="estadoAluno" required maxlength="2">
                            <option value="00">Informe seu estado...</option>
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
                            <option value="SP">  São Paulo           </option>
                            <option value="SE">  Sergipe             </option>
                            <option value="TO">  Tocantins           </option> 						
                        </select>                    
                    </div>

                    <div class="col-xs-2 col-md-2" style="width: 24.8%; left:1%">
                        <label for="cepAluno">CEP</label>
                        <input type="text" class="form-control" id="cepaluno" name="cepAluno" maxlength="8" placeholder="Informe seu CEP..." required>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12" style="padding-top: 1%">
                    <div class="col-xs-12 col-md-12" style="text-align: right">
                        <button type="submit" class="btn btn-success" >Enviar</button>
                        <button type="reset" class="btn btn-danger" >Cancelar</button>
                    </div>
                </div>

            </section>

        </form>

    </div>

</div> 

</br>

    