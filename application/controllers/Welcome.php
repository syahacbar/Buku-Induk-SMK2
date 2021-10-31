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
		$this->load->view('cetakbukuinduk',$data);
	}
}
