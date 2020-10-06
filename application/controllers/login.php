<?php defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index() {
        $this->load->view('login');
    }

    public function proses(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->db->query("SELECT * FROM login WHERE username='$username' AND password='$password'");
		if ($cek->num_rows() > 0) {
			foreach ($cek->result() as $row) {
				$id = $row->id;
				$username = $row->username; 
			}

			$data_session = array(
				'id' 		=> $id,
				'username' 	=> $username 
			);

			redirect(base_url("Dashboard"));
		} else {
            $this->session->set_flashdata('error_login', '<div class="alert alert-danger" role="alert">Username dan Password Anda Salah!</div>');
			redirect(base_url("Login"));
		}
	}
	public function logout() {
        $this->load->view('login');
    }
}