<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Preposto extends CI_Controller {
	function novo(){
		$tpl['content'] = $this->load->view('cadastro_preposto','',true);
		$this->load->view('template',$tpl);
	}
}
