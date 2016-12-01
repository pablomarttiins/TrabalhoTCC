<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('PainelAluno_controller/login');
        }
    }

    public function index() {
        $this->verificar_sessao();
        /* $this->load->view('includes/html_header');
          $this->load->view('includes/menu');
          $this->load->view('view_avaliacaoAluno');
          $this->load->view('includes/html_footer'); */
    }

    public function painelAluno() {
        $this->verificar_sessao();
        redirect('FichaTreino_controller/buscaObjetivo');
    }

    public function painelEducador() {
        $this->verificar_sessao();
        redirect('FichaTreino_controller/montarFicha');
    }

    public function painelAdm () {
        $this->verificar_sessao();
        redirect('PainelAdm_controller');
    }

    //MONTA TELA DE NOVA AVALIAÇÃO DO ALUNO
    public function montaAvaliacao() {
        $this->verificar_sessao();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('view_novaAvaliacao');
        $this->load->view('includes/html_footer');
    }

    public function login() {
        $this->load->view('includes/html_header');
        $this->load->view('login');
        $this->load->view('includes/html_footer');
    }

    //METODO PARA REALIZAR LOGIN
    public function logar() {

        $this->load->model('PainelAluno_model', 'modelAluno');
        $this->load->model('PainelEducador_model', 'modelEducador');
        $this->load->model('PainelAdm_model', 'modelAdm');

        $dados = array(
            'login' => $this->input->post('login'),
            'senha' => md5($this->input->post('senha'))
        );

        $loginAluno     = $this->modelAluno->validarLogin($dados['login'], $dados['senha']);
        $loginEducador  = $this->modelEducador->validarLogin($dados['login'], $dados['senha']);
        $loginAdm       = $this->modelAdm->validarLogin($dados['login'], $dados['senha']);

        var_dump($loginAluno);
        

        if ($loginAluno) {

            $this->session->set_userdata(array(
                'codigo' => $loginAluno[0]->codUsuario,
                'login' => $loginAluno[0]->login,
                'nivel' => $loginAluno[0]->nivel,
                'codAluno' => $loginAluno[0]->codAluno,
                'logado' => TRUE,
            ));

            redirect('Painel_controller/painelAluno');
        } elseif ($loginEducador) {
            $this->session->set_userdata(array(
                'codigo' => $loginEducador[0]->codUsuario,
                'login' => $loginEducador[0]->login,
                'nivel' => $loginEducador[0]->nivel,
                'codEducador' => $loginEducador[0]->codEducador,
                'logado' => TRUE,
            ));

            redirect('Painel_controller/painelEducador');
        } elseif ($loginAdm) {
            $this->session->set_userdata(array(
                'codigo' => $loginAdm[0]->codUsuario,
                'login' => $loginAdm[0]->login,
                'nivel' => $loginAdm[0]->nivel,
                'codAdm' => $loginAdm[0]->codAdm,
                'logado' => TRUE,
            ));

            redirect('Painel_controller/painelAdm');
        } else {
            $this->session->set_flashdata(array(
                'type-info' => 'error',
                'info-message' => 'Usuário ou senha invalidos',
            ));
            redirect('Painel_controller/login');
        }
    }

    public function logoff() {
        $this->session->sess_destroy();
        redirect('Painel_controller/login');
    }

}
