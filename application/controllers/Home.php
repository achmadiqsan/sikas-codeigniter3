<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_m','Home');	
	}

	public function index()
	{
		// code untuk menampilkan semua data :
		$query = $this->Home->get();

		$data = array(
			'header' => 'SIKAS',
			'pesan1' => 'Selamat Datang Di Sistem Informasi Pengelolaan Kas Masjid Nurul - Iman',
			'pesan2' => 'Halaman Utama',
			'pesan3' => 'Pengelolaan Kas Masjid Nurul - Iman Gunung Jati',
			'total_masuk' => 0,
			'total_keluar' => 0,
			'total' => 0,
		);

		$data['home'] = $query->result();

		$this->load->view('_header', $data);
		$this->load->view('home', $data);
		$this->load->view('_footer');
	}

}
