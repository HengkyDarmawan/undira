<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Profil Program Studi';

        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/pages/profil', $data);
        $this->load->view('frontend/footer');
    }
}
