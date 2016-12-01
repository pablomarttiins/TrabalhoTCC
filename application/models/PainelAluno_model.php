<?php

class PainelAluno_model extends CI_Model {
    
    public function validarLogin($login, $senha){
        $sql = "SELECT `usuario`.`codUsuario`, `usuario`.`login`, `usuario`.`nivel`, `aluno`.`codAluno`
		        	FROM `usuario` 
					INNER JOIN `aluno`
					ON `usuario`.`codAluno` = `aluno`.`codAluno`
		        	WHERE `usuario`.`login` = '{$login}' AND `usuario`.`senha` = '{$senha}' LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
}
