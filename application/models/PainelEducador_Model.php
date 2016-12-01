<?php

class PainelEducador_model extends CI_Model {

    public function validarLogin($login, $senha) {
        $sql = "SELECT `usuario`.`codUsuario`, `usuario`.`login`, `usuario`.`nivel`, `educadorfisico`.`codEducador`
		        	FROM `usuario` 
					INNER JOIN `educadorfisico`
					ON `usuario`.`codEducador` = `educadorfisico`.`codEducador`
		        	WHERE `usuario`.`login` = '{$login}' AND `usuario`.`senha` = '{$senha}' LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }

}
