<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_model extends CI_Model {

	public $table = 'jabatan';
    public $id = 'jabatan_id';
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
    	
    	$this->db->where('jabatan', $data['jabatan']);
        return $this->db->get($this->table)->num_rows();
    }
	
    public function cekKontrak($id)
    {
    	
    	$this->db->where('jabatan_id', $id);
        return $this->db->get('kontrak')->num_rows();
    }
	
    public function delete($id)
    {
    	
       	$this->db->where('jabatan_id', $id);
		return $this->db->delete($this->table);
    }
	
    public  function getById($id)
    {
       	$this->db->where('jabatan_id', $id);
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->row_array();
    }     


    public function edit($datas)
    {
    	$data = [
        			'jabatan' => $datas['jabatan']
				];

		$this->db->where('jabatan_id', $datas['jabatan_id']);
		return $this->db->update($this->table, $data);
    }
}

/* End of file jabatan_model.php */
/* Location: ./application/modules/jabatan/models/jabatan_model.php */