<?php

class Adm_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('includes/html_headerMain');
        $this->load->view('includes/menuMain');
        $this->load->view('view_CadastroAdm');
        $this->load->view('includes/html_footerMain');
    }

    public function inserirAdm() {

        $this->load->model('Adm_model', 'adm');

        $data['nomeAdm'] = $this->input->post('nome');
        $data['emailAdm'] = $this->input->post('email');

        $idAdm = $this->adm->inserirAdm($data);

        if ($idAdm) {
            $array['codAdm'] = $idAdm;
            $this->load->view('includes/html_headerMain');
            $this->load->view('includes/menuMain');
            $this->load->view('view_cadUsuarioAdm', $array);
            $this->load->view('includes/html_footerMain');
        }
    }

    public function inserirUsuarioAdm() {
        
        $this->load->model('Adm_model', 'adm');
        
        //Recebe os dados da view de usuarioAdm
        $data['login'] = $this->input->post('login');
        $data['senha'] = md5($this->input->post('senha'));
        $data['codAdm'] = $this->input->post('codAdm');
        $data['nivel'] = 3;

        if ($this->adm->inserirUsuarioAdm($data)) {
            redirect('Painel_controller/login');
        }
    }

}
