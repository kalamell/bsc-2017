<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function getProvince()
    {
        $sql = "SELECT province_id, province_name FROM province ORDER BY CONVERT( province_name USING tis620) ASC";
        $rs = $this->db->query($sql);
        return $rs->result();
    }

    public function checkEmailExists()
    {
        $rs = $this->db->where('email', $this->input->post('email'))->get('member');
        if ($rs->num_rows()>0) {
            return true;
        } else {
            return false;
        }
    }
    public function checkIdcardExists()
    {
        $rs = $this->db->where('idcard', $this->input->post('idcard'))->get('member');
        if ($rs->num_rows()>0) {
            return true;
        } else {
            return false;
        }
    }

    public function save()
    {
        $this->db->set('create_date', date('Y-m-d H:i:s'))->insert('member', array(
            'email' => $this->input->post('email'),
            'password' => do_hash($this->input->post('password_first')),
            'gender' => $this->input->post('gender'),
            'name' => $this->input->post('name'),
            'surname' => $this->input->post('surname'),
            'birthday' => $this->input->post('year').'-'.$this->input->post('month').'-'.$this->input->post('day'),
            'idcard' => $this->input->post('idcard'),
            'mobile' => $this->input->post('mobile'),
            'school' => $this->input->post('school'),
            'province_id' => $this->input->post('province_id'),
            'ip' => $this->input->ip_address(),
        ));
    }

}