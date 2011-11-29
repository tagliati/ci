<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$teste = new Teste();
		$this->load->library('img');
		$this->load->view('form');
        if(isset($_FILES['userfile']))
	    {
			$this->img->enviar(6);
		}
		
	}

	function salvarAdministradora(){
        
        $this->load->library('imagem');
            
		$this->load->view('form2');
        
        $testeId = $this->input->post('id');
        
            //$cadastrarAdministradora->save();
            
                   if(isset ($_FILES['logo'])){
                      print_r($this->imagem->uploadLogo(5));
                       print_r($_FILES);  exit (0);
									 }

        
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
