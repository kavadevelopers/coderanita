<?php
class Deposit extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}


	public function new()
	{
		$data['_title']		= "New Deposit";
		$data['list']		= $this->db->get_where('deposit',['status' => "0"])->result_array();
		$this->load->theme('deposit/new',$data);	
	}

	public function approved()
	{
		$data['_title']		= "Approved Deposit";
		$data['list']		= $this->db->order_by('id','desc')->limit(200)->get_where('deposit',['status' => "1"])->result_array();
		$this->load->theme('deposit/approved',$data);	
	}

	public function rejected()
	{
		$data['_title']		= "Rejected Deposit";
		$data['list']		= $this->db->order_by('id','desc')->limit(200)->get_where('deposit',['status' => "2"])->result_array();
		$this->load->theme('deposit/rejected',$data);	
	}

	public function approve($id)
	{
		$deposit = getDeposit($id);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$deposit['url']."/user-deposit-approve/".$deposit['deposit_id']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);

        $this->db->where('id',$id)->update('deposit',['status' => '1']);
		$this->session->set_flashdata('msg', 'Deposit Approved');
		redirect(base_url('deposit/new'));
	}

	public function reject($id)
	{
		$deposit = getDeposit($id);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$deposit['url']."/user-deposit-reject/".$deposit['deposit_id']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);

		$this->db->where('id',$id)->update('deposit',['status' => '2']);
		$this->session->set_flashdata('msg', 'Deposit Rejected');
		redirect(base_url('deposit/new'));
	}


	public function checkPost($id)
	{
		$deposit = getDeposit($id);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$deposit['url']."/user-deposit-approve/".$deposit['deposit_id']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);

        print_r($res);
	}
}