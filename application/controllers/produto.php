<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produto extends CI_Controller {
		public function __construct()
       {
            parent::__construct();
            // Your own constructor code
			$this->load->library('login');
			$this->login->login_required($this->session->userdata('id'));
			 }

	function novo(){
		$produto = new ModelProduto();
		$dados['produto'] = $produto;
		$tpl['content'] = $this->load->view('cadastro_produto',$dados,true);
		$this->load->view('template',$tpl);
	}

	function editar($id){
		$produto = new ModelProduto();
		$produto->where("id = ",$id);
		$dados['produto'] = $produto->get();	

		echo $produto->razao_social;
		$tpl['content'] = $this->load->view('cadastro_produto',$dados,true);
		$this->load->view('template',$tpl);
		echo $produto->razao_social;
	}



	function listar(){

		$produtos = new ModelProduto();
		$dados['produtos'] = $produtos->get();

		$tpl['content'] = $this->load->view('lista_produto',$dados,true);
		$this->load->view('template',$tpl);
	
	}

	function salvar(){
		$produto = new ModelProduto();
		if($this->input->post("id")){
			$produto->id = $this->input->post("id");
		}
		$produto->tipo = $this->input->post("tipo");
		$produto->razao_social = $this->input->post("razao_social");
		$produto->cnpj = $this->input->post("cnpj");
		$produto->endereco = $this->input->post("enderco");
		$produto->telefone = $this->input->post("telefone");
		$produto->celular = $this->input->post("celular");
		$produto->email = $this->input->post("email");

		if($produto->save()){
			$this->session->set_flashdata('msg', array("tipo" => "sucesso","mensagem" => "Salvo com sucesso"));
			redirect("produto/novo");
		}

	}
	function excluir($id){
		$produto = new ModelProduto();
		$produto->where("id = ",$id);
		$produto->get();
		if($produto->delete()){
			$this->session->set_flashdata('msg', array("tipo" => "sucesso","mensagem" => "Excluído com sucesso"));
			redirect("produto/listar");
		}
	
	}
	
}
