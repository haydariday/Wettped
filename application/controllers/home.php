<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct ()
	{
		parent ::__construct ();
		$this->load->model('Web'); 
	}
	
	public function index()
	{
		$data = array (
			'title'			=> 'Data Cerita'
			'data_cerita' 	=>	$this->Web->show_story();
		);
		$this->load->view('home',$data);
	}

}
