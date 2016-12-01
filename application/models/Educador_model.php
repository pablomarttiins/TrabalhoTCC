<?php

class Educador_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function inserirEndereco($data) {
        if ($this->db->insert('enderecoEducador', $data)) {
            $id = $this->db->insert_id();
            return $id;
        }
    }

    public function inserirEducador($data) {
        if ($this->db->insert('educadorFisico', $data)) {
            $id = $this->db->insert_id();
            return $id;
        }
    }


    public function minhasFichas($codEducador) {
        $sql = "SELECT `fichatreino`.`descricao`, fichatreino.codFichaTreino, `fichatreino`.`tempoUtil`, 
                        `objetivotipo`.`descricao` as objetivoFicha, `fichatreino`.`observacao`
                    FROM `fichatreino`
                INNER JOIN `objetivotipo`
                ON  `fichaTreino`.`codObjetivoTipo` = `objetivotipo`.`codObjetivoTipo`
                WHERE `fichatreino`.`codEducador` = {$codEducador} ";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function todasFichas() {
        $sql = "SELECT `fichatreino`.`descricao`, fichatreino.codFichaTreino, `fichatreino`.`tempoUtil`, 
                        `objetivotipo`.`descricao` as objetivoFicha, `educadorfisico`.`nomeEducador`, 
                        `educadorfisico`.`codEducador`, `fichatreino`.`observacao`
                    FROM `fichatreino`
                INNER JOIN `objetivotipo`
                ON  `fichaTreino`.`codObjetivoTipo` = `objetivotipo`.`codObjetivoTipo`
                INNER JOIN `educadorFisico`
                ON `fichatreino`.`CodEducador` = `educadorfisico`.`codEducador`";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function fichaCompleta($codFicha) {
        $sql = "SELECT fichatreino.descricao,
                       fichatreino.codFichaTreino,
                       grupo.descricaoGrupo as 'grupo',
                       exercicio.descricao as 'descricaoExercicio',
                       musculo.descricao as 'nomeMusculo',
                       grupo_exercicio.serie as 'serie',
                       grupo_exercicio.repeticao as 'repeticao',
                       grupo_exercicio.tempoIntervalo as 'tempoIntervalo'
                    FROM fichatreino
                INNER JOIN grupo
                    ON fichatreino.codFichaTreino = grupo.codFichaTreino
                INNER JOIN grupo_exercicio
                    ON grupo.codGrupo = grupo_exercicio.codGrupo
                INNER JOIN exercicio
                    ON grupo_exercicio.codExercicio = exercicio.codExercicio
                INNER JOIN musculo
                    ON exercicio.codMusculo = musculo.codMusculo
                WHERE fichatreino.codFichaTreino = $codFicha";
        $query = $this->db->query($sql);

        if($query) {
            return $query->result();
        } else {
            return false;
        }

    }

}
