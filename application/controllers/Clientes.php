<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('ClientesModel');
    }

	public function index()
	{
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if($this->form_validation->run()){
            $data = ['nome'=>$this->input->post('nome'), 'email'=>$this->input->post('email'), 'slug'=>$this->input->post('nome')];
            $this->ClientesModel->insert($data);
        }
        $data['clientes'] = $this->ClientesModel->listarClientes();
		$this->load->view('clientes',$data);
	}

    public function getCliente($id){
        $cliente = $this->ClientesModel->getCliente($id);
        $info['nome'] = $cliente['nome'];
        $info['email'] = $cliente['email'];
        $this->load->view('cliente_single',$info);
    }
}
