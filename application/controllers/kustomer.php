<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kustomer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function laporan()
    {
        $data = array(
            'title' => 'Tambah Laporan Data Kustomer',
            'content' => 'kustomer/laporan'
        );
        $this->load->view('template/main', $data);
    }
}
