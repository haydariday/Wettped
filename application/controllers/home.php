<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct ()
	{
		parent ::__construct ();
		$this->load->model('Web_model');
		$this->load->library('form_validation');
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
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('register');
        } else {
			$this->Web_model->create_user();
			redirect('home/login');
		}
	}

	public function membaca(){
		$this->load->view('membaca');
	}

	public function membuat_cerita(){
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('story', 'Story', 'required');
		
		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('membuat_cerita');
        } else {
			$this->Web_model->create_story();
			redirect('home/halaman_cerita');
		}
	}
	public function halaman_cerita(){

		$this->load->view('NavbarHomepage');
		$this->load->view('halaman_cerita');
	}

	//USER CONTROLLERS
	
	public function add_user(){
		$this->load->model("Web_model");
		$home['tipe'] = "Add";

		if(isset($_POST['tombol_submit'])){
			//proses create_user dilakukan
			$this->Web_model->create_user($_POST);
			redirect("home");
		}

		$this->load->view("login",$home);
	}

	public function edit_user($id){
		$this->load->model("Web_model");
		$home['tipe'] = "Edit";
		$home['default'] = $this->Web_model->get_default_user($id);

		if(isset($_POST['tombol_submit'])){
			$this->Web_model->update_user($_POST, $id);
			redirect("home");
		}

		$this->load->view("login",$home);
	}

	public function delete_user($id){
		$this->load->model("Web_model");
		$this->Web_model->hapus_user($id);
		redirect("home");
	}


	//STORY CONTROLLERS
	
	public function add_story(){
		$this->load->model("Web_model");
		$home['tipe'] = "Add";

		if(isset($_POST['tombol_submit'])){
			//proses create_story dilakukan
			$this->Web_model->create_story($_POST);
			redirect("home");
		}

		$this->load->view("membaca",$home);
	}	

	public function edit_story($id){
		$this->load->model("Web_model");
		$home['tipe'] = "Edit";
		$home['default'] = $this->Web_model->get_default_story($id);

		if(isset($_POST['tombol_submit'])){
			$this->Web_model->update_story($_POST, $id);
			redirect("home");
		}

		$this->load->view("membaca",$home);
	}

	public function delete_story($id){
		$this->load->model("Web_model");
		$this->Web_model->hapus_story($id);
		redirect("home");
	}


}
