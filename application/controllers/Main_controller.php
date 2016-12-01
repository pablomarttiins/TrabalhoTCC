<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('includes/html_headerMain');
        $this->load->view('includes/menuMain');
        $this->load->view('view_main');
        $this->load->view('includes/html_footerMain');
    }

}
