<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
        $this->skin->skin('v_barang', null, true);
		
	}

}

/* End of file Barang.php */
/* Location: ./application/modules/barang/controller/Barang.php */