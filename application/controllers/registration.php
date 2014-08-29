<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Registration Controller
// Jason Leyanna 08/2014
class Registration extends CI_Controller {

	// Main Function
	public function index()
	{		
		// nothing here for now
	}
	// Admin View Function
	public function admin()
	{
		// load model
		$this->load->model('registration_model');
		// get all entries
		$data['registrations'] = $this->registration_model->get_all_entries();
		// display view
		$this->load->view('registration_admin', $data);
	}
	// Registration Function
	public function reg()
	{	
		// Form Validation
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('address_1', 'Address', 'required');
		$this->form_validation->set_rules('address_2', 'Address 2', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('zip', 'Zip Code', 'required|numeric|callback_zipcode_check');
		$this->form_validation->set_rules('country', 'Country', 'required|callback_country_check');
		
		// load model
		$this->load->model('registration_model');
	
		// if post
		if ($this->input->post() && $this->form_validation->run()):	

			// array of posted data
			$data_input = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'address_1' => $this->input->post('address_1'),
				'address_2' => $this->input->post('address_2'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'zip' => $this->input->post('zip'),
				'country' => $this->input->post('country'),
				'date_time' => date('Y-m-d H:i:s')
			);
			// insert data
			$success_insert = $this->registration_model->insert_entry($data_input);
			if ($success_insert):
				// success
				$this->success();				
			endif;
		else:	
			$this->load->view('registration');
		endif;
	}
	// Success of Regristration
	public function success()
	{
		$this->load->view('confirmation');
	}
	// Check Zipcode Callback Function
	public function zipcode_check($str)
	{
		if (strlen($str) == 5 || strlen($str) == 9)
		{
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('zipcode_check', 'The %s must be 5 or 9 digits.');
			return FALSE;
		}
	}
	// Check Country Callback Function
	public function country_check($str)
	{
		if ($str == "US")
		{
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('country_check', 'The country must be US.');
			return FALSE;
		}
	}
}

/* End of file registration.php */
/* Location: ./application/controllers/registration.php */