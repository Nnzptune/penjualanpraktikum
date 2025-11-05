<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    protected $table = 'barang';
    protected $primary = 'id';

    public function getAll()
    {
    // HANYA JOIN KE KATEGORI. Kolom 'satuan' diganti dengan ID dari tabel barang (satuan_id).
    $SQL = "SELECT 
        a.id, 
        a.barkode, 
        a.name, 
        a.satuan_id AS satuan,  -- Ambil ID Satuan (bukan namanya)
        c.name AS kategori, 
        a.harga_beli, 
        a.harga_jual, 
        a.stok 
    FROM 
        barang a 
    LEFT JOIN 
        kategori c ON a.kategori_id = c.id";
            
    return $this->db->query($SQL)->result();
    }
}