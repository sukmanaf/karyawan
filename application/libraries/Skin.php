<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skin
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
        // $this->load->model('m_main','main');
        $this->ci->load->model('Global_model');

	}


	public function dashboard($name,$val)
	{
		
   		$val['session']=$this->ci->session->userdata('user');



		
		$data['body']=$this->ci->load->view($name, $val, true);
		// echo $data['body'];exit();
		$this->ci->load->view('template', $data);
		// }
	}

	public function skin($name,$val)
	{
	
   		// $val['session']=$this->ci->session->userdata('user');
		$data['body']=$this->ci->load->view($name, $val, true);
		$this->ci->load->view('template/molli', $data);
	}




}

/* End of file Skin.php */
/* Location: ./application/libraries/Skin.php */
