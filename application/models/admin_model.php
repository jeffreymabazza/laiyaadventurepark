<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	public function __construct()
	{

		if($this->uri->segment(1) == 'admin' && $this->uri->segment(2) != 'login' && $this->uri->segment(2) != 'authenticate' && $this->uri->segment(2) != 'logout' && $this->uri->segment(2) != 'generate-admin-user') {
			$this->validate_admin_session();
		}

	}

	/**
	 * Login an authenticated user
	 * @param  obj $user
	 */
	public function admin_login($user)
	{

		$this->session->set_userdata(array(
			'admin_session' => true,
			'name' => $user->name
		));

	}

	/**
	 * Logout user
	 */
	public function admin_logout()
	{

		$this->session->sess_destroy();

	}

	/**
	 * Validate if admin session exist
	 */
	private function validate_admin_session()
	{

		if( ! $this->session->userdata('admin_session')) {
			redirect('admin/login');
		}

	}

}