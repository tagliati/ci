<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Controller {
		public function __construct()
       {
            parent::__construct();
            // Your own constructor code
			$this->load->library('login');
			$this->login->login_required($this->session->userdata('id'));
			 }

	function novo(){
		$cliente = new ModelCliente();
		$dados['cliente'] = $cliente;
		$tpl['content'] = $this->load->view('cadastrocliente',$dados,true);
		$this->load->view('template',$tpl);
	}

	function editar($id){
		$cliente = new ModelCliente();
		$cliente->where("id = ",$id);
		$dados['cliente'] = $cliente->get();	

		echo $cliente->razao_social;
		$tpl['content'] = $this->load->view('cadastrocliente',$dados,true);
		$this->load->view('template',$tpl);
		echo $cliente->razao_social;
	}



	function listar(){

		$clientes = new ModelCliente();
		$dados['clientes'] = $clientes->get();

		$tpl['content'] = $this->load->view('listacliente',$dados,true);
		$this->load->view('template',$tpl);
	
	}

	function salvar(){
		$cliente = new ModelCliente();
		if($this->input->post("id")){
			$cliente->id = $this->input->post("id");
		}
		$cliente->tipo = $this->input->post("tipo");
		$cliente->razao_social = $this->input->post("razao_social");
		$cliente->cnpj = $this->input->post("cnpj");
		$cliente->endereco = $this->input->post("enderco");
		$cliente->telefone = $this->input->post("telefone");
		$cliente->celular = $this->input->post("celular");
		$cliente->email = $this->input->post("email");

		if($cliente->save()){
			$this->session->set_flashdata('msg', array("tipo" => "sucesso","mensagem" => "Salvo com sucesso"));
			redirect("cliente/novo");
		}

	}
	function excluir($id){
		$cliente = new ModelCliente();
		$cliente->where("id = ",$id);
		$cliente->get();
		if($cliente->delete()){
			$this->session->set_flashdata('msg', array("tipo" => "sucesso","mensagem" => "Excluído com sucesso"));
			redirect("cliente/listar");
		}
	
	}
	
}
