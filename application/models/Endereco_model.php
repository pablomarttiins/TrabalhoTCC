<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Endereco_model extends CI_Model {

	public $cidadeAluno;
	public $estadoAluno;
	public $ruaAluno;
	public $bairroAluno;
	public $numeroEndAluno;
	public $cepAluno;

	public function __construct(){
		parent::__construct();
	}

	public function inserir()
	{
		return $this->db->insert('aluno', $this);
	}

}