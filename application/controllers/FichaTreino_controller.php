<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FichaTreino_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    //METODO USADO PELA ENTIDADE ALUNO
    //BUSCA OS OBJETIVOS CADASTRADOS NO BANCO E CARREGA NO COMBO DE OBJETIVOS DO ALUNO
    public function buscaObjetivo() {

        $this->load->model('FichaTreino_model', 'model');

        $dadosObjetivo['descricao'] = $this->model->buscaObjetivo();

        if ($this->session->userdata('logado') && $this->session->userdata('codAluno')) {
            if ($dadosObjetivo) {
                $this->load->view('includes/painelAluno/html_header');
                $this->load->view('includes/painelAluno/menu');
                $this->load->view('view_avaliacaoAluno', $dadosObjetivo);
                $this->load->view('includes/painelAluno/html_footer');
            } else {
                echo "Não há registros no banco!";
            }
        } else {
            echo "Você não tem permissão para acessar está área!";
        }
    }

    //METODO USADO PELA ENTIDADE ALUNO
    //INSERI O OBJETIVO DO ALUNO
    public function inserirObjetivo() {

        $this->load->model('FichaTreino_model', 'model');

        $codAluno = $this->session->userdata('codAluno');
        $codObjetivoVerificar = $this->input->post('obj');
        $dados['codAluno'] = $codAluno;
        $dados['codObjetivoTipo'] = $codObjetivoVerificar;


        $codObjetivo = $this->model->verificaObjetivo($codAluno, $codObjetivoVerificar);
        $objetivo = $this->model->verificarSeExisteObjetivo($codAluno);
        $tempoUtil = $this->model->verificaTempoUtil($codAluno);

        if ($objetivo == true && $tempoUtil == false) {
            if ($dados['codObjetivoTipo'] != $codObjetivo) {
                if ($this->model->inserirObjetivo($dados)) {
                    $this->load->view('includes/painelAluno/html_header');
                    $this->load->view('includes/painelAluno/menu');
                    $this->load->view('view_novaAvaliacao');
                    $this->load->view('includes/painelAluno/html_footer');
                } else {
                    //Falha no momento de cadastro
                    $this->load->view('includes/painelAluno/html_header');
                    $this->load->view('includes/painelAluno/menu');
                    $this->load->view('mainAluno/erroCadastro');
                    $this->load->view('includes/painelAluno/html_footer');
                }
            } else {
                    // carrega tela informando que a pessoa já tem uma ficha/avaliação com esse objetivo, favor trocar!
                    $this->load->view('includes/painelAluno/html_header');
                    $this->load->view('includes/painelAluno/menu');
                    $this->load->view('mainAluno/fichaExistente');
                    $this->load->view('includes/painelAluno/html_footer');
            }
        } else if ($objetivo == true && $tempoUtil == true) {
                    // carrega tela informando que ainda tem uma ficha em uso
                    $this->load->view('includes/painelAluno/html_header');
                    $this->load->view('includes/painelAluno/menu');
                    $this->load->view('mainAluno/fichaEmUso');
                    $this->load->view('includes/painelAluno/html_footer');
        } else if ($objetivo == false && $tempoUtil == false) {
            if ($this->model->inserirObjetivo($dados)) {
                $this->load->view('includes/painelAluno/html_header');
                $this->load->view('includes/painelAluno/menu');
                $this->load->view('view_novaAvaliacao');
                $this->load->view('includes/painelAluno/html_footer');
            } else {
                    //Falha no momento de cadastro
                    $this->load->view('includes/painelAluno/html_header');
                    $this->load->view('includes/painelAluno/menu');
                    $this->load->view('mainAluno/erroCadastro');
                    $this->load->view('includes/painelAluno/html_footer');
            }
        }
    }

    public function verificarSeExisteObjetivo($codAluno) {
        $this->load->model('FichaTreino_model', 'model');

        $codObjetivo = $this->model->verificarSeExisteObjetivo($codAluno);

        return $codObjetivo;
    }

    //METODO USADO PELA ENTIDADE EDUCADOR
    //METODO QUE CARREGA A TELA PARA MONTAR A FICHA
    public function montarFicha() {

        $this->load->model('FichaTreino_model', 'model');

        $dadosObjetivo['descricao'] = $this->model->buscaObjetivo();

        if ($this->session->userdata('logado') && $this->session->userdata('codEducador')) {
            $this->load->view('includes/painelEducador/html_header');
            $this->load->view('includes/painelEducador/menu');
            $this->load->view('view_fichaTreino', $dadosObjetivo);
            $this->load->view('includes/painelEducador/html_footer');
        } else {
            redirect('Painel_controller/login');
        }
    }

    public function buscaExerciciosPorMusculo() {
        $codMusculo = $this->input->post('codMusculo');

        if ($codMusculo) {
            $this->load->model('FichaTreino_model', 'model');
            $exercicios = $this->model->buscaExerciciosPorMusculo($codMusculo);
            echo '<option value="0">Exercicios</option>';
            foreach ($exercicios as $linha) {
                echo '<option value="' . $linha->codExercicio . '">' . $linha->descricao . '</option>';
            }
        } else {
            echo '<option value="0">Exercicios</option>';
        }
    }

    //METODO USADO PELA ENTIDADE EDUCADOR
    public function inserirFicha() {

        $this->load->model('FichaTreino_model', 'model');

        if ($this->session->userdata('logado') && $this->session->userdata('codEducador')) {

            //Dados a serem gravados na tabela FichaTreino
            $dados['codEducador'] = $this->session->userdata('codEducador');
            $dados['descricao'] = $this->input->post('nomeFicha');
            $dados['codObjetivoTipo'] = $this->input->post('obj');
            $dados['tempoUtil'] = $this->input->post('tempoUtil');
            $dados['observacao'] = $this->input->post('observacao');


            $data['musculo'] = $this->model->buscaMusculo();
            $data['codFicha'] = $this->model->inserirFicha($dados);

            if ($data['codFicha']) {
                $this->load->view('includes/painelEducador/html_header');
                $this->load->view('includes/painelEducador/menu');
                $this->load->view('mainEducador/conteudoFicha', $data);
                $this->load->view('includes/painelEducador/html_footer');
            } else {
                echo "Erro ao incluir Ficha";
            }
        }
    }

    //METODO USADO PELA ENTIDADE EDUCADOR
    public function inserirGrupo() {

        $this->load->model('FichaTreino_model', 'model');

        if ($this->session->userdata('logado') && $this->session->userdata('codEducador')) {

            //Dados a serem gravados na tabela Grupo
            $dados['descricaoGrupo'] = $this->input->post('descricaoGrupo');
            $dados['codFichaTreino'] = $this->input->post('codFicha');

            $data['codGrupo'] = $this->model->inserirGrupo($dados);

            $array = json_decode(json_encode($data['codGrupo']), True);

            if ($array) {
                $this->inserirGrupoExercicio($array);
            } else {
                echo "Erro ao incluir Grupo";
            }
        }
    }

    //METODO USADO PELA ENTIDADE EDUCADOR
    public function inserirGrupoExercicio($data) {

        $this->load->model('FichaTreino_model', 'model');

        if ($this->session->userdata('logado') && $this->session->userdata('codEducador')) {

            foreach ($data as $codGrupo) {
                foreach ($codGrupo as $item) {
                    $array[] = $item;
                }
            }

            $dados['codExercicio'] = $this->input->post('codExercicio');
            $dados['serie'] = $this->input->post('series');
            $dados['repeticao'] = $this->input->post('repeticao');
            $dados['tempoIntervalo'] = $this->input->post('tempoIntervalo');

            if ($this->model->inserirGrupoExercicio($dados, $array)) {
                redirect('Educador_controller/minhasFichas');
            } else {
                echo "Falha ao cadastrar a ficha, verifique!";
            }
        }
    }

}
