<?php

/**
 * Created by PhpStorm.
 * User: Daneswara Jauhari
 * Date: 02/06/2015
 * Time: 7:43
 */
class Daftar_model extends CI_Model
{
    function tambah()
    {
        $data = array('nama' => $this->input->post('namalengkap'),
            'email' => $this->input->post('email'),
            'nohp' => $this->input->post('nomor'),
            'jurusan' => $this->input->post('jurusan'),
            'ptn' => $this->input->post('ptn')
        );
        $this->db->insert('user', $data);
    }

    function cek($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('user');
        return $query->result();
    }

    function login($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('admin');
        return $query->result();
    }

    function daftarpeserta()
    {
        $this->db->order_by('nama', 'ASC');
        $query = $this->db->get('user');
        return $query->result();
    }
    function delete($id){
        $this->db->where('email',$id);
        $this->db->delete('user');
    }
}