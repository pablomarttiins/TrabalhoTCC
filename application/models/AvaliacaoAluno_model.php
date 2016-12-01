<?php

class AvaliacaoAluno_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function inserirAvaliacao($data) {
        if ($this->db->insert('avaliacao', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function buscarSexo($codAluno) {
        $sql = "SELECT `sexoAluno` FROM `aluno` WHERE `codAluno` = '{$codAluno}'";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function buscaObjetivoAluno($codAluno) {
        $sql = "SELECT `aluno_objetivotipo`.`codObjetivoTipo`, `objetivotipo`.`descricao` 
                    FROM `aluno_objetivotipo`
                    INNER JOIN `objetivotipo`
                    ON `aluno_objetivotipo`.`codObjetivoTipo` = `objetivotipo`.`codObjetivoTipo`
                    WHERE `codAluno` = '{$codAluno}'";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function buscaFichaTreino($codObjetivo) {
        $sql = "SELECT `codFichaTreino` FROM `fichaTreino` WHERE `codObjetivoTipo` = '{$codObjetivo}'";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function relacionaFichaComAluno($data) {
        if ($this->db->insert('fichaTreino_aluno', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function buscaObjetivoAlunoFicha($codAluno) {
        $sql = "SELECT `codObjetivoTipo` 
                    FROM `aluno_objetivotipo`
                    WHERE `codAluno` = '{$codAluno}'";
        $query = $this->db->query($sql);
        $retorno = $query->result();

        return $retorno[0]->codObjetivoTipo;
    }

    public function buscarTodasFichas($codObjetivo) {

        $sql = "SELECT `fichatreino`.`codFichaTreino`, `fichatreino`.`descricao` as 'descricaoFicha', 
                        `fichatreino`.`tempoUtil` as 'tempoUtilFicha', `educadorfisico`.`nomeEducador`, `objetivotipo`.`descricao` as 'descricaoObjetivo'
                    FROM `fichatreino`
                    INNER JOIN `educadorfisico`
                    ON `fichatreino`.`codEducador` = `educadorfisico`.`codEducador`
                    INNER JOIN `objetivotipo`
                    ON `fichatreino`.`codObjetivoTipo` = `objetivotipo`.`codObjetivoTipo`
                    WHERE `fichatreino`.`fichaFinalizada` = 1 AND fichatreino.codObjetivoTipo = {$codObjetivo}";


        $query = $this->db->query($sql);
        return $query->result();
    }

    public function minhasFichas($codAluno) {
        $sql = "SELECT `fichatreino`.`descricao` as 'descricaoFicha', fichatreino.codFichaTreino,
                        `fichatreino`.`tempoUtil` as 'tempoUtilFicha', `educadorfisico`.`nomeEducador`, 
                        `objetivotipo`.`descricao` as 'descricaoObjetivo', `fichatreino`.`observacao`
                    FROM `fichatreino`
                INNER JOIN `educadorfisico`
                    ON `fichatreino`.`codEducador` = `educadorfisico`.`codEducador`
                INNER JOIN `objetivotipo`
                    ON `fichatreino`.`codObjetivoTipo` = `objetivotipo`.`codObjetivoTipo`
                INNER JOIN `fichatreino_aluno`
                    ON `fichatreino`.`codFichaTreino` = `fichatreino_aluno`.`codFichaTreino`
                WHERE `fichatreino_aluno`.`codAluno` = '{$codAluno}'";

        $query = $this->db->query($sql);
        return $query->result();
    }

    //Método usado quando o aluno já vinculou a ficha
    public function fichaCompleta($codAluno, $codFichaTreino) {
        $sql = "SELECT fichatreino.descricao,
                       fichatreino.codFichaTreino,
                       grupo.descricaoGrupo as 'grupo',
                       exercicio.descricao as 'descricaoExercicio',
                       musculo.descricao as 'nomeMusculo',
                       grupo_exercicio.serie as 'serie',
                       grupo_exercicio.repeticao as 'repeticao',
                       grupo_exercicio.tempoIntervalo as 'tempoIntervalo'
                    FROM fichatreino
                INNER JOIN fichatreino_aluno
                    ON fichatreino.codFichaTreino = fichatreino_aluno.codFichaTreino
                INNER JOIN grupo
                    ON fichatreino.codFichaTreino = grupo.codFichaTreino
                INNER JOIN grupo_exercicio
                    ON grupo.codGrupo = grupo_exercicio.codGrupo
                INNER JOIN exercicio
                    ON grupo_exercicio.codExercicio = exercicio.codExercicio
                INNER JOIN musculo
                    ON exercicio.codMusculo = musculo.codMusculo
                WHERE fichatreino_aluno.codAluno = '{$codAluno}' AND fichatreino.codFichaTreino = '{$codFichaTreino}'";
        $query = $this->db->query($sql);

        if($query) {
            return $query->result();
        } else {
            return false;
        }

    }

    public function expandirFicha($codFichaTreino) {
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
                WHERE fichatreino.codFichaTreino = $codFichaTreino";
        $query = $this->db->query($sql);
        
        if($query) {
            return $query->result();
        } else {
            return false;
        }

    }

    public function minhasAvaliacoes($codAluno) {
        $sql = "SELECT `circunferenciaTricepsDireitoContraido`, `circunferenciaTricepsDireitoAlongado`, `circunferenciaTricepsEsquerdoContraido`,
                        `circunferenciaTricepsEsquerdoAlongado`, `circunferenciaBicepsDireitoContraido`, `circunferenciaBicepsDireitoAlongado`,
                        `circunferenciaBicepsEsquerdoContraido`, `circunferenciaBicepsEsquerdoAlongado`, `circunferenciaPeito`,
                        `circunferenciaCoxaDireita`, `circunferenciaCoxaEsquerda`, `circunferenciaPanturrilhaDireita`, 
                        `circunferenciaPanturrilhaEsquerda`, `circunferenciaGluteo`, `peso`, 
                        `dataAvaliacao`, `altura`, `imc` 
                        FROM `avaliacao` WHERE `codAluno` = '{$codAluno}' ";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function selecionaTempoUtil($codFichaTreino) {
        $sql = "SELECT tempoUtil
                    FROM fichatreino
                WHERE codFichaTreino = '{$codFichaTreino}' ";
        $query = $this->db->query($sql);
        $retorno = $query->result();

        if ($retorno) {
            return $retorno[0]->tempoUtil;
        } else {
            return false;
        }
    }

}
