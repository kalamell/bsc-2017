<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Frontend_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model', 'news');
    }
    public function index()
    {
    }

    public function node($id)
    {
        $rs = $this->news->getId($id);
        if (!$rs) redirect('news');
        $data = array(
            'rs' => $rs,
            'title' => $rs->title,
        );
        $this->render('news/node', $data);

    }

}
