<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
    class Web_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$username = $this->db->escape($post['username']);
		$email = $this->db->escape($post['email']);
		$password = $this->db->escape($post['password']);

		$sql = $this->db->query("INSERT INTO register VALUES (NULL, $username, $email, $password, 1)");
		if($sql)
			return true;
		return false;
    }
    
}