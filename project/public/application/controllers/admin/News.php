<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Backend_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model', 'news');
    }

    public function index()
    {
        $data['rs'] = $this->news->fetchAll();
        $this->render('news/index', $data);
    }

    public function add()
    {
        $this->render('news/add');
    }

    public function edit($id)
    {
        $data['r'] = $this->news->getId($id);
        $this->render('news/edit', $data);
    }

    public function delete($id)
    {
        $this->news->delete($id);
        redirect('admin/news');
    }

    public function do_save()
    {
        $config = array(
            array(
                'field' => 'title',
                'label' => 'title',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $news_id = $this->news->save();
            $config = array(
                'upload_path' => './upload/news/',
                'allowed_types' => 'jpg|jpeg|png|gif',
                'file_name' => 'news'.time(),
            );
            $this->upload->initialize($config);
            if ($this->upload->do_upload('image_path')) {
              $data = $this->upload->data();
              $this->db->where('id', $news_id)->update('news', array(
                'image_path' => $data['file_name'],
              ));
            }
        }
        redirect('admin/news');
    }

    public function update()
    {
        $config = array(
            array(
                'field' => 'title',
                'label' => 'title',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $news_id = $this->news->update();
            $config = array(
                'upload_path' => './upload/news/',
                'allowed_types' => 'jpg|jpeg|png|gif',
                'file_name' => 'news'.time(),
            );
            $this->upload->initialize($config);
            if ($this->upload->do_upload('image_path')) {
              $data = $this->upload->data();
              $this->db->where('id', $news_id)->update('news', array(
                'image_path' => $data['file_name'],
              ));
            }
        }
        redirect('admin/news');
    }

}
