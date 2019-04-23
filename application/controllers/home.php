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
		$this->load->view('navbar');
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

	public function cerita_user()
	{
		$this->load->view('cerita_user');
	}
	
	public function edit_profil()
	{
		$this->load->view('edit_profil');
	}

	public function halaman_cerita()
	{
		$this->load->view('halaman_cerita');
	}

	public function membaca()
	{
		$this->load->view('membaca');
	}

	public function profil()
	{
		$this->load->view('profil');
	}

	public function membuat_cerita()
	{
		$this->load->view('membuat_cerita');

	}


}
