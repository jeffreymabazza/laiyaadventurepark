<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
phpinfo();
exit;
		$data['sliders'] = $this->db->select('title, subtitle, filename')
			->from('sliders')
			->get()
			->result();

		$data['packages'] = $this->db->select('id, name, rate')
			->from('packages')
			->get()
			->result();

		$data['promo_copy'] = $this->db->select('content')
			->from('rates_settings')
			->where('type', FOR_PROMO)
			->get()
			->row();

		$data['promo_rates'] = $this->db->select('id, attraction, rate, attraction_id, package_id, is_promo')
			->from('rates')
			->where('attraction_id', 0)
			->where('is_promo', 1)
			->get()
			->result();

		if($data['promo_rates']) {
			foreach($data['promo_rates'] as $key => $rate) {
				$data['promo_rates'][$key]->sub_attractions = $this->db->select('attraction, rate, package_id, is_promo')
					->from('rates')
					->where('attraction_id', $rate->id)
					->where('is_promo', 1)
					->get()
					->result();
			}
		}

		$data['regular_copy'] = $this->db->select('content')
			->from('rates_settings')
			->where('type', FOR_REGULAR)
			->get()
			->row();

		$data['regular_rates'] = $this->db->select('id, attraction, rate, attraction_id, package_id, is_promo')
			->from('rates')
			->where('attraction_id', 0)
			->where('is_promo', 0)
			->get()
			->result();

		if($data['regular_rates']) {
			foreach($data['regular_rates'] as $key => $rate) {
				$data['regular_rates'][$key]->sub_attractions = $this->db->select('attraction, rate, package_id, is_promo')
					->from('rates')
					->where('attraction_id', $rate->id)
					->where('is_promo', 0)
					->get()
					->result();
			}
		}

		$this->load->view('web/homepage/index', $data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */