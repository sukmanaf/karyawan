<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('jabatan_model','jab');
    }

	public function index()
	{
        $this->skin->skin('jabatan_list', null, true);
		
	}

	    public function get_data()
    {   
        
        $dataq = $this->jab->get_all();
        $data=[];
        foreach ($dataq as $key => $v) {
            $a= [$key+1,$v->jabatan_id,$v->jabatan,
                '
                <button onclick="lihat('.$v->jabatan_id.')" class="btn btn-primary btn-rounded-sm" >Lihat</button>
                <button onclick="edit('.$v->jabatan_id.')" class="btn btn-info btn-rounded-sm" >Ubah</button>
                <button onclick="hapus('.$v->jabatan_id.',\''.$v->jabatan.'\')" class="btn btn-danger btn-rounded-sm">Hapus</button>

                 '];
                 // <a href="'. site_url("user/delete/").$v->user_id.'" class="btn btn-danger btn-rounded-sm" style="padding:1%" onclick="javasciprt: return confirm(\'Anda Yakin Ingin Hapus Data Ini ?\')">Hapus</a>
            array_push($data, $a);
        }
        echo json_encode($data);
    }

    public function save()
    {
			$dup = $this->jab->cekDuplikasi($_POST);
			if ($dup > 0) {
				$ret = ['sts' => 0,
						'msg' => 'Data Sudah Ada'
						];
			}else{
				$ins = $this->jab->save($_POST);
				if ($ins) {
					$ret = ['sts' => 1,
							'msg' => 'Data Tersimpan'
							];
				}else{
					$ret = ['sts' => 0,
							'msg' => 'Data Gagal Simpan'
							];
				}
			}

			echo json_encode($ret);
    }
        public function edit()
    {
		
			$up = $this->jab->edit($_POST);
			
			if ($up) {
				$ret = ['sts' => 1,
						'msg' => 'Data Berubah'
						];
			}else{
				$ret = ['sts' => 0,
						'msg' => 'Data Gagal Diubah'
						];
			}
		

			echo json_encode($ret);
    }

    public function delete($id)
    {
    	$cek = $this->jab->cekKontrak($id);
    	
		if ($cek > 0) {
			$ret = ['sts' => 0,
					'msg' => 'Data Sudah Dalam Kontrak'
					];
		}else{
			$del = $this->jab->delete($id);

			if ($del) {
				$ret = ['sts' => 1,
						'msg' => 'Data Terhapus'
						];
			}else{
				$ret = ['sts' => 0,
						'msg' => 'Data Gagal Hapus'
						];
			}
		}

			echo json_encode($ret);
    	
    }

    public function getById($id)
    {
			$get = $this->jab->getById($id);

			if (!empty($get)) {
				$ret = ['sts' => 1,
						'data' => $get
						];
			}else{
				$ret = ['sts' => 0,
						'msg' => 'Data Tidak Ditemukan'
						];
			}

			echo json_encode($ret);
    	
    }

}

/* End of file Jabatan.php */
/* Location: ./application/modules/jabatan/controllers/Jabatan.php */