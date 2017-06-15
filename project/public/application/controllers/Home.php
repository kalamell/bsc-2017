<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model', 'news');
    }
    public function index()
    {
        $this->news->sort('id', 'ASC');
        $this->news->first();
        $news_first = $this->news->row();

        $this->news->sort('id', 'ASC');
        $this->news->limit(3, 1);
        $news_other = $this->news->fetchAll();

        $data = array(
            'news_first' => $news_first,
            'news_other' => $news_other,
            'title' => 'แบรนด์ซัมเมอร์แคมป์ปีที่29'
        );

        $this->render('home', $data);
    }

}
