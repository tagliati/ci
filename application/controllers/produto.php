<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produto extends CI_Controller {
	function novo(){

		$tpl['content'] = $this->load->view('cadastro_produto','',true);
		$this->load->view('template',$tpl);
	}
}
