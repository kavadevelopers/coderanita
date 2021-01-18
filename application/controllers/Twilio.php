<?php
class Twilio extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function active()
	{
		$data['_title']		= "Active Twilio Orders";
		$data['list']		= $this->db->get_where('twilio_order',['status' => '0'])->result_array();
		$this->load->theme('twilio/active',$data);	
	}

	public function old()
	{
		$data['_title']		= "Old Twilio Orders";
		$data['list']		= $this->db->get_where('twilio_order',['status' => '1'])->result_array();
		$this->load->theme('twilio/old',$data);	
	}

	public function goold($id)
	{
		$this->db->where('id',$id)->update('twilio_order',['status' => '1']);
		$this->session->set_flashdata('msg', 'Status Changed');
		redirect(base_url('twilio/active'));
	}

	public function delete($id,$type)
	{
		$this->db->where('id',$id)->delete('twilio_order');
		$this->session->set_flashdata('msg', 'Request Deleted');
		if($type == "active"){
			redirect(base_url('twilio/active'));
		}else{
			redirect(base_url('twilio/old'));
		}
	}

}