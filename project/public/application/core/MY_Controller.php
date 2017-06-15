<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Frontend_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    protected function render( $view, $data = array() )
    {
        $this->load->view('_header', $data);
        $this->load->view($view, $data);
        $this->load->view('_footer', $data);
    }
}
class Backend_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ( !$this->session->userdata('admin') ) redirect('admin/login');
    }

    protected function render( $view, $data = array() ) {
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/'. $view, $data);
        $this->load->view('admin/_footer', $data);
    }

}
