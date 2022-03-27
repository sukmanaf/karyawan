<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {



	public $table = 'pegawai';
    public $id = 'pegawai_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    public function save($data)
    {
    	return $this->db->insert($this->table, $data);	
    }

    public function cekDuplikasi($data='')
    {
    	
    	$this->db->where('nama', $data['nama']);
        return $this->db->get($this->table)->num_rows();
    }
	
    public function delete($id)
    {
    	
       	$this->db->where('pegawai_id', $id);
		return $this->db->delete($this->table);
    }
	
      function getById($id)
    {
       	$this->db->where('pegawai_id', $id);
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->row_array();
    }

     public function read($id)
    {
       	$this->db->where('pegawai_id', $id);
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->row_array();
    }

    public function edit($datas)
    {
  
    	$data = [
        			'nama' => $datas['nama'],
        			'nip' => $datas['nip'],
        			'alamat' => $datas['alamat']
				];

		$this->db->where('pegawai_id', $datas['pegawai_id']);
		return $this->db->update($this->table, $data);
    }

	public function getJabatan()
    {
        return $this->db->get('jabatan')->result();
    }


    public function cekKontrak($id)
    {
    	
    	$this->db->where('pegawai_id', $id);
        return $this->db->get('kontrak')->num_rows();
    }
	

}

/* End of file pegawai_mode.php */
/* Location: ./application/modules/pegawai/models/pegawai_mode.php */