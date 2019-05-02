<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
    class Web_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function load_user(){
		$sql = $this->db->query("SELECT * FROM users WHERE flag = 1");
		return $sql->result_array();
	}

	public function create_user($post){
		$username = $this->db->escape($post['username']);
		$email = $this->db->escape($post['email']);
		$password = $this->db->escape($post['password']);

		$sql = $this->db->query("INSERT INTO users VALUES (NULL, $username, $email, $password, 1)");
		if($sql)
			return true;
		return false;
	}

	public function get_default_user($id){
		$sql = $this->db->query("SELECT * FROM users WHERE id = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update_user($post, $id){
		$username = $this->db->escape($post['username']);
		$email = $this->db->escape($post['email']);
		$password = $this->db->escape($post['password']);

		$sql = $this->db->query("UPDATE users SET username = $username, email = $email, password = $password WHERE id = ".intval($id));

		return true;
	}

	public function hapus_user($id){
		$sql = $this->db->query("UPDATE users SET flag = 0 WHERE id = ".intval($id));
    }
    
    //STORY

	public function load_story(){
		$sql = $this->db->query("SELECT * FROM stories WHERE flag = 1");
		return $sql->result_array();
	}

	public function create_story($post){
		$title = $this->db->escape($post['title']);
		$description = $this->db->escape($post['description']);
		$genre = $this->db->escape($post['genre']);
		$image = $this->db->escape($post['image']);
		$story = $this->db->escape($post['story']);

		$sql = $this->db->query("INSERT INTO stories VALUES (NULL, $title, $description, $genre, $image, $story ,1)");
		if($sql)
			return true;
		return false;
	}

	public function get_default_story($id){
		$sql = $this->db->query("SELECT * FROM stories WHERE id = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update_story($post, $id){
		$title = $this->db->escape($post['title']);
		$description = $this->db->escape($post['description']);
		$genre = $this->db->escape($post['genre']);
		$image = $this->db->escape($post['image']);
		$story = $this->db->escape($post['story']);

		$sql = $this->db->query("UPDATE stories SET 
		title = $title, 
		description = $description, 
		genre = $genre,
		image = $image,
		story = $story
		WHERE id = ".intval($id));

		return true;
	}

	public function hapus_story($id){
		$sql = $this->db->query("UPDATE stories SET flag = 0 WHERE id = ".intval($id));
	}	

}