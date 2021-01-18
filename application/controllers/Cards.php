<?php
class Cards extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function pricing()
	{
		$data['_title']		= "Card Pricing";
		$data['type']		= "0";
		$data['list']		= $this->db->get_where('card_pricing')->result_array();
		$this->load->theme('cards/pricing',$data);	
	}

	public function new()
	{
		$data['_title']		= "New Card Requests";
		$data['list']		= $this->db->get_where('card_order',['status' => '0'])->result_array();
		$this->load->theme('cards/new',$data);	
	}

	public function approved()
	{
		$data['_title']		= "Approved Card Requests";
		$data['list']		= $this->db->get_where('card_order',['status' => '1'])->result_array();
		$this->load->theme('cards/approved',$data);	
	}

	public function approve($id)
	{
		$this->db->where('id',$id)->update('card_order',['status' => '1']);
		$this->session->set_flashdata('msg', 'Status Changed');
		redirect(base_url('cards/new'));
	}

	public function edit_pricing($id)
	{
		$data['_title']		= "Card Pricing Edit";
		$data['type']		= "1";
		$data['list']		= $this->db->get_where('card_pricing')->result_array();
		$data['single']		= $this->db->get_where('card_pricing',['id' => $id])->row_array();
		$this->load->theme('cards/pricing',$data);		
	}

	public function delete_pricing($id)
	{
		$this->db->where('id',$id)->delete('card_pricing');
		$this->session->set_flashdata('msg', 'Pricing deleted');
		redirect(base_url('cards/pricing'));
	}

	public function save_pricing()
	{
		$data = [
			'name'		=> $this->input->post('name'),
			'price'		=> $this->input->post('price')
		];

		$this->db->insert('card_pricing',$data);
		$this->session->set_flashdata('msg', 'Pricing added');
		redirect(base_url('cards/pricing'));
	}

	public function update_pricing()
	{
		$data = [
			'name'		=> $this->input->post('name'),
			'price'		=> $this->input->post('price')
		];

		$this->db->where('id',$this->input->post('id'))->update('card_pricing',$data);
		$this->session->set_flashdata('msg', 'Pricing saved');
		redirect(base_url('cards/pricing'));	
	}
}