<?php
class Setting extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function index()
	{
		$data['_title']		= "Settings";
		$this->load->theme('setting/index',$data);
	}

	public function save()
	{
		$this->form_validation->set_error_delimiters('<div class="val-error">', '</div>');
		$this->form_validation->set_rules('company', 'Company Name','trim|required');
		$this->form_validation->set_rules('bitwallet', 'Bitcoin Wallet Id','trim|required');
		$this->form_validation->set_rules('comission', 'Comission Percentage','trim|required');
		$this->form_validation->set_rules('pcard_comission', 'Physical Card Comission Percentage','trim|required');
		$this->form_validation->set_rules('vcard_comission', 'Virtual Card Comission Percentage','trim|required');
		$this->form_validation->set_rules('pcard_fees', 'Virtual Card Fees','trim|required');
		$this->form_validation->set_rules('vcard_fees', 'Virtual Card Fees','trim|required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['_title']	= 'Settings';
			$this->load->theme('setting/index',$data);
		}
		else
		{ 
			$data = [
				'name'								=> $this->input->post('company'),
				'bitwallet'							=> $this->input->post('bitwallet'),
				'comission'							=> $this->input->post('comission'),
				'wcomission'						=> $this->input->post('wcomission'),
				'pcard_comission'					=> $this->input->post('pcard_comission'),
				'vcard_comission'					=> $this->input->post('vcard_comission'),
				'pcard_fees'						=> $this->input->post('pcard_fees'),
				'vcard_fees'						=> $this->input->post('vcard_fees')
			];

			$this->db->where('id','1');
			$this->db->update('setting',$data);

			$this->session->set_flashdata('msg', 'Settings Saved');
	        redirect(base_url('setting'));
		}
	}
}
?>