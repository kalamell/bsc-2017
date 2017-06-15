<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner_model extends CI_Model {
    private $table = '';
    public function __construct()
    {
        parent::__construct();
        $this->table = 'banner';
    }

    public function sort($field, $order = 'ASC')
    {
        $this->db->order_by($field, $order);
    }

    public function isActive()
    {
        $this->db->where('active', 1);
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
        $this->db->insert('banner', array(
            'name' => $this->input->post('name'),
            'link' => $this->input->post('link'),
            'path' => '',
            'active' => $this->input->post('active')?'1':'0',
        ));
        return $this->db->insert_id();
    }

    public function update()
    {
        $this->db->where('id', $this->input->post('id'))->update('banner', array(
            'name' => $this->input->post('name'),
            'link' => $this->input->post('link'),
            'active' => $this->input->post('active')?'1':'0',
        ));
        return $this->input->post('id');
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete('banner');
    }

}
