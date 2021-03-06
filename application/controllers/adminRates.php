<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminRates extends CI_Controller {

	public function __construct()
	{

		parent::__construct();

	}

	public function rates_index()
	{

		$data['records'] = $this->db->select('id, attraction, rate, is_sub_attraction, attraction_id, package_id, is_promo')
			->from('rates')
			->where('is_promo', isset($_GET['is_promo']) ? 1 : 0)
			->get()
			->result();
		$data['attractions'] = $this->db->select('id, attraction, attraction_id, is_promo')
			->from('rates')
			->where('attraction_id', 0)
			->where('is_promo', isset($_GET['is_promo']) ? 1 : 0)
			->get()
			->result();
		$data['packages'] = $this->db->select('id, name')
			->from('packages')
			->get();
		$data['packages_array'] = array_column($data['packages']->result_array(), 'name', 'id');

		// $packages_array = $data['packages']->result_array();
		// $test = array_column($packages_array, 'name', 'id');
		// echo '<pre>';
		// var_dump(array_search('2', array_flip($test)));
		// exit;

		$data['csrf']['name'] = $this->security->get_csrf_token_name();
		$data['csrf']['hash'] = $this->security->get_csrf_hash();
		$data['content'] = $this->load->view('admin/rates/rates/index', $data, true);

		$this->load->view('admin/template/template', $data);

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