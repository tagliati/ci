<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fornecedor extends CI_Controller {
		public function __construct()
       {
            parent::__construct();
            // Your own constructor code
			$this->load->library('login');
			$this->login->login_required($this->session->userdata('id'));
			 }

	function novo(){
		$fornecedor = new ModelFornecedor();
		$dados['fornecedor'] = $fornecedor;
		$tpl['content'] = $this->load->view('cadastro_fornecedor',$dados,true);
		$this->load->view('template',$tpl);
	}

	function editar($id){
		$fornecedor = new ModelFornecedor();
		$fornecedor->where("id = ",$id);
		$dados['fornecedor'] = $fornecedor->get();	

		echo $fornecedor->razao_social;
		$tpl['content'] = $this->load->view('cadastro_fornecedor',$dados,true);
		$this->load->view('template',$tpl);
		echo $fornecedor->razao_social;
	}



	function listar(){

		$fornecedores = new ModelFornecedor();
		$dados['fornecedores'] = $fornecedores->get();

		$tpl['content'] = $this->load->view('lista_fornecedor',$dados,true);
		$this->load->view('template',$tpl);
	
	}

	function salvar(){
		$fornecedor = new ModelFornecedor();
		if($this->input->post("id")){
			$fornecedor->id = $this->input->post("id");
		}
		$fornecedor->codigo = $this->input->post("codigo");
		$fornecedor->razao_social = $this->input->post("razao_social");
		$fornecedor->endereco = $this->input->post("endereco");
		$fornecedor->telefone = $this->input->post("telefone");
		$fornecedor->celular = $this->input->post("celular");
		$fornecedor->email = $this->input->post("email");
		$fornecedor->comissao = $this->input->post("comissao");
		if($fornecedor->save()){
			$this->session->set_flashdata('msg', array("tipo" => "sucesso","mensagem" => "Salvo com sucesso"));
			redirect("fornecedor/novo");
		}

	}
	function excluir($id){
		$fornecedor = new ModelFornecedor();
		$fornecedor->where("id = ",$id);
		$fornecedor->get();
		if($fornecedor->delete()){
			$this->session->set_flashdata('msg', array("tipo" => "sucesso","mensagem" => "Excluído com sucesso"));
			redirect("fornecedor/listar");
		}
	
	}
	
}
