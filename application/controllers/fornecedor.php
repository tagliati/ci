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

		$tpl['content'] = $this->load->view('cadastro_fornecedor','',true);
		$this->load->view('template',$tpl);
	}
}
