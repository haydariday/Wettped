<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct ()
	{
		parent ::__construct ();
		$this->load->model('Web_model'); 
	}
	
	public function index()
	{
		$this->load->view('NavbarPertama');
		$this->load->view('index');

	}

	public function login()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function membaca(){
		$this->load->view('membaca');
	}

	public function membuat_cerita(){
		$this->load->view('membuat_cerita');
	}
	public function halaman_cerita(){

		$this->load->view('NavbarHomepage');
		$this->load->view('halaman_cerita');
	}
	//User

	public function add(){
		$this->load->model("Web_model");
		$data['tipe'] = "Add";

		if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->Web_model->simpan($_POST);
			redirect("home");
		}

		$this->load->view("register",$data);
	}
}
