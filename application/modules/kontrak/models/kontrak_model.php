<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontrak_model extends CI_Model {

	

	public $table = 'kontrak';
    public $id = 'kontrak_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function get_all()
    {
    	$this->db->select('kontrak.*, pegawai.nama');
    	$this->db->join('pegawai', 'pegawai.pegawai_id = kontrak.pegawai_id', 'left');
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
    	
       	$this->db->where('kontrak_id', $id);
		return $this->db->delete($this->table);
    }
	
      function getById($id)
    {
       	$this->db->where('kontrak_id', $id);
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->row_array();
    }

    public function read($id)
    {
       	$this->db->where('kontrak_id', $id);
       	$this->db->join('pegawai', 'kontrak.pegawai_id = pegawai.pegawai_id', 'left');
       	$this->db->join('jabatan', 'kontrak.jabatan_id = jabatan.jabatan_id', 'left');
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->row_array();
    }

    public function edit($datas)
    {
  
    	$data = [
        			'pegawai_id' => $datas['pegawai_id'],
        			'lama_kontrak' => $datas['lama_kontrak'],
        			'tgl_mulai' => $datas['tgl_mulai'],
        			'tgl_selesai' => $datas['tgl_selesai'],
        			'tgl_selesai' => $datas['tgl_selesai'],
        			'tgl_kontrak' => $datas['tgl_kontrak'],
        			'status' => $datas['status'],
        			'jabatan_id' => $datas['jabatan_id']

				];

		$this->db->where('kontrak_id', $datas['kontrak_id']);
		return $this->db->update($this->table, $data);
    }

	public function getJabatan()
    {
        return $this->db->get('jabatan')->result();
    }

    	public function getPegawai()
    {
        return $this->db->get('pegawai')->result();
    }

   


}

/* End of file kontrak_model.php */
/* Location: ./application/modules/kontrak/models/kontrak_model.php */