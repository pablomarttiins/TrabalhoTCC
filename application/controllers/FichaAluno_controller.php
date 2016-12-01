<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FichaAluno_controller extends CI_Controller {
     //Relaciona a ficha com o aluno
    public function relacionaFichaComAluno($codFichaTreino = null) {
        $this->load->model('AvaliacaoAluno_model', 'model');
            

        //Pega o codigo da ficha de treino para salvar na tabela fichaTreino_aluno, junto com o codigo do aluno
        $data['codFichaTreino'] = $codFichaTreino;
        $data['codAluno'] = $this->session->userdata('codAluno');
        $data['tempoUtil'] = $this->model->selecionaTempoUtil($codFichaTreino);

        if($this->model->relacionaFichaComAluno($data)) {
                $dados['msg'] = "Booa maromba, a ficha foi vinculada com sucesso, agora borá ficar grandão. Fuaark!!";
                $this->load->view('includes/painelAluno/html_header');
                $this->load->view('includes/painelAluno/menu');
                $this->load->view('includes/msg_sucesso', $dados);
                $this->load->view('includes/painelAluno/html_footer');
        }
    }

}