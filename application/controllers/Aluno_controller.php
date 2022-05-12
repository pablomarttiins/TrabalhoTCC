<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno_controller extends CI_Controller {
    
    public function __construct()feafafa {
        parent::__construct();
    }

    //Carrega a view aluno ( ALTERAR VIEW )
    public function index() {
       echo "Opss, errrouu!";
    }

    public function carregarViewCadastroAluno() {
        $this->load->view('includes/html_headerMain');
        $this->load->view('includes/menuMain');
        $this->load->view('view_CadastroAluno');
        $this->load->view('includes/html_footerMain');
    }

    //Inserir Aluno
    public function inserir() {
        //Carrega o model aluno
        $this->load->model('Aluno_model');

        //recebe os dados do endereço do aluno da view
        $data2['cidadeAluno'] = $this->input->post('cidadeAluno');
        $data2['estadoAluno'] = $this->input->post('estadoAluno');
        $data2['ruaAluno'] = $this->input->post('ruaAluno');
        $data2['bairroAluno'] = $this->input->post('bairroAluno');
        $data2['numeroEndAluno'] = $this->input->post('numeroAluno');
        $data2['cepAluno'] = $this->input->post('cepAluno');

        $id = $this->Aluno_model->inserirEndereco($data2);

        //recebe os dados do aluno da view
        $data['nomeAluno'] = $this->input->post('nome');
        $data['sobrenomeAluno'] = $this->input->post('sobrenome');
        $data['sexoAluno'] = $this->input->post('sexo');
        $data['emailAluno'] = $this->input->post('email');
        $data['CPF'] = $this->input->post('CPF');
        $data['RG'] = $this->input->post('RG');
        $data['codEnderecoAl'] = $id;

        $idAluno = $this->Aluno_model->inserirAluno($data);

        if ($idAluno) {
            $array['codAluno'] = $idAluno;
            $this->load->view('includes/html_headerMain');
            $this->load->view('includes/menuMain');
            $this->load->view('view_cadUsuarioAluno', $array);
            $this->load->view('includes/html_footerMain');
        }
    }

    public function meuEndereco() {
        $this->load->model('Aluno_model', 'model');
        $codAluno = $this->session->userdata('codAluno');

        $dados['endereco'] = $this->model->buscarEndereco($codAluno);

        if($dados) {
            $this->load->view('includes/painelAluno/html_header');
            $this->load->view('includes/painelAluno/menu');
            $this->load->view('mainAluno/meuEndereco', $dados);
            $this->load->view('includes/painelAluno/html_footer');
        }
    }

    public function atualizarEndereco() {
        $this->load->model('Aluno_model', 'model');

        $codEnderecoAl = $this->input->post('codEnderecoAl');
        $data['cidadeAluno'] = $this->input->post('cidadeAluno');
        $data['estadoAluno'] = $this->input->post('estadoAluno');
        $data['ruaAluno'] = $this->input->post('ruaAluno');
        $data['bairroAluno'] = $this->input->post('bairroAluno');
        $data['numeroEndAluno'] = $this->input->post('numeroAluno');
        $data['cepAluno'] = $this->input->post('cepAluno');

        if($this->model->atualizarEndereco($data, $codEnderecoAl)) {
            $dados['msg'] = "Atualização realizada com sucesso!";
            $this->load->view('includes/painelAluno/html_header');
            $this->load->view('includes/painelAluno/menu');
            $this->load->view('includes/msg_sucesso', $dados);
            $this->load->view('includes/painelAluno/html_footer');
        }

    }

    public function meusDados(){
        $this->load->model('Aluno_model', 'model');
        $codAluno = $this->session->userdata('codAluno');

        $dados['meusDados'] = $this->model->buscarDados($codAluno);
        
        if($dados) {
            $this->load->view('includes/painelAluno/html_header');
            $this->load->view('includes/painelAluno/menu');
            $this->load->view('mainAluno/meusDados', $dados);
            $this->load->view('includes/painelAluno/html_footer');
        }
    }
 
    public function evolucao(){
        $this->load->model('Aluno_model', 'model');
        $codAluno = $this->session->userdata('codAluno');

        $tempoUtil = $this->model->verificaTempoUtil($codAluno);
        $dados['avaliacao'] = $this->buscaAvaliacao();

        
            //Carrega tela informando que já tem uma ficha em uso
            $this->load->view('includes/painelAluno/html_header');
            $this->load->view('includes/painelAluno/menu');
            $this->load->view('mainAluno/temFicha', $dados);
            $this->load->view('includes/painelAluno/html_footer');
        

    }

    public function buscaAvaliacao(){
        $this->load->model('Aluno_model', 'model');
        $codAluno = $this->session->userdata('codAluno');

        $avaliacao = $this->model->buscaAvaliacao($codAluno);

        return $avaliacao;
    }

    public function verificarAvaliacao() {

        if ($this->session->userdata('logado') && $this->session->userdata('codAluno')) {

            $codAluno = $this->session->userdata('codAluno');
            //Carrega Model AvaliacaoAluno
            $this->load->model('AvaliacaoAluno_model', 'avaliacao');
            $model = $this->buscaAvaliacao($codAluno);
            
            $dados['circunferenciaTricepsDireitoContraido'] = $this->input->post('circunferenciaTricepsDireitoContraido');
            $dados['circunferenciaTricepsDireitoAlongado'] = $this->input->post('circunferenciaTricepsDireitoAlongado');
            $dados['circunferenciaTricepsEsquerdoContraido'] = $this->input->post('circunferenciaTricepsEsquerdoContraido');          
            $dados['circunferenciaTricepsEsquerdoAlongado'] = $this->input->post('circunferenciaTricepsEsquerdoAlongado');
            $dados['circunferenciaBicepsDireitoContraido'] = $this->input->post('circunferenciaBicepsDireitoContraido');
            $dados['circunferenciaBicepsDireitoAlongado'] = $this->input->post('circunferenciaBicepsDireitoAlongado');
            $dados['circunferenciaBicepsEsquerdoContraido'] = $this->input->post('circunferenciaBicepsEsquerdoContraido');
            $dados['circunferenciaBicepsEsquerdoAlongado'] = $this->input->post('circunferenciaBicepsEsquerdoAlongado');
            $dados['circunferenciaPeito'] = $this->input->post('circunferenciaPeito');
            $dados['circunferenciaCoxaDireita'] = $this->input->post('circunferenciaCoxaDireita');
            $dados['circunferenciaCoxaEsquerda'] = $this->input->post('circunferenciaCoxaEsquerda');
            $dados['circunferenciaPanturrilhaDireita'] = $this->input->post('circunferenciaPanturrilhaDireita');
            $dados['circunferenciaPanturrilhaEsquerda'] = $this->input->post('circunferenciaPanturrilhaEsquerda');
            $dados['circunferenciaGluteo'] = $this->input->post('circunferenciaGluteo');
            $dados['peso'] = $this->input->post('peso');
            $dados['altura'] = $model[0]->altura;

            //Transforma os dados em array para poder passalos para a view
            $dadosArray['avaliacao'] = $this->model->transformaArray($dados);
            
            //Recebe os dados da view AvaliacaoAluno e subtraindo com os valores vindos do banco
            $peso = $this->input->post('peso');
            $data['circunferenciaTricepsDireitoContraido'] = $this->input->post('circunferenciaTricepsDireitoContraido') - $model[0]->circunferenciaTricepsDireitoContraido;
            $data['circunferenciaTricepsDireitoAlongado'] = $this->input->post('circunferenciaTricepsDireitoAlongado') - $model[0]->circunferenciaTricepsDireitoAlongado;
            $data['circunferenciaTricepsEsquerdoContraido'] = $this->input->post('circunferenciaTricepsEsquerdoContraido') - $model[0]->circunferenciaTricepsEsquerdoContraido;          
            $data['circunferenciaTricepsEsquerdoAlongado'] = $this->input->post('circunferenciaTricepsEsquerdoAlongado') - $model[0]->circunferenciaTricepsEsquerdoAlongado;
            $data['circunferenciaBicepsDireitoContraido'] = $this->input->post('circunferenciaBicepsDireitoContraido') - $model[0]->circunferenciaBicepsDireitoContraido;
            $data['circunferenciaBicepsDireitoAlongado'] = $this->input->post('circunferenciaBicepsDireitoAlongado') - $model[0]->circunferenciaBicepsDireitoAlongado;
            $data['circunferenciaBicepsEsquerdoContraido'] = $this->input->post('circunferenciaBicepsEsquerdoContraido') - $model[0]->circunferenciaBicepsEsquerdoContraido;
            $data['circunferenciaBicepsEsquerdoAlongado'] = $this->input->post('circunferenciaBicepsEsquerdoAlongado') - $model[0]->circunferenciaBicepsEsquerdoAlongado;
            $data['circunferenciaPeito'] = $this->input->post('circunferenciaPeito') - $model[0]->circunferenciaPeito;
            $data['circunferenciaCoxaDireita'] = $this->input->post('circunferenciaCoxaDireita') - $model[0]->circunferenciaCoxaDireita;
            $data['circunferenciaCoxaEsquerda'] = $this->input->post('circunferenciaCoxaEsquerda') - $model[0]->circunferenciaCoxaEsquerda;
            $data['circunferenciaPanturrilhaDireita'] = $this->input->post('circunferenciaPanturrilhaDireita') - $model[0]->circunferenciaPanturrilhaDireita;
            $data['circunferenciaPanturrilhaEsquerda'] = $this->input->post('circunferenciaPanturrilhaEsquerda') - $model[0]->circunferenciaPanturrilhaEsquerda;
            $data['circunferenciaGluteo'] = $this->input->post('circunferenciaGluteo') - $model[0]->circunferenciaGluteo;
            $data['peso'] = $this->input->post('peso') - $model[0]->peso;
            $data['codAluno'] = $codAluno;
            $data['altura'] = $model[0]->altura;
            $data['imc'] = $this->calcularImc($data, $peso);

            //$dados['avaliacao'] = $this->model->selecionaUltimaAvaliacao($codAluno);

            if($this->model->inseriNovaAvaliacao($data)) {
                $this->load->view('includes/painelAluno/html_header');
                $this->load->view('includes/painelAluno/menu');
                $this->load->view('mainAluno/resultadoVerificacao', $dadosArray);
                $this->load->view('includes/painelAluno/html_footer');
            }

        }

    }


    //Calcula o IMC do usuário Aluno
    public function calcularImc($data, $peso) {
        if($this->session->userdata('logado') && $this->session->userdata('codAluno')) {
           if($data['altura'] > 100) {
            $data['altura'] = $data['altura'] / 100;
        }
        $imc = $peso / ($data['altura'] * $data['altura']);
        return $imc; 
        } else {
                echo "Você não tem permissão para acessar esta pagina! ";
        }
    }

    public function objetivo() {
        $this->load->model('FichaTreino_model', 'model');

        $dadosObjetivo['descricao'] = $this->model->buscaObjetivo();

        if ($this->session->userdata('logado') && $this->session->userdata('codAluno')) {
            $this->load->view('includes/painelAluno/html_header');
            $this->load->view('includes/painelAluno/menu');
            $this->load->view('mainAluno/novoObjetivo', $dadosObjetivo);
            $this->load->view('includes/painelAluno/html_footer');
        }
    }

    public function inserirNovoObjetivo() {

        $this->load->model('FichaTreino_model', 'model');

        $codAluno = $this->session->userdata('codAluno');
        $codObjetivoVerificar = $this->input->post('obj');
        $dados['codAluno'] = $codAluno;
        $dados['codObjetivoTipo'] = $codObjetivoVerificar;


        $codObjetivo = $this->model->verificaObjetivo($codAluno, $codObjetivoVerificar);
        $objetivo = $this->model->verificarSeExisteObjetivo($codAluno);
        $tempoUtil = $this->model->verificaTempoUtil($codAluno);

        if ($objetivo == true) {
            if ($dados['codObjetivoTipo'] != $codObjetivo) {
                if ($this->model->inserirObjetivo($dados)) {
                    $this->buscarTodasFichas();
                } else {
                    //Falha no momento de cadastro
                    $this->load->view('includes/painelAluno/html_header');
                    $this->load->view('includes/painelAluno/menu');
                    $this->load->view('mainAluno/erroCadastro');
                    $this->load->view('includes/painelAluno/html_footer');
                }
            } else {
                    // carrega tela informando que a pessoa já tem uma ficha/avaliação com esse objetivo, favor trocar!
                    $this->inserirNovoObjetivo();
            }
            } else {
                    //Falha no momento de cadastro
                    $this->load->view('includes/painelAluno/html_header');
                    $this->load->view('includes/painelAluno/menu');
                    $this->load->view('mainAluno/erroCadastro');
                    $this->load->view('includes/painelAluno/html_footer');
            }
        }

        public function buscarTodasFichas() {
        if($this->session->userdata('logado') && $this->session->userdata('codAluno')) {
            //Carrega a model
            $this->load->model('AvaliacaoAluno_model', 'model');
            $codAluno = $this->session->userdata('codAluno');
            

            $codObjetivo = $this->model->buscaObjetivoAlunoFicha($codAluno);

            $dados['fichas'] = $this->model->buscarTodasFichas($codObjetivo);


            if($dados['fichas']){
                $this->load->view('includes/painelAluno/html_header');
                $this->load->view('includes/painelAluno/menu');
                $this->load->view('view_listaFichasTreino', $dados);
                $this->load->view('includes/painelAluno/html_footer');
            } 
        } else {
                echo "Você não tem permissão para acessar esta pagina! ";
        }
        

    } 

}
