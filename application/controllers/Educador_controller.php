<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Educador_controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }

    //Carrega a view aluno ( ALTERAR VIEW )
    public function index() {
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('view_aluno');
        $this->load->view('includes/html_footer');
    }

    public function carregarViewCadastroEducador() {
        $this->load->view('includes/html_headerMain');
        $this->load->view('includes/menuMain');
        $this->load->view('view_CadastroEducador');
        $this->load->view('includes/html_footerMain');
    }

    //Inserir Aluno
    public function inserir() {
        //Carrega o model educador
        $this->load->model('Educador_model');

        //recebe os dados do endereço do educador da view
        $data2['cidadeEducador'] = $this->input->post('cidadeEducador');
        $data2['estadoEducador'] = $this->input->post('estadoEducador');
       // $data2['ruaEducador'] = $this->input->post('ruaEducador');
        $data2['bairroEducador'] = $this->input->post('bairroEducador');
        $data2['numeroEndEducador'] = $this->input->post('numeroEducador');
        $data2['cepEducador'] = $this->input->post('cepEducador');

        $id = $this->Educador_model->inserirEndereco($data2);

        //recebe os dados do educador da view
        $data['nomeEducador'] = $this->input->post('nome');
        $data['sobrenomeEducador'] = $this->input->post('sobrenome');
        $data['sexoEducador'] = $this->input->post('sexo');
        $data['emailEducador'] = $this->input->post('email');
        $data['CPF'] = $this->input->post('cpf');
        $data['RG'] = $this->input->post('RG');
        $data['codEnderecoEd'] = $id;
        $data['numeroCref'] = $this->input->post('numeroCref');
        $data['estadoRegistroCref'] = $this->input->post('estadoRegistroCref');
        $data['statusCref'] = $this->input->post('statusCref');

        $codEducador = $this->Educador_model->inserirEducador($data);

        if ($codEducador > 0) {
            $array['codEducador'] = $codEducador;
            $this->load->view('includes/html_headerMain');
            $this->load->view('includes/menuMain');
            $this->load->view('view_cadUsuarioEducador', $array);
            $this->load->view('includes/html_footerMain');
        }
    }

    public function minhasFichas() {
        if($this->session->userdata('logado') && $this->session->userdata('codEducador')) {

            $this->load->model('Educador_model', 'model');
            $codEducador = $this->session->userdata('codEducador');
            $dados['fichas'] = $this->model->minhasFichas($codEducador);

            if($dados['fichas']) {
                $this->load->view('includes/painelEducador/html_header');
                $this->load->view('includes/painelEducador/menu');
                $this->load->view('mainEducador/view_minhasFichas', $dados);
                $this->load->view('includes/painelEducador/html_footer');
            } else {
                $this->load->view('includes/painelEducador/html_header');
                $this->load->view('includes/painelEducador/menu');
                $this->load->view('mainEducador/semFichas');
                $this->load->view('includes/painelEducador/html_footer');
            }

        }
    }

    public function todasFichas() {
        if($this->session->userdata('logado') && $this->session->userdata('codEducador')) {
            $this->load->model('Educador_model', 'model');

            $dados['fichas'] = $this->model->todasFichas();

            if($dados['fichas']) {
                $this->load->view('includes/painelEducador/html_header');
                $this->load->view('includes/painelEducador/menu');
                $this->load->view('mainEducador/view_todasFichas', $dados);
                $this->load->view('includes/painelEducador/html_footer');
            } else {
                $this->load->view('includes/painelEducador/html_header');
                $this->load->view('includes/painelEducador/menu');
                $this->load->view('mainEducador/semFichas');
                $this->load->view('includes/painelEducador/html_footer');
            }
        }
    }

    public function fichaCompleta($codFicha = null) {
        if($this->session->userdata('logado') && $this->session->userdata('codEducador')) {
            $this->load->model('Educador_model', 'model');
            $codEducador = $this->session->userdata('codEducador');

            $dados['fichaEducador'] = $this->model->fichaCompleta($codFicha);
            
           
            if($dados['fichaEducador'] > 0) {
                $this->load->view('includes/painelEducador/html_header');
                $this->load->view('includes/painelEducador/menu');
                $this->load->view('mainEducador/view_fichaCompleta', $dados);
                $this->load->view('includes/painelEducador/html_footer');
            } else {
                echo "Mostrar mensagem que não tem nenhuma ficha!";
            }
        } else {
                echo "Você não tem permissão para acessar esta pagina! ";
        }
    }

}
