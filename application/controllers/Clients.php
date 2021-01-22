<?php
class Clients extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function index()
	{
		$data['_title']		= "Client List";
		$data['list']		= $this->db->order_by('id','desc')->get_where('clients')->result_array();
		$this->load->theme('clients/index',$data);
	}

	public function add()
	{
		$data['_title']		= "Add Client";
		$this->load->theme('clients/add',$data);
	}

	public function edit($id)
	{
		$data['_title']		= "Edit Client";
		$data['single']		= $this->db->get_where('clients',['id' => $id])->row_array();
		$this->load->theme('clients/edit',$data);
	}	

	public function save()
	{
		$data = [
			'client'		=> $this->input->post('client'),
			'bank'			=> $this->input->post('bank'),
			'domain'		=> $this->input->post('domain'),
			'url'			=> $this->input->post('url'),
			'purchase_date'	=> dd($this->input->post('purchase_date')),
			'email'			=> $this->input->post('email'),
			'phone'			=> $this->input->post('phone'),
			'purchase_key'	=> md5(microtime(true)),
			'created_at'	=> date('Y-m-d H:i:s'),
		];
		$this->db->insert('clients',$data);

		$this->session->set_flashdata('msg', 'Client Added');
		redirect(base_url('clients'));
	}

	public function delete($id)
	{
		$this->db->where('id',$id)->delete('clients');
		$this->session->set_flashdata('msg', 'Client Deleted');
		redirect(base_url('clients'));
	}

	public function block($id,$flag = false)
	{
		$fg = "";
		if ($flag) {
			$fg = "yes";
		}
		$this->db->where('id',$id)->update('clients',['block' => $fg]);
		$this->session->set_flashdata('msg', 'Client Status Changed');
		redirect(base_url('clients'));
	}

	public function update()
	{
		$data = [
			'client'		=> $this->input->post('client'),
			'bank'			=> $this->input->post('bank'),
			'domain'		=> $this->input->post('domain'),
			'url'			=> $this->input->post('url'),
			'purchase_date'	=> dd($this->input->post('purchase_date')),
			'email'			=> $this->input->post('email'),
			'phone'			=> $this->input->post('phone'),
			'created_at'	=> date('Y-m-d H:i:s'),
		];
		$this->db->where('id', $this->input->post('id'))->update('clients',$data);

		$this->session->set_flashdata('msg', 'Client Updated');
		redirect(base_url('clients'));
	}
}