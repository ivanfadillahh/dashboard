<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Management');
    }

	// default view login
	public function index()
	{
		$this->load->view('welcome_message');
	}

	// load view login if isset status_login == 1
	public function dashboard()
	{
		if($this->session->userdata('status_login') !== null && $this->session->userdata('status_login') == true){
			$var['students'] = $this->Management->get_students_list()->result_array();
			$this->load->view('dashboard',$var);
		}else{
			redirect('Welcome');
		}
	}

	// function login process & set session user login
	public function do_login(){
		$email = $_POST['email'];
		$pass = md5($_POST['password']);
		$res = $this->Management->check_user($email,$pass);

		if($res->num_rows() > 0){
			$sett = $res->row_array();
			$this->session->set_userdata('status_login', true);
			$this->session->set_userdata('id',$sett['id']);
			$this->session->set_userdata('name',$sett['fullname']);
			$this->session->set_userdata('email',$sett['email']);
			$this->session->set_userdata('role',$sett['role']);
			$this->session->set_userdata('last_login',$sett['last_login']);
			$this->dashboard();
		}
		else{
			redirect('Welcome');
		}
	}

	// load view add student
	public function add_student(){
		$this->load->view('add_student');
	}

	// function add student
	public function do_add_student(){
		$pass = 'student'.date('Y');
		$arr = array(
			'nis' => date('dmYis'),
			'fullname' => $_POST['fullname'],
			'email' => $_POST['email'],
			'password' => md5($pass),
			'address' => $_POST['address'],
			'phone' => $_POST['phone']
		);
		$res = $this->Management->add_student($arr);
		if($res == 1){
			redirect('Welcome/dashboard','refresh');
		}
		else{
			redirect('Welcome/add_student','refresh');
		}
	}

	// load view update student
	public function update_student($id){
		$var['id'] = $id;
		$this->load->view('update_student',$var);
	}

	// function update student by selected id
	public function do_update_student(){
		$id = $_POST['id'];
		$arr = array(
			'fullname' => $_POST['fullname'],
			'address' => $_POST['address'],
			'phone' => $_POST['phone']
		);
		$res = $this->Management->update_student($id,$arr);
		if($res == 1){
			redirect('Welcome/dashboard','refresh');
		}
		redirect('Welcome/update_student','refresh');
	}

	// function delete student by selected id
	public function delete_student($id){
		$res = $this->Management->delete_student($id);
		if($res == 1){
			redirect('Welcome/dashboard','refresh');
		}
		redirect('Welcome/dashboard','refresh');
	}

	// function logout & destroy session
	public function logout(){
		if($this->session->userdata('status_login') !== null && $this->session->userdata('status_login') == true){
			$this->Management->last_login();
			$this->session->sess_destroy();
		}
		redirect('Welcome');
	}
}
