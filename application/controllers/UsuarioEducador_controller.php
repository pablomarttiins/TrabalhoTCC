<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioEducador_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('includes/html_headerMain');
        $this->load->view('includes/menuMain');
        $this->load->view('view_cadUsuarioEducador');
        $this->load->view('includes/html_footerMain');
    }

    public function inserir() {

        //Carrega o model Usuario
        $this->load->model('UsuarioEducador_model', 'usuario');

        //Recebe os dados da view de usuario
        $data['login'] = $this->input->post('login');
        $data['senha'] = md5($this->input->post('senha'));
        $data['codEducador'] = $this->input->post('codEducador');
        $data['nivel'] = 2;

        //INSERI O USUÁRIO E CHAMA A VIEW DE USUARIO
        if ($this->usuario->inserirUsuario($data)) {

            redirect('Painel_controller/login');
        }
    }

}
