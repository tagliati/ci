<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login {

    public function login_required($id)
    {
		if($id){
		}else{
			redirect(site_url('acessar'));
		}

    }
}

/* End of file Someclass.php */
