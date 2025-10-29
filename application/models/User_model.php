<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    protected $_table = "user";
    protected $primary = "id";

    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }

    // Ambil semua data user aktif
    public function getAll() {
        return $this->db
                    ->where('is_active', 1)
                    ->get($this->_table)
                    ->result();
    }

    // Simpan data baru
    public function save($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    // Ambil data berdasarkan ID
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row();
    }

    // Update data user
    public function update($id, $data)
    {
        $this->db->where($this->primary, $id);
        return $this->db->update($this->_table, $data);
    }

    // Versi lama kamu (editData) bisa dihapus kalau sudah pakai controller versi baru
    public function editData()
    {
        $id = $this->input->post('id');
        $data = array(
            'username'  => htmlspecialchars($this->input->post('username'), true),
            'email'     => htmlspecialchars($this->input->post('email'), true),
            'full_name' => htmlspecialchars($this->input->post('full_name'), true),
            'phone'     => htmlspecialchars($this->input->post('phone'), true),
            'role'      => htmlspecialchars($this->input->post('role'), true),
            'alamat'    => htmlspecialchars($this->input->post('alamat'), true),
            'is_active' => 1
        );

        // Jika password diisi baru update
        if (!empty($this->input->post('password'))) {
            $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        }

        return $this->db->set($data)->where($this->primary, $id)->update($this->_table);
    }

    // Hapus data user
    public function delete($id)
    {
        $this->db->where('id', $id)->delete($this->_table);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data user berhasil dihapus!');
        }
    }
}
