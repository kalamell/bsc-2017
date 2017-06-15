<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends Backend_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('banner_model', 'banner');
    }

    public function index()
    {
        $data['rs'] = $this->banner->fetchAll();
        $this->render('banner/index', $data);
    }

    public function add()
    {
        $this->render('banner/add');
    }

    public function edit($id)
    {
        $data['r'] = $this->banner->getId($id);
        $this->render('banner/edit', $data);
    }

    public function delete($id)
    {
        $this->banner->delete($id);
        redirect('admin/banner');
    }

    public function do_save()
    {
        $config = array(
            array(
                'field' => 'name',
                'label' => 'name',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $banner_id = $this->banner->save();
            $config = array(
                'upload_path' => './upload/',
                'allowed_types' => 'jpg|jpeg|png|gif',
                'file_name' => 'banner'.time(),
            );
            $this->upload->initialize($config);
            if ($this->upload->do_upload('path')) {
              $data = $this->upload->data();
              $this->db->where('id', $banner_id)->update('banner', array(
                'path' => $data['file_name'],
              ));
            }
        }
        redirect('admin/banner');
    }

    public function update()
    {
        $config = array(
            array(
                'field' => 'name',
                'label' => 'name',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $banner_id = $this->banner->update();
            $config = array(
                'upload_path' => './upload/',
                'allowed_types' => 'jpg|jpeg|png|gif',
                'file_name' => 'banner'.time(),
            );
            $this->upload->initialize($config);
            if ($this->upload->do_upload('path')) {
              $data = $this->upload->data();
              $this->db->where('id', $banner_id)->update('banner', array(
                'path' => $data['file_name'],
              ));
            }
        }
        redirect('admin/banner');
    }

}
