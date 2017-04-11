<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminSlider extends CI_Controller {

	public function __construct()
	{

		parent::__construct();

	}

	public function index()
	{

		$data['records'] = $this->db->select('id, filename, title, subtitle')
			->from('sliders')
			->order_by('id', 'desc')
			->get();
		$data['csrf']['name'] = $this->security->get_csrf_token_name();
		$data['csrf']['hash'] = $this->security->get_csrf_hash();
		$data['content'] = $this->load->view('admin/sliders/index', $data, true);

		$data['page_level_css'] = $this->load->view('admin/sliders/page-level-css', null, true);
		$data['page_level_javascripts'] = $this->load->view('admin/sliders/page-level-javascripts', null, true);
		$data['page_level_javascripts_inits'] = $this->load->view('admin/sliders/page-level-javascript-inits', null, true);

		$this->load->view('admin/template/template', $data);

	}

	public function create()
	{

		if($this->input->server('REQUEST_METHOD') !== 'POST') {
			show_404();
		}


		$config['upload_path'] = './assets/uploads/sliders/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

		if($this->upload->do_upload('image')) {
			include './application/libraries/ImageResize.php';

			$image = $this->upload->data();

			$this->db->insert('sliders', array(
				'filename' => $image['file_name'],
				'title' => $this->input->post('title'),
				'subtitle' => $this->input->post('subtitle')
			));

			$thumb = new \Eventviva\ImageResize('./assets/uploads/sliders/' . $image['file_name']);
			$thumb->resize(450, 250);
			$thumb->save('./assets/uploads/sliders/thumb_' . $image['file_name']);

			redirect('admin/sliders');
		} else {
			show_error($this->upload->display_errors());
		}

	}

	public function update($id)
	{

		if($this->input->server('REQUEST_METHOD') !== 'POST') {
			show_404();
		}

		$record = $this->db->select('id, filename')
			->from('sliders')
			->where('id', $id)
			->get()
			->row();

		$config['upload_path'] = './assets/uploads/sliders/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

		if($this->upload->do_upload('image')) {
			include './application/libraries/ImageResize.php';

			$image = $this->upload->data();

			$this->db->where('id', $id);
			$this->db->update('sliders', array(
				'filename' => $image['file_name'],
				'title' => $this->input->post('title'),
				'subtitle' => $this->input->post('subtitle')
			));

			$thumb = new \Eventviva\ImageResize('./assets/uploads/sliders/' . $image['file_name']);
			$thumb->resize(450, 250);
			$thumb->save('./assets/uploads/sliders/thumb_' . $image['file_name']);

			if($record) {
				unlink('./assets/uploads/sliders/' . $record->filename);
				unlink('./assets/uploads/sliders/thumb_' . $record->filename);
			}
		} else {
			$this->db->where('id', $id);
			$this->db->update('sliders', array(
				'title' => $this->input->post('title'),
				'subtitle' => $this->input->post('subtitle')
			));
		}

		redirect('admin/sliders');

	}

	public function delete($id)
	{

		if($this->input->server('REQUEST_METHOD') !== 'POST') {
			show_404();
		}

		$record = $this->db->select('id, filename')
			->from('sliders')
			->where('id', $id)
			->get()
			->row();

		if( ! $record) {
			show_error('Record does\'nt exist');
		}

		$this->db->where('id', $id)
			->delete('sliders');

		unlink('./assets/uploads/sliders/' . $record->filename);
		unlink('./assets/uploads/sliders/thumb_' . $record->filename);

		redirect('admin/sliders');

	}

}