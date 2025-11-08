<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
<<<<<<< HEAD
            'userlog' => infoLogin(),
=======
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
            'barang' => $this->Barang_model->getAll(),
            'content' => 'barang/index'
        );
        $this->load->view('template/main', $data);
    }
}