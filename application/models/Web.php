<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
    class Web extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //GET STORY LIST
    function get_story_lists()
    {
        $this->datatables->select('id,writer_id,title,genre,image,create_at');
        $this->datatables->from('stories'); 
        return $this->datatables->generate();
    }
    // GET STORY BY ID
    function get_stories($id)
    {
        $this->db->from('stories');
        $this->db->where('id',$id);
        $query = $this->db->get(); 
        return $query->row();
    }
    // CREATE STORY BY ID
    function create_story($data)
    {
        $this->db->insert('stories', $data);
        return $this->db->insert_id();
    }
    //DELETE STORY BY ID
    function delete_story($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('stories');
    }
    //UPDATE STORY BY ID
    function update_story($id,$data)
    {   
        $this->db->where('id', $id);
        $this->db->update('stories', $data); 
    }
    
    /////////////////////GET USER LIST//////////////////
    function get_user_lists()
    {
        $this->datatables->select('id,username,password,email,name,gender,image,create_at');
        $this->datatables->from('users'); 
        return $this->datatables->generate();
    }
    // GET USER BY ID
    function get_user($id)
    {
        $this->db->from('users');
        $this->db->where('id',$id);
        $query = $this->db->get(); 
        return $query->row();
    }
    // CREATE USER BY ID
    function create_user($data)
    {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }
    //DELETE USER BY ID
    function delete_user($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
    //UPDATE USER BY ID
    function update_user($id,$data)
    {   
        $this->db->where('id', $id);
        $this->db->update('users', $data); 
    }
}