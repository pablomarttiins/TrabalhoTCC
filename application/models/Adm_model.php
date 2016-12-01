<?php

class Adm_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function inserirAdm($data) {
        if ($this->db->insert('administrador', $data)) {
            $id = $this->db->insert_id();
            return $id;
        }
    }

    public function inserirUsuarioAdm($data) {
        if ($this->db->insert('usuario', $data)) {
            return true;
        } else {
            echo "Erro ao realizar o cadastro!";
        }
    }

    public function buscarQtdAlunos() {
        $query = $this->db->query("SELECT count(codAluno) as num FROM aluno");
        $row = $query->row();
        return $row->num;
    }

    public function buscarQtdProfessores() {
        $query = $this->db->query("SELECT count(codEducador) as num FROM educadorfisico");
        $row = $query->row();
        return $row->num;
    }


}
