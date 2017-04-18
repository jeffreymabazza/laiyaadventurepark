<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminSettings extends CI_Controller {

	public function __construct()
	{

		parent::__construct();

	}

	public function index()
	{

		$data['record_promo'] = $this->db->select('content, type')
			->from('rates_settings')
			->where('type', FOR_PROMO)
			->get()
			->row();
		$data['record_regular'] = $this->db->select('content, type')
			->from('rates_settings')
			->where('type', FOR_REGULAR)
			->get()
			->row();

		$data['csrf']['name'] = $this->security->get_csrf_token_name();
		$data['csrf']['hash'] = $this->security->get_csrf_hash();
		$data['content'] = $this->load->view('admin/settings/index', $data, true);

		$data['page_level_css'] = $this->load->view('admin/settings/page-level-css', null, true);
		$data['page_level_javascripts'] = $this->load->view('admin/settings/page-level-javascripts', null, true);
		$data['page_level_javascripts_inits'] = $this->load->view('admin/settings/page-level-javascript-inits', null, true);

		$this->load->view('admin/template/template', $data);

	}

	public function update()
	{

		if($this->input->server('REQUEST_METHOD') !== 'POST') {
			show_404();
		}
		
		$this->db->where('type', FOR_PROMO);
		$this->db->update('rates_settings', array(
			'content' => $this->input->post('promo')
		));

		$this->db->where('type', FOR_REGULAR);
		$this->db->update('rates_settings', array(
			'content' => $this->input->post('regular')
		));

		redirect('admin/rates/settings');

	}

	public function rates_create()
	{

		if($this->input->server('REQUEST_METHOD') !== 'POST') {
			show_404();
		}

		$this->db->insert('rates', array(
			'attraction' => $this->input->post('attraction'),
			'rate' => $this->input->post('rate') ?: 0,
			'attraction_id' => $this->input->post('attraction_id'),
			'package_id' => $this->input->post('package_ids') ? serialize($this->input->post('package_ids')) : '',
			'is_promo' => $this->input->post('is_promo')
		));

		if(isset($_GET['is_promo']))
			redirect('admin/rates?is_promo');

		redirect('admin/rates');

	}

	public function rates_update($id)
	{

		if($this->input->server('REQUEST_METHOD') !== 'POST') {
			show_404();
		}

		$this->db->where('id', $id);
		$this->db->update('rates', array(
			'attraction' => $this->input->post('attraction'),
			'rate' => $this->input->post('rate') ?: 0,
			'attraction_id' => $this->input->post('attraction_id'),
			'package_id' => $this->input->post('package_ids') ? serialize($this->input->post('package_ids')) : '',
			'is_promo' => $this->input->post('is_promo')
		));

		if(isset($_GET['is_promo']))
			redirect('admin/rates?is_promo');

		redirect('admin/rates');

	}

	public function rates_delete($id)
	{

		if($this->input->server('REQUEST_METHOD') !== 'POST') {
			show_404();
		}

		$update_records = $this->db->select('id, attraction_id')
			->from('rates')
			->where('attraction_id', $id)
			->get()
			->result();

		if($update_records) {
			foreach($update_records as $record) {
				$this->db->where('id', $record->id);
				$this->db->update('rates', array(
					'attraction_id' => 0
				));
			}
		}

		$this->db->where('id', $id)
			->delete('rates');

		if(isset($_GET['is_promo']))
			redirect('admin/rates?is_promo');

		redirect('admin/rates');

	}

	public function packages_index()
	{

		$data['records'] = $this->db->select('id, name, rate')
			->from('packages')
			->order_by('id', 'desc')
			->get()
			->result();
		$data['csrf']['name'] = $this->security->get_csrf_token_name();
		$data['csrf']['hash'] = $this->security->get_csrf_hash();
		$data['content'] = $this->load->view('admin/rates/packages/index', $data, true);

		$this->load->view('admin/template/template', $data);

	}

	public function create_package()
	{

		if($this->input->server('REQUEST_METHOD') !== 'POST') {
			show_404();
		}

		$this->db->insert('packages', array(
			'name' => $this->input->post('name'),
			'rate' => $this->input->post('rate')
		));

		redirect('admin/rates/packages');

	}

	public function update_package($id)
	{

		if($this->input->server('REQUEST_METHOD') !== 'POST') {
			show_404();
		}

		$this->db->where('id', $id);
		$this->db->update('packages', array(
			'name' => $this->input->post('name'),
			'rate' => $this->input->post('rate')
		));

		redirect('admin/rates/packages');

	}

	public function delete_package($id)
	{

		if($this->input->server('REQUEST_METHOD') !== 'POST') {
			show_404();
		}

		$this->db->where('id', $id)
			->delete('packages');

		redirect('admin/rates/packages');

	}

}