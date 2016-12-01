<?php

class Aluno_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function inserirEndereco($data) {

        if ($this->db->insert('enderecoAluno', $data)) {
            $id = $this->db->insert_id();
            return $id;
        }
    }

    public function inserirAluno($data) {
        if ($this->db->insert('aluno', $data)) {
            $id = $this->db->insert_id();
            return $id;
        }
    }

    public function buscarEndereco($codAluno) {
        $sql = "SELECT `enderecoaluno`.`cepAluno`, `enderecoaluno`.`ruaAluno`, `enderecoaluno`.`numeroEndAluno`,
                        `enderecoaluno`.`bairroAluno`, `enderecoaluno`.`cidadeAluno`, `enderecoaluno`.`estadoAluno`,
                        `enderecoaluno`.`codEnderecoAl`
                    FROM `enderecoaluno`
                INNER JOIN `aluno`
                    ON `enderecoaluno`.`codEnderecoAl` = `aluno`.`codEnderecoAl` 
                    WHERE `aluno`.`codAluno` = {$codAluno} ";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function atualizarEndereco($data, $codEnderecoAl) {
        $this->db->where('codEnderecoAl', $codEnderecoAl);
        return $this->db->update('enderecoaluno', $data);
    }

    public function buscarDados($codAluno){
        $sql = "SELECT codAluno, nomeAluno, sobrenomeAluno, sexoAluno, CPF, RG, dataNascimento
                    FROM aluno
                    WHERE codAluno = $codAluno";
        $query = $this->db->query($sql);

        return $query->result();
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

    public function buscaAvaliacao($codAluno) {
        $sql = "SELECT `circunferenciaTricepsDireitoContraido`, `circunferenciaTricepsDireitoAlongado`,     `circunferenciaTricepsEsquerdoContraido`,
                        `circunferenciaTricepsEsquerdoAlongado`, `circunferenciaBicepsDireitoContraido`, `circunferenciaBicepsDireitoAlongado`,
                        `circunferenciaBicepsEsquerdoContraido`, `circunferenciaBicepsEsquerdoAlongado`, `circunferenciaPeito`,
                        `circunferenciaCoxaDireita`, `circunferenciaCoxaEsquerda`, `circunferenciaPanturrilhaDireita`, 
                        `circunferenciaPanturrilhaEsquerda`, `circunferenciaGluteo`, `peso`, 
                        `dataAvaliacao`, `altura`, `imc` 
                        FROM `avaliacao` WHERE `codAluno` = '{$codAluno}' ";

        $query = $this->db->query($sql);

        if ($query) {
            return $query->result();
        } else {
            return false;
        }

    }

    //Insert da verificação
    public function inseriNovaAvaliacao($data) {
        if ($this->db->insert('avaliacao', $data)) {
            return true;
        } else {
            return false;
        }
    }


    public function selecionaUltimaAvaliacao($codAluno) {
        $sql = "SELECT `circunferenciaTricepsDireitoContraido`, codAvaliacao `circunferenciaTricepsDireitoAlongado`,     `circunferenciaTricepsEsquerdoContraido`,
                        `circunferenciaTricepsEsquerdoAlongado`, `circunferenciaBicepsDireitoContraido`, `circunferenciaBicepsDireitoAlongado`,
                        `circunferenciaBicepsEsquerdoContraido`, `circunferenciaBicepsEsquerdoAlongado`, `circunferenciaPeito`,
                        `circunferenciaCoxaDireita`, `circunferenciaCoxaEsquerda`, `circunferenciaPanturrilhaDireita`, 
                        `circunferenciaPanturrilhaEsquerda`, `circunferenciaGluteo`, `peso`, 
                        `dataAvaliacao`, `altura`, `imc` 
                        FROM `avaliacao` WHERE `codAluno` = '{$codAluno}' AND ORDER BY codAvaliacao DESC LIMIT 1 " ;

        $query = $this->db->query($sql);

        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function transformaArray($data) {
        return $data;
    }

}
