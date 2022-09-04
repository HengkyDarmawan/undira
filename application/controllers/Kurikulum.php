<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kurikulum extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Kurikulum Program Studi';

        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/pages/kurikulum');
        $this->load->view('frontend/footer');
    }
}
