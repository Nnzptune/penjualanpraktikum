<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $data = array(
            'title'   => 'View Data User',
            'user'    => $this->User_model->getAll(),
            'content' => 'user/index'
        );
        $this->load->view('template/main', $data);
    }

    public function add()
    {
        $data = array(
            'title'   => 'Tambah Data User',
            'content' => 'user/add_form'
        );
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
        redirect('user');
    }
    public function getedit($id)
    {
        $data = array(
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
        }
        redirect('user');
    }
    function delete($id)
    {
        $this->User_model->delete($id);
        redirect('user');
    }
}
