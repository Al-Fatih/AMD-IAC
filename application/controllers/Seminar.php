<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class seminar extends CI_Controller {
	public function index()
	{
		$this->load->view('index');
	}
	public function about(){
		$this->load->view('about');
	}

	public function daftar(){
		$this->load->view('daftar');
	}

    public function register(){
        $email = $this->input->post('email');
        $akun = $this->daftar_model->cek($email);
        if(count($akun)>=1){
            $data['notif'] = "alert alert-danger";
            $data['info'] = "Anda sudah terdaftar sebagai peserta";
        } else {
            $this->daftar_model->tambah();
            $data['notif'] = "alert alert-success";
            $data['info'] = "Terima kasih telah mendaftar, anda telah terdaftar dalam Seminar ini";
        }
        $this->load->view('daftar', $data);
    }
    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $akun = $this->daftar_model->login($username);
        if(count($akun)>=1){
            if($akun[0]->password == $password){
                $this->session->set_userdata('username', $username);
                redirect('seminar/halamanadmin');
            } else {
                $data['notif'] = "alert alert-danger";
                $data['info'] = "Password anda Salah";
                $this->load->view('admin', $data);
            }
        } else {
            $data['notif'] = "alert alert-danger";
            $data['info'] = "Akun tidak ditemukan";
            $this->load->view('admin', $data);
        }
    }

	public function testimoni(){
		$this->load->view('testimoni');
	}
    public function admin(){
        $this->load->view('admin');
    }
    public function halamanadmin(){
        if(isset($_SESSION['username'])){
            $data['peserta'] = $this->daftar_model->daftarpeserta();
            $this->load->view('peserta', $data);
        } else {
            redirect('seminar/index','refresh');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('seminar/index','refresh');
    }
    public function delete(){
        $id = $this->input->get('email');
        $this->daftar_model->delete($id);
        redirect('seminar/halamanadmin','refresh');
    }

}
