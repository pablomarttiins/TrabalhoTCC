<?php

class Usuario_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function inserirUsuario($data) {
        if ($this->db->insert('usuario', $data)) {
            return true;
        } else {
            echo "Erro ao realizar o cadastro!";
        }
    }

}
