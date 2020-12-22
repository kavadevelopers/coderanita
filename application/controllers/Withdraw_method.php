<?php
class Withdraw_method extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}


	public function index()
	{
		$data['_title']		= "Withdraw Methods";
		$data['type']		= "0";
		$data['list']		= $this->db->get_where('withdraw_method')->result_array();
		$this->load->theme('withdraw_method/index',$data);	
	}


	public function save()
	{
		$data = [
			'name'		=> $this->input->post('method'),
			'title'		=> $this->input->post('title')
		];

		$this->db->insert('withdraw_method',$data);
		$this->session->set_flashdata('msg', 'Withdraw method added');
		redirect(base_url('withdraw_method'));
	}

	public function edit($id)
	{
		$data['_title']		= "Withdraw Methods Edit";
		$data['type']		= "1";
		$data['list']		= $this->db->get_where('withdraw_method')->result_array();
		$data['single']		= $this->db->get_where('withdraw_method',['id' => $id])->row_array();
		$this->load->theme('withdraw_method/index',$data);		
	}

	public function update()
	{
		$data = [
			'name'		=> $this->input->post('method'),
			'title'		=> $this->input->post('title')
		];

		$this->db->where('id',$this->input->post('id'))->update('withdraw_method',$data);
		$this->session->set_flashdata('msg', 'Withdraw method updated');
		redirect(base_url('withdraw_method'));
	}

	public function delete($id)
	{
		$this->db->where('id',$id)->delete('withdraw_method');
		$this->session->set_flashdata('msg', 'Withdraw method deleted');
		redirect(base_url('withdraw_method'));
	}
}