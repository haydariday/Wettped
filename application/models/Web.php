<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
    class Web extends CI_Model
{
    public function show_story(){
    $query = $this->db->order_by('id', 'writer_id', 'title', 'body', 'genre', 'image', 'created_at')->get('stories');
    return $query->result();
    }
}