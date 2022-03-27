<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('pegawai_model','peg');
    }

	public function index()
	{
        $this->skin->skin('pegawai_list', null, true);
		
	}

	    public function get_data()
    {   
        
        $dataq = $this->peg->get_all();
        $data=[];
        foreach ($dataq as $key => $v) {
            $a= [$key+1,$v->nama,$v->nip,$v->alamat,
                '
                <button onclick="lihat('.$v->pegawai_id.')" class="btn btn-primary btn-rounded-sm" >Lihat</button>
                <button onclick="edit('.$v->pegawai_id.')" class="btn btn-info btn-rounded-sm" >Ubah</button>
                <button onclick="hapus('.$v->pegawai_id.',\''.$v->nama.'\')" class="btn btn-danger btn-rounded-sm">Hapus</button>

                 '];
                 // <a href="'. site_url("user/delete/").$v->user_id.'" class="btn btn-danger btn-rounded-sm" style="padding:1%" onclick="javasciprt: return confirm(\'Anda Yakin Ingin Hapus Data Ini ?\')">Hapus</a>
            array_push($data, $a);
        }
        echo json_encode($data);
    }

    public function save()
    {
    	
			$dup = $this->peg->cekDuplikasi($_POST);
			if ($dup > 0) {
				$ret = ['sts' => 0,
						'msg' => 'Data Sudah Ada'
						];
			}else{
				$ins = $this->peg->save($_POST);
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
		$up = $this->peg->edit($_POST);

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
    	$cek = $this->peg->cekKontrak($id);
    	
		if ($cek > 0) {
			$ret = ['sts' => 0,
					'msg' => 'Data Sudah Dalam Kontrak'
					];
		}else{
			$del = $this->peg->delete($id);

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
		$get = $this->peg->getById($id);

		
		if (!empty($get)) {
			$jab = $this->peg->getJabatan();


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
		$get = $this->peg->read($id);

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
		$get = $this->peg->getJabatan();

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


    public function upload()
    {

    	if ( isset($_FILES['csv'])) {
            $file = $_FILES['csv']['tmp_name'];

			// Medapatkan ekstensi file csv yang akan diimport.
			$ekstensi  = explode('.', $_FILES['csv']['name']);

			// Tampilkan peringatan jika submit tanpa memilih menambahkan file.
			if (empty($file)) {
				echo 'File tidak boleh kosong!';
			} else {
				// Validasi apakah file yang diupload benar-benar file csv.
				if (strtolower(end($ekstensi)) === 'csv' && $_FILES["csv"]["size"] > 0) {

					$i = 0;
					$handle = fopen($file, "r");
					$duplikat =[];
					$inserted =[];
					while (($row = fgetcsv($handle, 2048))) {
						$i++;
						if ($i == 1) continue;

						$exp= explode(';',$row[0]);
						$datas=[
								'nama'=> $exp[1],
								'nip'=> $exp[2],
								'alamat'=> $exp[3],
								];
						// Simpan data ke database.
						$dup = $this->peg->cekDuplikasi($datas);
						if ($dup > 0) {
							array_push($duplikat, $datas);
						}else{
							$ins = $this->peg->save($datas);
							$inserted++;
						}
					}

					if (!empty($duplikat)) {
						$str='';
						foreach ($duplikat as $key => $v) {
							$str.='<tr><td>'.$v['nama'].'<td><td>'.$v['nip'].'<td><td>'.$v['alamat'].'<td></tr>';
						}
						$ret = ['sts' => 2,
							'msg' => 'Ada Data Duplikat',
							'inserted' =>$inserted,
							'duplikat' =>$str
							];
					}else{
						$ret = ['sts' => 1,
							'msg' => 'Sukses Import ',
							'inserted' =>$inserted,
							'duplikat' =>$duplikat

							];
					}
					
					

				} else {
					$ret = ['sts' => 0,
							'msg' => 'Format Data Salah'
							];
				}

				echo json_encode($ret);
			}
        }

    }

}

/* End of file Pegawai.php */
/* Location: ./application/modules/pegawai/controllers/Pegawai.php */