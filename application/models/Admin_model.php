<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    // menampilkan data dari database
    public function getWhere($table,$key,$value)
    {
        $this->db->where($key, $value);
        $query = $this->db->get($table);
        return $query->row_array();
    }

    // menampilkan data dari database
    public function getAll($table)
    {
        $query = $this->db->get($table);
        return $query->result_array();
    }
    
    // menambahkan data ke database
    public function create($table, $data)
    {
        $this->db->insert($table, $data);
    }

    // memperbarui data ke database
    public function update($table, $key, $value, $data)
    {
        $this->db->where($key, $value);
        $this->db->update($table, $data);
    }

    // menghapus data ke database
    public function delete($table, $key, $value)
    {
        $this->db->where($key, $value);
        $this->db->delete($table);
    }
}