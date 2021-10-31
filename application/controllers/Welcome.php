<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_bukuinduk');
    }

	public function index()
	{
		$data['datasiswa'] = $this->M_bukuinduk->get_all();
		$data['_view'] = "list";
		$this->load->view('layout',$data);
	}

	public function detail($idsiswa)
	{
		$data['detail'] = $this->M_bukuinduk->get_by_id($idsiswa);
		$this->load->view('bukuinduk',$data);
	}
}
