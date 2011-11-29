<?php

class Acessar extends CI_Controller {
	function index(){
		
		$tpl['content'] = "";
		$this->load->view('acessar',$tpl);
	}

	function logar(){
		$usuario = new User();
		$usuario->where("email",$this->input->post("email"));
		$usuario->where("senha",md5($this->input->post("senha")));
		if($usuario->count() == 1){
			
			$this->session->set_userdata('id',true);
			redirect(site_url("produto/novo"));
		}else{
			$this->session->set_flashdata('msg', 'Não foi possível efetuar login com as informações passadas');
			redirect(site_url("acessar"));
		}
	}

	function sair(){
		$this->session->unset_userdata('id');
		redirect(site_url("acessar"));
	}
}
