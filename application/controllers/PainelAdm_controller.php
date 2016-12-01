<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PainelAdm_controller extends CI_Controller {

    public function index() {
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('view_painelAdm');
        $this->load->view('includes/html_footer');
    }

    public function verificarQtdAlunosProfessores() {

        $this->load->model('Adm_model', 'adm');

        $dados['quantidadeAlunos']      = $this->adm->buscarQtdAlunos();
        $dados['quantidadeProfessores'] = $this->adm->buscarQtdProfessores();
        
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('includes/menuLateral');
        $this->load->view('view_painelAdmQtdAlPr', $dados);
        $this->load->view('includes/html_footer');
        
    }

}
