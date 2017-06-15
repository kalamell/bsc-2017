<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends Frontend_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model', 'register');
    }
    public function index()
    {
        $data = array(
            'title' => 'สมัครสมาชิก',
            'province' => $this->register->getProvince(),
        );
        $this->render('register/form', $data);
    }

    public function do_save()
    {
        $config = array(
            array(
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required|valid_email|is_unique[member.email]'
            ),
            array(
                'field' => 'password_first',
                'label' => 'password',
                'rules' => 'required|min_length[8]'
            ),
            array(
                'field' => 'gender',
                'label' => 'gender',
                'rules' => 'required'
            ),
            array(
                'field' => 'name',
                'label' => 'name',
                'rules' => 'required'
            ),
            array(
                'field' => 'surname',
                'label' => 'surname',
                'rules' => 'required'
            ),
            array(
                'field' => 'day',
                'label' => 'day',
                'rules' => 'required'
            ),
            array(
                'field' => 'month',
                'label' => 'month',
                'rules' => 'required'
            ),
            array(
                'field' => 'year',
                'label' => 'year',
                'rules' => 'required'
            ),
            array(
                'field' => 'idcard',
                'label' => 'idcard',
                'rules' => 'required|is_unique[member.idcard]'
            ),
            array(
                'field' => 'mobile',
                'label' => 'mobile',
                'rules' => 'required|min_length[10]|max_length[20]'
            ),
            array(
                'field' => 'school',
                'label' => 'school',
                'rules' => 'required'
            ),
            array(
                'field' => 'province_id',
                'label' => 'province_id',
                'rules' => 'required'
            ),
        );
        $this->form_validation->set_rules($config);
        $error = '';
        if ($this->form_validation->run()) {
            $this->register->save();
        } else {
            $error = validation_errors();
        }
        if ($this->input->is_ajax_request()) {
            echo $error;
        } else {
            redirect('');
        }
    }

    public function check_exists_email()
    {
        $check = $this->register->checkEmailExists();
        if ($check) {
            echo 'false';
        } else {
            echo 'true';
        }
    }
    public function check_exists_idcard()
    {
        $check = $this->register->checkIdcardExists();
        if ($check) {
            echo 'false';
        } else {
            echo 'true';
        }
    }
}