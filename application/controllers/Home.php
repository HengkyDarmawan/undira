<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $data['news'] = $this->m_home->getAllNews();

        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/pages/home', $data);
        $this->load->view('frontend/footer');
    }
    public function detail()
    {
        $id = $this->uri->segment(3);

        $data['title'] = 'Detail';
        $data['news'] = $this->m_home->GetNewsByID($id);

        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/pages/detail', $data);
        $this->load->view('frontend/footer');
    }
}
