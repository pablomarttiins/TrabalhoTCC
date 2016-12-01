<div class="container">
    <div class="col-xs-12 col-md-12">
        <form action="<?= base_url() ?>Educador_controller/inserir" method="post" style="padding-top: 100px">
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

                    <div class="col-xs-1 col-md-1" style="width: 16.333%;">
                        <label for="sexo">Sexo</label>
                        <select id="sexo" class="form-control" name="sexo" required>
                            <option value="0"> Informe seu sexo... </option>
                            <option value="M"> Masculino </option>
                            <option value="F"> Feminino </option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12" style="padding-top: 1%">
                    <div class="col-xs-5 col-md-5">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Informe seu e-mail..." required>
                    </div>

                    <div class="col-xs-2 col-md-2" style="width: 21.333%">
                        <label for="datanascimento">Data Nascimento</label>
                        <input type="date" class="form-control" id="datanascimento" maxlength="8" name="datanascimento" placeholder="Informe sua data de nascimento...">
                    </div>


                    <div class="col-xs-2 col-md-2" style="width: 22.555%">
                        <label for="CPF">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" maxlength="11" placeholder="Informe seu CPF..." required>
                    </div>

                    <div class="col-xs-2 col-md-2" style="width: 22.555%">
                        <label for="rg">RG</label>
                        <input type="text" class="form-control" id="RG" name="RG" placeholder="Informe seu RG..." required>
                    </div>

                </div>

                <div class="col-xs-12 col-md-12" style="padding-top: 1%">
                    <div class="col-xs-3 col-md-3">
                        <label for="numeroCref">Número Cref</label>
                        <input type="text" class="form-control" id="numeroCref" name="numeroCref" maxlength="6" placeholder="Informe seu RG..." required>
                    </div>

                    <div class="col-xs-2 col-md-2">
                        <label for="estadoRegistroCref">Estado do Cref</label>
                        <select type="text" class="form-control" id="estadoRegistroCref" name="estadoRegistroCref" required>
                            <option value="00">Informe UF do Cref...</option>
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

                    <div class="col-xs-3 col-md-3">
                        <label for="statusCref">Status Cref</label>
                        <select id="statusCref" class="form-control" name="statusCref" required>
                            <option value="0"> ---</option>
                            <option value="M"> Ativo </option>
                            <option value="F"> Inativo </option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12">
                    <h2>Informações de Endereço</h2>
                    <div class="col-xs-6 col-md-6">
                        <label for="ruaAluno">Rua</label>
                        <input type="text" class="form-control" id="ruaAluno" name="ruaEducador" placeholder="Informe sua rua..." required>
                    </div>
                    <div class="col-xs-5 col-md-5">
                        <label for="bairroAluno">Bairro</label>
                        <input type="text" class="form-control" id="bairroAluno" name="bairroEducador" placeholder="Informe seu bairro..." required>
                    </div>
                    <div class="col-xs-1 col-md-1" style="width: 16.333%;">
                        <label for="numeroAluno">Número</label>
                        <input type="number" class="form-control" id="numeroAluno" name="numeroEducador" placeholder="Informe o numero..." required>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12" style="padding-top: 1%">
                    <div class="col-xs-7 col-md-7" style="width: 41%">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidadeAluno" name="cidadeEducador" placeholder="Informe sua cidade..." required>
                    </div>
                    <div class="col-xs-2 col-md-2">
                        <label for="estadoAluno">Estado</label>
                        <select type="text" class="form-control" id="estadoAluno" name="estadoEducador" required maxlength="2">
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
                        
                    <div class="col-xs-3 col-md-3">
                        <label for="cepAluno">CEP</label>
                        <input type="text" class="form-control" id="cepeducador" name="cepEducador" maxlength="8" placeholder="Informe seu CEP..." required>
                    </div>
                </div>

                    <div class="col-xs-12 col-md-12" style="padding-top: 1%;">
                    <div style="text-align: right">
                        <button type="submit" class="btn btn-success" style="width: 8%" >Enviar</button>
                        <button type="reset" class="btn btn-danger" style="width: 8%" >Cancelar</button>
                    </div>
            </section>

        </form>
    </div>
</div> </br>
