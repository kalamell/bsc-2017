<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {
    private $table = '';
    public function __construct()
    {
        parent::__construct();
        $this->table = 'news';
    }
    public function sort($field, $order='ASC')
    {
        $this->db->order_by($field, $order);
    }
    public function first()
    {
        $this->db->limit(1, 0);
    }

    public function limit($start, $limit)
    {
        $this->db->limit($start, $limit);
    }

    public function row()
    {
        return $this->db->get($this->table)->row();
    }

    public function fetchAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function getId($id)
    {
        return $this->db->where('id', $id)->get($this->table)->row();
    }

    public function save()
    {
        $this->db->set('ondate', 'NOW()', false)->insert('news', array(
            'title' => $this->input->post('title'),
            'except' => $this->input->post('except'),
            'image_path' => '',
            'description' => $this->input->post('description'),
            'active' => $this->input->post('active')?'1':'0',
        ));
        return $this->db->insert_id();
    }

    public function update()
    {
        $this->db->where('id', $this->input->post('id'))->update('news', array(
            'title' => $this->input->post('title'),
            'except' => $this->input->post('except'),
            'description' => $this->input->post('description'),
            'active' => $this->input->post('active')?'1':'0',
        ));
        return $this->input->post('id');
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete('banner');
    }

}
