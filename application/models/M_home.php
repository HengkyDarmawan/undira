<?php

class M_home extends CI_Model
{
    public function getAllNews()
    {
        $this->db->select('news.*, category.name');
        $this->db->from('news');
        $this->db->join('category', 'news.category_id = category.id');
        $this->db->order_by('publish_date', 'desc');
        return $this->db->get()->result_array();
    }
    public function GetNewsByID($id)
    {
        $this->db->select('news.*, users.username');
        $this->db->from('news');
        $this->db->join('users', 'news.user_id = users.id');
        $this->db->where('news.id', $id);
        return $this->db->get()->row();
    }
}
