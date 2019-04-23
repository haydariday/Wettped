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

}
