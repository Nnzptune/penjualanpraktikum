<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->library('form_validation');
<<<<<<< HEAD
=======
        $this->load->library('session');
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
    }

    public function index()
    {
        $data = array(
            'title'   => 'View Data User',
            'user'    => $this->User_model->getAll(),
            'content' => 'user/index'
        );
<<<<<<< HEAD

=======
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
        $this->load->view('template/main', $data);
    }

    public function add()
    {
        $data = array(
            'title'   => 'Tambah Data User',
            'content' => 'user/add_form'
        );
<<<<<<< HEAD

        $this->load->view('template/main', $data);
    }
    public function save()
    {
        $this->User_model->Save();
        if($this->db->affected_rows()>0){
            $this->session->set_flashdata("success","Data User Berhasil Disimpan");
        }
=======
        $this->load->view('template/main', $data);
    }

    public function save()
    {
        // Ambil data dari form
        $data = array(
            'nik'       => $this->input->post('nik', true),
            'username'  => $this->input->post('username', true),
            'full_name' => $this->input->post('full_name', true),
            'phone'     => $this->input->post('phone', true),
            'email'     => $this->input->post('email', true),
            'alamat'    => $this->input->post('alamat', true),
            'password'  => md5($this->input->post('password', true)),
            'role'      => $this->input->post('role', true),
            'is_active' => 1
        );

        // Simpan data lewat model
        $this->User_model->save($data);

        // Notifikasi jika berhasil
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data user berhasil disimpan!');
        }

        // Kembali ke halaman utama user
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
        redirect('user');
    }
    public function getedit($id)
    {
        $data = array(
<<<<<<< HEAD
            'title'   => 'Update Data User',
            'user' => $this->User_model->getbyid($id),
            'content' => 'user/edit_form'
        );

        $this->load->view('template/main', $data);
    }
    public function edit()
    {
        $this->User_model->editData();
        if($this->db->affected_rows()>0){
            $this->session->set_flashdata("success","Data User Berhasil Diupdate");
=======
            'title'=> 'Update Data User',
            'user' => $this-> User_model->getById($id),
            'content'=> 'user/edit_form'
        );
        $this-> load->view('template/main',$data);
    }
    public function edit()
    {
        $this ->User_model->editData();
        if($this->db->affected_rows()>0){
            $this->session->set_flashdata("Success","Data User Berhasil Di Update");
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
        }
        redirect('user');
    }
    function delete($id)
    {
        $this->User_model->delete($id);
        redirect('user');
    }
<<<<<<< HEAD
    
=======
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
}
