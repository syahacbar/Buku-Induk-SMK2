<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('Pdf');
        $this->load->model('M_bukuinduk');
    }
    public function index()
	{
		$data['_view'] = "dashboard";
		$this->load->view('layout',$data);
	}
	public function data()
	{
		$data['datasiswa'] = $this->M_bukuinduk->get_all();
		$data['_view'] = "list";
		$this->load->view('layout',$data);
	}

	public function filtercetak()
	{
		$data['kelas'] = $this->M_bukuinduk->get_kelas();		
		$data['_view'] = "filtercetak";
		$this->load->view('layout',$data);
	}

	public function detail_group()
	{
		$kelas = $this->input->post('filterkelas');
		$data['allsiswa'] = $this->M_bukuinduk->get_all($kelas);
		$this->load->view('cetakbukuindukbyfilter',$data);		
	}

	public function detail($idsiswa)
	{
		$data['detail'] = $this->M_bukuinduk->get_by_id($idsiswa);
		//echo json_encode($this->M_bukuinduk->get_by_id($idsiswa));
		$this->load->view('cetakbukuinduk',$data);
	}

	public function add()
	{
		if(!empty($_POST))
		{
			$datasiswa = array(
				'id' => $this->input->post('nipd'),
				'nipd' => $this->input->post('nipd'),
				'nisn' => $this->input->post('nisn'),
				'nik' => $this->input->post('nik'),
				'namalengkap' => $this->input->post('namalengkap'),
				'namapanggilan' => $this->input->post('namapanggilan'),
				'jeniskelamin' => $this->input->post('jeniskelamin'),
				'ttl' => $this->input->post('ttl'),
				'agama' => $this->input->post('agama'),
				'kewarganegaraan' => $this->input->post('kewarganegaraan'),
				'anakke' => $this->input->post('anakke'),
				'sdrkandung' => $this->input->post('sdrkandung'),
				'sdrtiri' => $this->input->post('sdrtiri'),
				'sdrangkat' => $this->input->post('sdrangkat'),
				'anakyatim' => $this->input->post('anakyatim'),
				'bahasa' => $this->input->post('bahasa'),
			);

			$datatempattinggal = array(
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'jenis_tinggal' => $this->input->post('jenis_tinggal'),
				'jarak' => $this->input->post('jarak'),
				'datasiswa_id' => $this->input->post('nipd'),
			);

			$datakesehatan = array(
				'gol_darah' => $this->input->post('gol_darah'),
				'riwayat_sakit' => $this->input->post('riwayat_sakit'),
				'kelainan' => $this->input->post('kelainan'),
				'tinggi_berat' => $this->input->post('tinggi_berat'),
				'datasiswa_id' => $this->input->post('nipd'),
			);

			$datapendidikan = array(
				'lulus_dari' => $this->input->post('lulus_dari'),
				'tglno_sttb' => $this->input->post('tglno_sttb'),
				'lama_belajar' => $this->input->post('lama_belajar'),
				'pindah_dari' => $this->input->post('pindah_dari'),
				'alasan' => $this->input->post('alasan'),
				'kelas' => $this->input->post('kelas'),
				'progkeahlian' => $this->input->post('progkeahlian'),
				'kompkeahlian' => $this->input->post('kompkeahlian'),
				'tgl_terima' => $this->input->post('tgl_terima'),
				'datasiswa_id' => $this->input->post('nipd'),
			);

			$dataayah = array(
				'nama_ayah' => $this->input->post('nama_ayah'),
				'ttl_ayah' => $this->input->post('ttl_ayah'),
				'agama_ayah' => $this->input->post('agama_ayah'),
				'kewarganegaraan_ayah' => $this->input->post('kewarganegaraan_ayah'),
				'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
				'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
				'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
				'alamat_ayah' => $this->input->post('alamat_ayah'),
				'status_ayah' => $this->input->post('status_ayah'),
				'datasiswa_id' => $this->input->post('nipd'),
			);

			$dataibu = array(
				'nama_ibu' => $this->input->post('nama_ibu'),
				'ttl_ibu' => $this->input->post('ttl_ibu'),
				'agama_ibu' => $this->input->post('agama_ibu'),
				'kewarganegaraan_ibu' => $this->input->post('kewarganegaraan_ibu'),
				'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
				'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
				'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
				'alamat_ibu' => $this->input->post('alamat_ibu'),
				'status_ibu' => $this->input->post('status_ibu'),
				'datasiswa_id' => $this->input->post('nipd'),
			);

			$datawali = array(
				'nama_wali' => $this->input->post('nama_wali'),
				'ttl_wali' => $this->input->post('ttl_wali'),
				'agama_wali' => $this->input->post('agama_wali'),
				'kewarganegaraan_wali' => $this->input->post('kewarganegaraan_wali'),
				'pendidikan_wali' => $this->input->post('pendidikan_wali'),
				'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
				'penghasilan_wali' => $this->input->post('penghasilan_wali'),
				'alamat_wali' => $this->input->post('alamat_wali'),
				'datasiswa_id' => $this->input->post('nipd'),
			);

			$datahobi = array(
				'kesenian' => $this->input->post('kesenian'),
				'olahraga' => $this->input->post('olahraga'),
				'organisasi' => $this->input->post('organisasi'),
				'lain_lain' => $this->input->post('lain_lain'),
				'datasiswa_id' => $this->input->post('nipd'),
			);

			$dataperkembangan = array(
				'id' => NULL,
				'datasiswa_id' => $this->input->post('nipd'),
			);

			if($this->M_bukuinduk->add($datasiswa,'datasiswa')){
				echo json_encode(array('status'=>TRUE,'msg'=>'Insert data siswa berhasil'));
				//INSERT KE DATA TEMPAT TINGGAL
				if($this->M_bukuinduk->add($datatempattinggal,'datatempattinggal')){
					echo json_encode(array('status'=>TRUE,'msg'=>'Insert data tempat tinggal berhasil'));
				}
				else
				{
					echo json_encode(array('status'=>FALSE));
				}

				//INSERT KE DATA KESEHATAN
				if($this->M_bukuinduk->add($datakesehatan,'datakesehatan')){
					echo json_encode(array('status'=>TRUE,'msg'=>'Insert data Kesehatan berhasil'));
				}
				else
				{
					echo json_encode(array('status'=>FALSE));
				}

				//INSERT KE DATA PENDIDIKAN
				if($this->M_bukuinduk->add($datapendidikan,'datapendidikan')){
					echo json_encode(array('status'=>TRUE,'msg'=>'Insert data Pendidikan berhasil'));
				}
				else
				{
					echo json_encode(array('status'=>FALSE));
				}

				//INSERT KE DATA AYAH
				if($this->M_bukuinduk->add($dataayah,'dataayah')){
					echo json_encode(array('status'=>TRUE,'msg'=>'Insert data Ayah berhasil'));
				}
				else
				{
					echo json_encode(array('status'=>FALSE));
				}

				//INSERT KE DATA IBU
				if($this->M_bukuinduk->add($dataibu,'dataibu')){
					echo json_encode(array('status'=>TRUE,'msg'=>'Insert data Ibu berhasil'));
				}
				else
				{
					echo json_encode(array('status'=>FALSE));
				}

				//INSERT KE DATA WALI
				if($this->M_bukuinduk->add($datawali,'datawali')){
					echo json_encode(array('status'=>TRUE,'msg'=>'Insert data Wali berhasil'));
				}
				else
				{
					echo json_encode(array('status'=>FALSE));
				}

				//INSERT KE DATA HOBI
				if($this->M_bukuinduk->add($datahobi,'datahobi')){
					echo json_encode(array('status'=>TRUE,'msg'=>'Insert data Hobi berhasil'));
				}
				else
				{
					echo json_encode(array('status'=>FALSE));
				}

				//INSERT KE DATA HOBI
				if($this->M_bukuinduk->add($dataperkembangan,'dataperkembangan')){
					echo json_encode(array('status'=>TRUE,'msg'=>'Insert data Perkembangan berhasil'));
				}
				else
				{
					echo json_encode(array('status'=>FALSE));
				}
			}
			else
			{
				echo json_encode(array('status'=>FALSE));
			}
		} 
		else
		{
			redirect('welcome');
		}

	}

	public function edit()
	{
		$idsiswa = $this->input->post('nipd');
		$data['hasil'] = $this->M_bukuinduk->get_by_id($idsiswa);
		$this->load->view('editform',$data);
	}

	public function delete()
	{
		$idsiswa = $this->input->post('nipd');
		if($this->M_bukuinduk->delete($idsiswa))
		{
			echo json_encode(array('status'=>TRUE));

		}
		else
		{
			echo json_encode(array('status'=>FALSE));

		}
	}

	public function editsave()
	{
		$idsiswa = $this->input->post('nipd');
		// if(!empty($_POST))
		// {
			$datasiswa = array(
				'id' => $this->input->post('nipd'),
				'nipd' => $this->input->post('nipd'),
				'nisn' => $this->input->post('nisn'),
				'nik' => $this->input->post('nik'),
				'namalengkap' => $this->input->post('namalengkap'),
				'namapanggilan' => $this->input->post('namapanggilan'),
				'jeniskelamin' => $this->input->post('jeniskelamin'),
				'ttl' => $this->input->post('ttl'),
				'agama' => $this->input->post('agama'),
				'kewarganegaraan' => $this->input->post('kewarganegaraan'),
				'anakke' => $this->input->post('anakke'),
				'sdrkandung' => $this->input->post('sdrkandung'),
				'sdrtiri' => $this->input->post('sdrtiri'),
				'sdrangkat' => $this->input->post('sdrangkat'),
				'anakyatim' => $this->input->post('anakyatim'),
				'bahasa' => $this->input->post('bahasa'),
			);

			$datatempattinggal = array(
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'jenis_tinggal' => $this->input->post('jenis_tinggal'),
				'jarak' => $this->input->post('jarak'),
				'datasiswa_id' => $this->input->post('nipd'),
			);

			$datakesehatan = array(
				'gol_darah' => $this->input->post('gol_darah'),
				'riwayat_sakit' => $this->input->post('riwayat_sakit'),
				'kelainan' => $this->input->post('kelainan'),
				'tinggi_berat' => $this->input->post('tinggi_berat'),
				'datasiswa_id' => $this->input->post('nipd'),
			);

			$datapendidikan = array(
				'lulus_dari' => $this->input->post('lulus_dari'),
				'tglno_sttb' => $this->input->post('tglno_sttb'),
				'lama_belajar' => $this->input->post('lama_belajar'),
				'pindah_dari' => $this->input->post('pindah_dari'),
				'alasan' => $this->input->post('alasan'),
				'kelas' => $this->input->post('kelas'),
				'progkeahlian' => $this->input->post('progkeahlian'),
				'kompkeahlian' => $this->input->post('kompkeahlian'),
				'tgl_terima' => $this->input->post('tgl_terima'),
				'datasiswa_id' => $this->input->post('nipd'),
			);

			$dataayah = array(
				'nama_ayah' => $this->input->post('nama_ayah'),
				'ttl_ayah' => $this->input->post('ttl_ayah'),
				'agama_ayah' => $this->input->post('agama_ayah'),
				'kewarganegaraan_ayah' => $this->input->post('kewarganegaraan_ayah'),
				'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
				'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
				'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
				'alamat_ayah' => $this->input->post('alamat_ayah'),
				'status_ayah' => $this->input->post('status_ayah'),
				'datasiswa_id' => $this->input->post('nipd'),
			);

			$dataibu = array(
				'nama_ibu' => $this->input->post('nama_ibu'),
				'ttl_ibu' => $this->input->post('ttl_ibu'),
				'agama_ibu' => $this->input->post('agama_ibu'),
				'kewarganegaraan_ibu' => $this->input->post('kewarganegaraan_ibu'),
				'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
				'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
				'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
				'alamat_ibu' => $this->input->post('alamat_ibu'),
				'status_ibu' => $this->input->post('status_ibu'),
				'datasiswa_id' => $this->input->post('nipd'),
			);

			$datawali = array(
				'nama_wali' => $this->input->post('nama_wali'),
				'ttl_wali' => $this->input->post('ttl_wali'),
				'agama_wali' => $this->input->post('agama_wali'),
				'kewarganegaraan_wali' => $this->input->post('kewarganegaraan_wali'),
				'pendidikan_wali' => $this->input->post('pendidikan_wali'),
				'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
				'penghasilan_wali' => $this->input->post('penghasilan_wali'),
				'alamat_wali' => $this->input->post('alamat_wali'),
				'datasiswa_id' => $this->input->post('nipd'),
			);

			$datahobi = array(
				'kesenian' => $this->input->post('kesenian'),
				'olahraga' => $this->input->post('olahraga'),
				'organisasi' => $this->input->post('organisasi'),
				'lain_lain' => $this->input->post('lain_lain'),
				'datasiswa_id' => $this->input->post('nipd'),
			);

			$dataperkembangan = array(
				'id' => NULL,
				'datasiswa_id' => $this->input->post('nipd'),
			);

			//UPDATE DATA SISWA
			if($this->M_bukuinduk->edit($datasiswa,'datasiswa',$idsiswa)){
				echo json_encode(array('status'=>TRUE,'msg'=>'Update data siswa berhasil'));
			}
			else
			{
				echo json_encode(array('status'=>FALSE));
			}
			//UPDATE DATA TEMPAT TINGGAL
			if($this->M_bukuinduk->edit($datatempattinggal,'datatempattinggal',$idsiswa)){
				echo json_encode(array('status'=>TRUE,'msg'=>'Update data tempat tinggal berhasil'));
			}
			else
			{
				echo json_encode(array('status'=>FALSE));
			}

			//UPDATE DATA KESEHATAN
			if($this->M_bukuinduk->edit($datakesehatan,'datakesehatan',$idsiswa)){
				echo json_encode(array('status'=>TRUE,'msg'=>'Update data Kesehatan berhasil'));
			}
			else
			{
				echo json_encode(array('status'=>FALSE));
			}

			//UPDATE DATA PENDIDIKAN
			if($this->M_bukuinduk->edit($datapendidikan,'datapendidikan',$idsiswa)){
				echo json_encode(array('status'=>TRUE,'msg'=>'Update data Pendidikan berhasil'));
			}
			else
			{
				echo json_encode(array('status'=>FALSE));
			}

			//UPDATE DATA AYAH
			if($this->M_bukuinduk->edit($dataayah,'dataayah',$idsiswa)){
				echo json_encode(array('status'=>TRUE,'msg'=>'Update data Ayah berhasil'));
			}
			else
			{
				echo json_encode(array('status'=>FALSE));
			}

			//UPDATE DATA IBU
			if($this->M_bukuinduk->edit($dataibu,'dataibu',$idsiswa)){
				echo json_encode(array('status'=>TRUE,'msg'=>'Update data Ibu berhasil'));
			}
			else
			{
				echo json_encode(array('status'=>FALSE));
			}

			//UPDATE DATA WALI
			if($this->M_bukuinduk->edit($datawali,'datawali',$idsiswa)){
				echo json_encode(array('status'=>TRUE,'msg'=>'Update data Wali berhasil'));
			}
			else
			{
				echo json_encode(array('status'=>FALSE));
			}

			//UPDATE DATA HOBI
			if($this->M_bukuinduk->edit($datahobi,'datahobi',$idsiswa)){
				echo json_encode(array('status'=>TRUE,'msg'=>'Update data Hobi berhasil'));
			}
			else
			{
				echo json_encode(array('status'=>FALSE));
			}

			//UPDATE DATA HOBI
			if($this->M_bukuinduk->edit($dataperkembangan,'dataperkembangan',$idsiswa)){
				echo json_encode(array('status'=>TRUE,'msg'=>'Update data Perkembangan berhasil'));
			}
			else
			{
				echo json_encode(array('status'=>FALSE));
			}
			
		// } 
		// else
		// {
		// 	redirect('welcome');
		// }
	}
}
