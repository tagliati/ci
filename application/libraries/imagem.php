<?php 
class imagem extends CI_Controller {

public function __construct()
{
$this->ci =& get_instance();
$this->ci->load->library('upload');
}

    function uploadLogo($id)
{
$config['upload_path'] = './static/img/logo/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size'] = '1000';
$config['overwrite'] = true;
$config['max_width']  = '1024';
$config['max_height']  = '768';
$config['file_name'] = $id.".jpg";
                $config['quality'] = "100";
$this->ci->upload->initialize($config);

if ( ! $this->ci->upload->do_upload())
{
                    return $error = array('error' => $this->ci->upload->display_errors());
}
else
{
            return $data = array('upload_data' => $this->ci->upload->data());

}
}

/*function enviar($id=1){
$imagem = $this->do_upload($id);
print_r($imagem);

}*/
}
