<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontrak extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('kontrak_model','kon');
    }

	public function index()
	{
        $this->skin->skin('kontrak_list', null, true);
		
	}

	    public function get_data()
    {   
        
        $dataq = $this->kon->get_all();
        $data=[];
        foreach ($dataq as $key => $v) {
            $a= [$key+1,$v->nama,$v->lama_kontrak,$v->tgl_mulai,$v->tgl_selesai,$v->status,
                '
                <button onclick="lihat('.$v->kontrak_id.')" class="btn btn-primary btn-rounded-sm" >Lihat</button>
                <button onclick="edit('.$v->kontrak_id.')" class="btn btn-info btn-rounded-sm" >Ubah</button>
                <button onclick="hapus('.$v->kontrak_id.',\''.$v->nama.'\')" class="btn btn-danger btn-rounded-sm">Hapus</button>

                 '];
               
            array_push($data, $a);
        }
        echo json_encode($data);
    }

    public function save()
    {


		$ins = $this->kon->save($_POST);
		if ($ins) {
			$ret = ['sts' => 1,
					'msg' => 'Data Tersimpan'
					];
		}else{
			$ret = ['sts' => 0,
					'msg' => 'Data Gagal Simpan'
					];
		}

		echo json_encode($ret);
    }
        public function edit()
    {
		$up = $this->kon->edit($_POST);
		
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
		$del = $this->kon->delete($id);

		if ($del) {
			$ret = ['sts' => 1,
					'msg' => 'Data Terhapus'
					];
		}else{
			$ret = ['sts' => 0,
					'msg' => 'Data Gagal Hapus'
					];
		}

		echo json_encode($ret);
    	
    }

    public function getById($id)
    {
		$get = $this->kon->getById($id);
		
		if (!empty($get)) {
			$jab = $this->kon->getPegawai();
			$str = '<option value="">Pilih Pegawai</option>';

			foreach ($jab as $k => $v) {
				$selected = $v->pegawai_id==$get['pegawai_id']? 'selected': '';
				$str.='<option '.$selected.' value="'.$v->pegawai_id.'">'.$v->nama.'</option>';
			}

			$get['select_pegawai']=$str;

			$str = '<option value="">Pilih Jabatan</option>';

			foreach ($jab as $k => $v) {
				$selected = $v->jabatan_id==$get['jabatan_id']? 'selected': '';
				$str.='<option '.$selected.' value="'.$v->jabatan_id.'">'.$v->jabatan.'</option>';
			}

			$get['select_jabatan']=$str;

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


    public function read($id)
    {
		$get = $this->kon->read($id);
		$get['tgl_kontrak'] = tanggal_indonesia($get['tgl_kontrak']);
		$get['tgl_mulai'] = tanggal_indonesia($get['tgl_mulai']);
		$get['tgl_selesai'] = tanggal_indonesia($get['tgl_selesai']);

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
    	
    public function getJabatan()
    {
		$get = $this->kon->getJabatan();

		if (!empty($get)) {
			$str = '<option value="">Pilih Jabatan</option>';
			foreach ($get as $k => $v) {
				$str.='<option value="'.$v->jabatan_id.'">'.$v->jabatan.'</option>';
			}
			$ret = ['sts' => 1,
					'data' => $str
					];
		}else{
			$ret = ['sts' => 0,
					'msg' => 'Data Tidak Ditemukan',
					'data' => array()
					];
		}

		echo json_encode($ret);
    	
    }    	
    public function getPegawai()
    {
		$get = $this->kon->getPegawai();

		if (!empty($get)) {
			$str = '<option value="">Pilih Pegawai</option>';
			foreach ($get as $k => $v) {
				$str.='<option value="'.$v->pegawai_id.'">'.$v->nama.'</option>';
			}
			$ret = ['sts' => 1,
					'data' => $str
					];
		}else{
			$ret = ['sts' => 0,
					'msg' => 'Data Tidak Ditemukan',
					'data' => array()
					];
		}


		echo json_encode($ret);
    	
    }

   

}

/* End of file Kontrak.php */
/* Location: ./application/modules/kontrak/controllers/Kontrak.php */