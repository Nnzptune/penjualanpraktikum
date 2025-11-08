<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
class Menu extends CI_Controller {

    public function index()
    {
        $data = array(
            'content' => 'dashboard/index.php'
        );
        $this->load->view('template/main',$data);
    }
}
?>
=======
class Menu extends CI_Controller{
    public function index()
    {
       $data = array(
        'content' => 'dashboard/index.php'
       );
       $this -> load->view('template/main',$data);
    }
}
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
