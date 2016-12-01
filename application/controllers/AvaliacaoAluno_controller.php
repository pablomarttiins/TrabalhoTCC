<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AvaliacaoAluno_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function inserir() {

        if ($this->session->userdata('logado') && $this->session->userdata('codAluno')) {

            date_default_timezone_set('America/Sao_Paulo');
            $date = date('Y-m-d H:i');

            $codAluno = $this->session->userdata('codAluno');
            //Carrega Model AvaliacaoAluno
            $this->load->model('AvaliacaoAluno_model', 'avaliacao');

            //Recebe os dados da view AvaliacaoAluno
            $data['circunferenciaTricepsDireitoContraido'] = $this->input->post('circunferenciaTricepsDireitoContraido');
            $data['circunferenciaTricepsDireitoAlongado'] = $this->input->post('circunferenciaTricepsDireitoAlongado');
            $data['circunferenciaTricepsEsquerdoContraido'] = $this->input->post('circunferenciaTricepsEsquerdoContraido');
            $data['circunferenciaTricepsEsquerdoAlongado'] = $this->input->post('circunferenciaTricepsEsquerdoAlongado');
            $data['circunferenciaBicepsDireitoContraido'] = $this->input->post('circunferenciaBicepsDireitoContraido');
            $data['circunferenciaBicepsDireitoAlongado'] = $this->input->post('circunferenciaBicepsDireitoAlongado');
            $data['circunferenciaBicepsEsquerdoContraido'] = $this->input->post('circunferenciaBicepsEsquerdoContraido');
            $data['circunferenciaBicepsEsquerdoAlongado'] = $this->input->post('circunferenciaBicepsEsquerdoAlongado');
            $data['circunferenciaPeito'] = $this->input->post('circunferenciaPeito');
            $data['circunferenciaCoxaDireita'] = $this->input->post('circunferenciaCoxaDireita');
            $data['circunferenciaCoxaEsquerda'] = $this->input->post('circunferenciaCoxaEsquerda');
            $data['circunferenciaPanturrilhaDireita'] = $this->input->post('circunferenciaPanturrilhaDireita');
            $data['circunferenciaPanturrilhaEsquerda'] = $this->input->post('circunferenciaPanturrilhaEsquerda');
            $data['circunferenciaGluteo'] = $this->input->post('circunferenciaGluteo');
            $data['percentGordura'] = $this->input->post('PercentGordura');
            $data['peso'] = $this->input->post('peso');
            $data['altura'] = $this->input->post('altura');
            $data['DataAvaliacao'] = $date;
            $data['codAluno'] = $codAluno;
            //Chama metodo do imc para poder gravalo no banco
            $data['imc'] = $this->calcularImc($data);

            if ($this->avaliacao->inserirAvaliacao($data)) {
                $this->verificarImc($data);
                /*$this->load->view('includes/html_header');
                $this->load->view('includes/menu');
                $this->load->view('view_treinosIndicados');
                $this->load->view('includes/html_footer');  APAGAR ESTAS VIEWS*/ 
            }
        }
    }


    public function verificarImc($data) {
        if($this->session->userdata('logado') && $this->session->userdata('codAluno')) {
            //Chama o metodo buscarSexo
            $sexo = $this->buscarSexo();
            //Chama o metodo calcularImc e passa como parametro o data (parametros vindos do metodo inserir)
            $imc = $this->calcularImc($data);

            $this->buscarTodasFichas();
        } else {
                echo "Você não tem permissão para acessar esta pagina! ";
        }
        
    }

    //Busca o sexo do usuário Aluno
    public function buscarSexo() {
        if($this->session->userdata('logado') && $this->session->userdata('codAluno')){
            $this->load->model('AvaliacaoAluno_model', 'model');
            $codAluno = $this->session->userdata('codAluno');

            $sexo = $this->model->buscarSexo($codAluno);
            return $sexo;
        } else {
                echo "Você não tem permissão para acessar esta pagina! ";
        }
        
    }

    //Calcula o IMC do usuário Aluno
    public function calcularImc($data) {
        if($this->session->userdata('logado') && $this->session->userdata('codAluno')) {
           if($data['altura'] > 100) {
            $data['altura'] = $data['altura'] / 100;
        }
        $imc = $data['peso'] / ($data['altura'] * $data['altura']);
        return $imc; 
        } else {
                echo "Você não tem permissão para acessar esta pagina! ";
        }
    }

    public function buscaObjetivoAluno() {
        if($this->session->userdata('logado') && $this->session->userdata('codAluno')) {
            $this->load->model('AvaliacaoAluno_model', 'model');
            $codAluno = $this->session->userdata('codAluno');

            //Pega o objetivo do aluno
            $codObjetivo = $this->model->buscaObjetivoAluno($codAluno);

            return $codObjetivo;
        } else {
                echo "Você não tem permissão para acessar esta pagina! ";
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
    
    public function minhasFichas() {
        if($this->session->userdata('logado') && $this->session->userdata('codAluno')) {
            $this->load->model('AvaliacaoAluno_model', 'model');
            $codAluno = $this->session->userdata('codAluno');

            $dados['fichaAluno'] = $this->model->minhasFichas($codAluno);

            if($dados['fichaAluno']) {
                $this->load->view('includes/painelAluno/html_header');
                $this->load->view('includes/painelAluno/menu');
                $this->load->view('mainAluno/view_minhasFichas', $dados);
                $this->load->view('includes/painelAluno/html_footer');
            } else {
                $this->load->view('includes/painelAluno/html_header');
                $this->load->view('includes/painelAluno/menu');
                $this->load->view('mainAluno/semRegistros');
                $this->load->view('includes/painelAluno/html_footer');
            }
        } else {
                echo "Você não tem permissão para acessar esta pagina! ";
        }
    }
    
    //Metodo usado quando o aluno já vinculou a ficha
    public function fichaCompleta($codFichaTreino = null) {
        if($this->session->userdata('logado') && $this->session->userdata('codAluno')) {
            $this->load->model('AvaliacaoAluno_model', 'model');
            $codAluno = $this->session->userdata('codAluno');

            $dados['fichaAluno'] = $this->model->fichaCompleta($codAluno, $codFichaTreino);
            
           
            if($dados['fichaAluno'] > 0) {
                $this->load->view('includes/painelAluno/html_header');
                $this->load->view('includes/painelAluno/menu');
                $this->load->view('mainAluno/view_fichaCompleta', $dados);
                $this->load->view('includes/painelAluno/html_footer');
            } else {
                $this->load->view('includes/painelAluno/html_header');
                $this->load->view('includes/painelAluno/menu');
                $this->load->view('mainAluno/semRegistros');
                $this->load->view('includes/painelAluno/html_footer');
            }
        } else {
                echo "Você não tem permissão para acessar esta pagina! ";
        }
    }

    public function expandirFicha($codFichaTreino = null) {
        if($this->session->userdata('logado') && $this->session->userdata('codAluno')) {
            $this->load->model('AvaliacaoAluno_model', 'model');
            $codAluno = $this->session->userdata('codAluno');

            $dados['fichaAluno'] = $this->model->expandirFicha($codFichaTreino);
           
           
            if($dados['fichaAluno'] > 0) {
                $this->load->view('includes/painelAluno/html_header');
                $this->load->view('includes/painelAluno/menu');
                $this->load->view('mainAluno/view_fichaCompleta', $dados);
                $this->load->view('includes/painelAluno/html_footer');
            } else {
                $this->load->view('includes/painelAluno/html_header');
                $this->load->view('includes/painelAluno/menu');
                $this->load->view('mainAluno/semRegistros');
                $this->load->view('includes/painelAluno/html_footer');
            }
        } else {
                echo "Você não tem permissão para acessar esta pagina! ";
        }
    }
    
    public function minhasAvaliacoes() {
        if($this->session->userdata('logado') && $this->session->userdata('codAluno')) {
            $this->load->model('AvaliacaoAluno_model', 'model');
            $codAluno = $this->session->userdata('codAluno');
        
            $dados['avaliacao'] = $this->model->minhasAvaliacoes($codAluno);
            //var_dump($dados);
            if($dados['avaliacao']) {
                $this->load->view('includes/painelAluno/html_header');
                $this->load->view('includes/painelAluno/menu');
                $this->load->view('mainAluno/view_minhaAvaliacao', $dados);
                $this->load->view('includes/painelAluno/html_footer');
            } else {
                $this->load->view('includes/painelAluno/html_header');
                $this->load->view('includes/painelAluno/menu');
                $this->load->view('mainAluno/semAvaliacoes');
                $this->load->view('includes/painelAluno/html_footer');
            } 
        } else {
                echo "Você não tem permissão para acessar esta pagina! ";
        }
        
    }
}
