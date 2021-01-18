<?php
class Modification_req extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function active()
	{
		$data['_title']		= "Active Modification Request";
		$data['list']		= $this->db->get_where('modification_request',['status' => '0'])->result_array();
		$this->load->theme('modification/active',$data);	
	}

	public function old()
	{
		$data['_title']		= "Old Modification Request";
		$data['list']		= $this->db->get_where('modification_request',['status' => '1'])->result_array();
		$this->load->theme('modification/old',$data);	
	}

	public function goold($id)
	{
		$this->db->where('id',$id)->update('modification_request',['status' => '1']);
		$this->session->set_flashdata('msg', 'Status Changed');
		redirect(base_url('modification_req/active'));
	}

	public function delete($id,$type)
	{
		$this->db->where('id',$id)->delete('modification_request');
		$this->session->set_flashdata('msg', 'Request Deleted');
		if($type == "active"){
			redirect(base_url('modification_req/active'));
		}else{
			redirect(base_url('modification_req/old'));
		}
	}

}