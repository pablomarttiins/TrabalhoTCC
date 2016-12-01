<?php

class FichaTreino_model extends CI_Model {

    public function buscaObjetivo() {
        $this->db->select('*');
        return $this->db->get('objetivotipo')->result();
    }

    public function inserirObjetivo($data) {
        if ($this->db->insert('aluno_objetivotipo', $data)) {
            return true;
        } else {
            return "Erro ao cadastrar, verifique! ";
        }
    }

    public function verificaObjetivo($codAluno, $codObjetivoVerificar) {
        $sql = "SELECT codObjetivoTipo
                    FROM aluno_objetivotipo
                    WHERE codAluno = '{$codAluno}' AND codObjetivoTipo = '{$codObjetivoVerificar}' ";
        $query = $this->db->query($sql);
        $retorno = $query->result();

        if ($retorno) {
            return $retorno[0]->codObjetivoTipo;
        } else {
            return false;
        }
    }

    public function verificarSeExisteObjetivo($codAluno) {
        $sql = "SELECT codObjetivoTipo
                    FROM aluno_objetivotipo
                    WHERE codAluno = '{$codAluno}'";
        $query = $this->db->query($sql);
        $retorno = $query->result();

        if ($retorno) {
            return true;
        } else {
            return false;
        }
    }

    public function verificaTempoUtil($codAluno) {
        $sql = "SELECT fichatreino_aluno.tempoUtil
                FROM fichatreino_aluno
                where fichatreino_aluno.codAluno = {$codAluno}";
        $query = $this->db->query($sql);
        $retorno = $query->result();

        if ($retorno) {
            return $retorno[0]->tempoUtil;
        } else {
            return false;
        }
    }

    public function inserirFicha($data) {
        if ($this->db->insert('fichatreino', $data)) {
            $cod = $this->db->insert_id();
            return $cod;
        } else {
            return false;
        }
    }

    public function inserirGrupo($data) {
        $sql = "INSERT INTO grupo (descricaoGrupo, codFichaTreino) VALUES ";

        $values = Array();
        for ($i = 0; $i < count($data['descricaoGrupo']); $i++) {
            $values[] = "('" . $data['descricaoGrupo'][$i] . "',
					'" . $data['codFichaTreino'] . "')";
        }

        $codFichaTreino = $data['codFichaTreino'];

        $sql .= implode(',', $values);
        //$this->db->insert('grupo', $sql);

        if ($this->db->query($sql)) {

            //SELECIONA OS ULTIMOS GRUPOS INSERIDOS
            $sql = "SELECT codGrupo FROM grupo ORDER BY codGrupo DESC limit {$i}"; //COLOCAR CLAUSULA WHERE
            $query = $this->db->query($sql)->result();

            return $query;
        }
    }

    public function buscaMusculo() {
        $this->db->select('*');
        return $this->db->get('musculo')->result();
    }

    public function inserirExercicio($data) {
        if ($this->db->insert('exercicio', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function buscaExerciciosPorMusculo($codMusculo) {
        $this->db->where('codMusculo', $codMusculo);
        $this->db->order_by('descricao', 'asc');
        $exercicios = $this->db->get('exercicio');

        if ($exercicios->num_rows() > 0) {
            return $exercicios->result();
        }
    }

    public function buscaGrupos() {
        $this->db->select('*');
        return $this->db->get('grupo')->result();
    }

    public function inserirGrupoExercicio($data, $codGrupo) {

        //MONTA A PRIMEIRA PARTE DA QUERY SQL
        $sql = "INSERT INTO grupo_exercicio (codGrupo, codExercicio, serie, repeticao, tempoIntervalo) VALUES ";

        //INVERTE A ORDEM DO ARRAY PARA PODER ASSOCIAR OS GRUPOS COM OS EXERCICIOS
        $codGrupo = array_reverse($codGrupo);

        //MONTA O RESTANTE DA QUERY SQL (VALUES)
        $values = Array();
        for ($i = 0; $i < count($data['codExercicio']); $i++) {
            $values[] = "('" . $codGrupo[$i] . "',
                          '" . $data['codExercicio'][$i] . "',
                              '" . $data['serie'][$i] . "',
                                  '" . $data['repeticao'][$i] . "',
                                        '" . $data['tempoIntervalo'][$i] . "')";
        }

        $sql .= implode(',', $values);

        //VERIFICA SE CADASTROU OS GRUPOS E EXERCICIOS, CASO SIM, RETORNA TRUE, CASO NÃO, RETORNA FALSE
        if ($this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

}
