<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Preposto extends CI_Controller {
		public function __construct()
       {
            parent::__construct();
            // Your own constructor code
			$this->load->library('login');
			$this->login->login_required($this->session->userdata('id'));
			 }

	function novo(){
		$preposto = new ModelPreposto();
		$dados['preposto'] = $preposto;
		$tpl['content'] = $this->load->view('cadastro_preposto',$dados,true);
		$this->load->view('template',$tpl);
	}

	function editar($id){
		$preposto = new ModelPreposto();
		$preposto->where("id = ",$id);
		$dados['preposto'] = $preposto->get();	

		$tpl['content'] = $this->load->view('cadastro_preposto',$dados,true);
		$this->load->view('template',$tpl);
		echo $preposto->razao_social;
	}



	function listar(){

		$prepostos = new ModelPreposto();
		$dados['prepostos'] = $prepostos->get();

		$tpl['content'] = $this->load->view('lista_preposto',$dados,true);
		$this->load->view('template',$tpl);
	
	}

	function salvar(){
		$preposto = new ModelPreposto();
		if($this->input->post("id")){
			$preposto->id = $this->input->post("id");
		}
		$preposto->codigo = $this->input->post("codigo");
		$preposto->razao_social = $this->input->post("razao_social");
		$preposto->endereco = $this->input->post("endereco");
		$preposto->telefone = $this->input->post("telefone");
		$preposto->celular = $this->input->post("celular");
		$preposto->email = $this->input->post("email");
		$preposto->comissao = $this->input->post("comissao");
		if($preposto->save()){
			$this->session->set_flashdata('msg', array("tipo" => "sucesso","mensagem" => "Salvo com sucesso"));
			redirect("preposto/novo");
		}

	}
	function excluir($id){
		$preposto = new ModelPreposto();
		$preposto->where("id = ",$id);
		$preposto->get();
		if($preposto->delete()){
			$this->session->set_flashdata('msg', array("tipo" => "sucesso","mensagem" => "Excluído com sucesso"));
			redirect("preposto/listar");
		}
	
	}
	
}
