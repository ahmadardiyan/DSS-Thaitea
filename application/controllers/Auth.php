<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function login(){

		if (isset($_SESSION['login'])) {
			redirect('admin','refresh');
		}

		$this->form_validation->set_rules('username' , 'Username' , 'required|callback_checkUsername|callback_checkRole');
		$this->form_validation->set_rules('password' , 'Password' , 'required|callback_checkPassword');

		if ($this->form_validation->run()===FALSE) {
			$this->load->view('partials/header');
			$this->load->view('auth/login');
			$this->load->view('partials/footer');
		} else {
			$user = $this->User_model->get_user('username',$this->input->post('username'));

			$_SESSION['id'] = $user['id'];
			$_SESSION['login'] = TRUE;

			redirect('admin','refresh');
		}
	}

	public function checkEmail($email){
		if (!$this->User_model->get_user('email',$email)) {
			$this->form_validation->set_message('checkEmail','email belum terdaftar!');
			return false;
		}
		return true;
	}
	
	public function checkUsername($username){
		if (!$this->User_model->get_user('username',$username)) {
			$this->form_validation->set_message('checkUsername','Username belum terdaftar!');
			return false;
		}
		return true;
	}

	public function checkPassword($password){
		$user = $this->User_model->get_user('username',$this->input->post('username'));

		if (!$this->User_model->checkPassword($user['username'],$password)) {
			$this->form_validation->set_message('checkPassword','Password yang dimasukkan salah!');
			return false;
		}
		return true;
	}

	public function checkRole($username){
		$user = $this->User_model->get_user('username',$this->input->post('username'));

		if ($user['role'] != 1) {
			$this->form_validation->set_message('checkRole','Username belum diverifikasi!');
			return false;
		}
		return true;
	}

	public function checkRoleEmail($email){
		$user = $this->User_model->get_user('email',$this->input->post('email'));

		if ($user['role'] != 1) {
			$this->form_validation->set_message('checkRole','Email belum diverifikasi!');
			return false;
		}
		return true;
	}



	public function logout(){
		unset($_SESSION['id'],$_SESSION['login']);
		redirect('login','refresh');
	}

	public function registrasi(){
		
		$this->form_validation->set_rules('email' , 'Email' , 'required|is_unique[users.email]');
		$this->form_validation->set_rules('username' , 'Username' , 'required|is_unique[users.username]');
		$this->form_validation->set_rules('password' , 'Password' , 'required');
		$this->form_validation->set_rules('confrimpassword' , 'Konfirmasi Password' , 'required|matches[password]');
		$this->form_validation->set_rules('checkbox' , 'Checkbox' , 'required');

		if ($this->form_validation->run()===FALSE){
			$this->load->view('partials/header');
			$this->load->view('auth/registrasi');
			$this->load->view('partials/footer');
		} else {
			$this->User_model->insert_data(); //menyimpan data
			$this->send_email_verification($this->input->post('email'), $_SESSION['token']); //verifikasi email
			redirect('login');
		}
	}

	public function send_email_verification($email,$token){
		$this->load->library('email'); //mengaktifkan library email
		$this->email->from('ahmadardiyanto23@gmail.com','Ahmad Ardiyanto');
		$this->email->to($email);
		$this->email->subject('Verifikasi Akun Admin Aplikasi SPK ThaiTea');
		$this->email->message("
			Klik untuk verifikasi Akun <a href='http://localhost/thaitea/verify_register/$email/$token'>Verifikasi Email</a>");
		$this->email->set_mailtype('html');
		$this->email->send();
	}

	public function verify_register($email,$token){
		$user = $this->User_model->get_user('email',$email);

		if (!$user) {
			die("Email tidak ditemukan");
		}//cek email

		if($user['token'] !== $token){
			die("Token tidak sesuai");
		}//cek token

		$this->User_model->update_role($user['id'],1);//update role bedasarkan id

		$_SESSION['id'] = $user['id']; //set session
		$_SESSION['login'] =  true;

		redirect('admin');//redirect admin
	}

	public function forgotPassword(){
		
		$this->form_validation->set_rules('email' , 'Email' , 'required|callback_checkEmail|callback_checkRoleEmail');

		if ($this->form_validation->run()===FALSE){
			$data['judul'] = 'Lupa Password';

			$this->load->view('partials/header',$data);
			$this->load->view('auth/forgot_password');
			$this->load->view('partials/footer');
		} else {
			$user = $this->User_model->get_user('email',$this->input->post('email'));

			$this->sendEmailNewPassword($user['email'],$user['token']);
			redirect('login');
		}
	}

	public function sendEmailNewPassword($email,$token){
		$this->load->library('email');
		$this->email->from('ahmadardiyanto23@gmail.com','Ahmad Ardiyanto');
		$this->email->subject('Pembaruan Password');
		$this->email->to($email);
		$this->email->message("
			Klik untuk pembaruan password <a href='http://localhost/thaitea/newPassword/$email/$token'>Perbarui Password</a>
			");
		$this->email->set_mailtype('html');
		$this->email->send();
	}

	public function newPassword($email,$token){
		$user = $this->User_model->get_user('email',$email);

		if (!$user) {
			die("Email tidak ditemukan");
		}//cek email

		if($user['token'] !== $token){
			die("Token tidak sesuai");
		}//cek token

		$this->form_validation->set_rules('password' , 'Password' , 'required');
		$this->form_validation->set_rules('confrimpassword' , 'Konfirmasi Password' , 'required|matches[password]');

		if ($this->form_validation->run() === FALSE) {
			$data['judul'] = 'Perbarui Password';
			$this->load->view('partials/header',$data);
			$this->load->view('auth/input_new_password');
			$this->load->view('partials/footer');
		} else {

		$this->User_model->updatePassword($user['id']);//update password

		redirect('admin'); //redirect admin
		}
	}
}

