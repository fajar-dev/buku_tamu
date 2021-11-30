<?php
class Page extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_page');
	}
	
	public function index(){
		$where = array('id' => 1);
		$data['row'] = $this->Model_page->detail($where,'data_toko')->row();
		$data['hasil']= $this->Model_page->tampil('data_tamu')->result();
    $this->load->view('home', $data);
	} 

	public function tambah()
	{
		$nama = $_POST['nama'];
		$hp = $_POST['hp'];
		$alamat= $_POST['alamat'];
		$pesan = $_POST['pesan'];
		$data = array(
			'nama_tamu'=>$nama,
			'alamat_tamu'=>$alamat,
			'no_hp_tamu'=>$hp,
			'tujuan_tamu'=>$pesan,
			);
		$this->Model_page->tambah('data_tamu',$data);
		echo $this->session->set_flashdata('msg','pesan');
		redirect();
	}

}