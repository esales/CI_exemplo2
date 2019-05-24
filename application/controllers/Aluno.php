<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

    public $aluno;

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('AlunoModel');
        $this->aluno = new AlunoModel;
    }

    public function index() {
        $data['data'] = $this->aluno->get_Aluno();
        $this->load->view('layout/cabecalho');
        $this->load->view('aluno/listar', $data);
        $this->load->view('layout/rodape');
    }

    public function mostrar($id) {
        $item = $this->aluno->pesquisar($id);
        $this->load->view('layout/cabecalho');
        $this->load->view('aluno/mostrar', array('item' => $item));
        $this->load->view('layout/rodape');
    }

    public function criar() {
        $this->load->view('layout/cabecalho');
        $this->load->view('aluno/criar');
        $this->load->view('layout/rodape');
    }

    public function inserir() {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('aluno/create'));
        } else {
            $this->aluno->inserir();
            redirect(base_url('aluno'));
        }
    }

    public function editar($id) {
        $item = $this->aluno->pesquisar($id);
        $this->load->view('layout/cabecalho');
        $this->load->view('aluno/editar', array('item' => $item));
        $this->load->view('layout/rodape');
    }

    public function atualizar($id) {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('aluno/edit/' . $id));
        } else {
            $this->aluno->atualizar($id);
            redirect(base_url('aluno'));
        }
    }

    public function excluir($id) {
        $item = $this->aluno->excluir($id);
        redirect(base_url('aluno'));
    }
}