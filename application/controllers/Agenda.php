<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Suasana Akademik';

        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/pages/agenda', $data);
        $this->load->view('frontend/footer');
    }
}
