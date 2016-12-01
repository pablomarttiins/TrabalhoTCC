<?php

class PainelAdm_model extends CI_Model {
    
    public function validarLogin($login, $senha){
        $sql = "SELECT `usuario`.`codUsuario`, `usuario`.`login`, `usuario`.`nivel`, `administrador`.`codAdm`
		        	FROM `usuario` 
					INNER JOIN `administrador`
					ON `usuario`.`codAdm` = `administrador`.`codAdm`
		        	WHERE `usuario`.`login` = '{$login}' AND `usuario`.`senha` = '{$senha}' LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
}
