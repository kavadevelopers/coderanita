<?php
class Withdraw extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function new()
	{
		$data['_title']		= "New Withdraw";
		$data['list']		= $this->db->get_where('withdraw',['status' => "0"])->result_array();
		$this->load->theme('withdraw/new',$data);	
	}

	public function approved()
	{
		$data['_title']		= "Approved Withdraw";
		$data['list']		= $this->db->order_by('id','desc')->limit(200)->get_where('withdraw',['status' => "1"])->result_array();
		$this->load->theme('withdraw/approved',$data);	
	}

	public function rejected()
	{
		$data['_title']		= "Rejected Withdraw";
		$data['list']		= $this->db->order_by('id','desc')->limit(200)->get_where('withdraw',['status' => "2"])->result_array();
		$this->load->theme('withdraw/rejected',$data);	
	}

	public function approve($id)
	{
		$deposit = getWithdraw($id);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$deposit['url']."/user-withdrawal-approve-code/".$deposit['deposit_id']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);

        $this->db->where('id',$id)->update('deposit',['status' => '1']);
		$this->session->set_flashdata('msg', 'Deposit Approved');
		redirect(base_url('deposit/new'));
	}

	public function reject($id)
	{
		$withdraw = getWithdraw($id);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$withdraw['url']."/user-withdrawal-reject-code/".$withdraw['with_id']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);

		$this->db->where('id',$id)->update('withdraw',['status' => '2']);
		$this->session->set_flashdata('msg', 'Withdraw Rejected');
		redirect(base_url('withdraw/new'));
	}
}