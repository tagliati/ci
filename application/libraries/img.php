<?
class Img {

	public function __construct()
	{
		$this->ci =& get_instance();
		$this->ci->load->library('upload');
	}

   	function do_upload($id)
	{
		$config['upload_path'] = './static/imagens/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
				$config['overwrite'] = true;
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['file_name'] = $id.".jpg";
        $config['quality'] = "100";
		$this->ci->upload->initialize($config);

		if ( ! $this->ci->upload->do_upload())
		{
		return	$error = array('error' => $this->ci->upload->display_errors());
		}
		else
		{
            return	$data = array('upload_data' => $this->ci->upload->data());

		}
	}

	function enviar($id=1){
		$imagem = $this->do_upload($id);
		print_r($imagem);

	}
	
	function crop(){
    	$targ_w = 198; 
        $targ_h = 95;
        $jpeg_quality = 90;
        $id = $this->input->post('id');
        $src = './static/viagens/'.$id.".jpg";
        $img_r = imagecreatefromjpeg($src);
        $dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
        imagecopyresampled($dst_r,$img_r,0,0,$this->input->post('x'),$this->input->post('y'),
        $targ_w,$targ_h,$this->input->post('w'),$this->input->post('h'));
       
	    imagejpeg($dst_r,$src,$jpeg_quality);
	    redirect("/adminviagem/editar/".$id);

    }


}
