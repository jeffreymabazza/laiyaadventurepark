<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminLogin extends CI_Controller {

	public function __construct()
	{

		parent::__construct();

	}

	public function generate_admin_user()
	{

		$user = $this->db->select('username')
			->from('users')
			->where('username', 'admin@gmail.com')
			->get()
			->num_rows();

		if( ! $user) {
			$this->db->insert('users', array(
				'username' => 'admin@gmail.com',
				'password' => password_hash('P@ssw0rd', PASSWORD_BCRYPT),
				'name' => 'Administrator'
			));

			exit('User created');
		}

		exit('User already exist');

	}

	/**
	 * Admin dashboard
	 * @return [type] [description]
	 */
	public function dashboard()
	{

		$data['content'] = $this->load->view('admin/dashboard/index', array(), true);

		$this->load->view('admin/template/template', $data);

	}

	/**
	 * Login page
	 */
	public function login()
	{

		$data['error_message'] = $this->session->flashdata('error_message');

		$this->load->view('admin/login/index', $data);

	}

	/**
	 * Handles user validation
	 */
	public function authenticate()
	{

		if($this->input->post('username')) {
			$user = $this->db->select('name, username, password')
				->from('users')
				->like('username', $this->input->post('username'))
				->get()
				->row();

			if($user) {
				if(password_verify($this->input->post('password'), $user->password)) {
					$this->admin_model->admin_login($user);

					redirect('admin/dashboard');
				}
			}
		}

		$this->session->set_flashdata('error_message', 'Invalid username and/or password.');
		redirect('admin/login');

	}

}