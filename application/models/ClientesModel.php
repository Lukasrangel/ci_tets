<?php

class ClientesModel extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function listarClientes(){
        $clientes = $this->db->get('clientes');

        return $clientes->result_array();
    }

    public function insert($data){
        $this->db->insert('clientes',$data);
    }
	
    public function getCliente($id){
        $cliente = $this->db->get_where('clientes', array('id'=>$id));
        return $cliente->row_array();
    }
}

?>