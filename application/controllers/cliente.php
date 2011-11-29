<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Controller {
	function novo(){

		$tpl['content'] = $this->load->view('cadastrocliente','',true);
		$this->load->view('template',$tpl);
	}
}
