<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$data['sliders'] = $this->db->select('filename')
			->from('sliders')
			->get()
			->result();

		$data['packages'] = $this->db->select('name, rate')
			->from('packages')
			->get()
			->result();

		$data['rates'] = $this->db->select('id, attraction, rate, attraction_id')
			->from('rates')
			->where('attraction_id', 0)
			->get()
			->result();

		if($data['rates']) {
			foreach($data['rates'] as $key => $rate) {
				$data['rates'][$key]->sub_attractions = $this->db->select('attraction, rate')
					->from('rates')
					->where('attraction_id', $rate->id)
					->get()
					->result();
			}
		}

		$this->load->view('web/homepage/index', $data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */