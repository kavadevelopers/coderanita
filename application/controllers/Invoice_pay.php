<?php
class Invoice_pay extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->auth->check_session();
	}

	public function new()
	{
		$data['_title']		= "New";
		$data['list']		= $this->db->get_where('invoice_payments',['status' => "0"])->result_array();
		$this->load->theme('invpayments/new',$data);	
	}

	public function approved()
	{
		$data['_title']		= "Approved Payments";
		$data['list']		= $this->db->order_by('id','desc')->limit(200)->get_where('invoice_payments',['status' => "1"])->result_array();
		$this->load->theme('invpayments/approved',$data);	
	}

	public function rejected()
	{
		$data['_title']		= "Rejected Payments";
		$data['list']		= $this->db->order_by('id','desc')->limit(200)->get_where('invoice_payments',['status' => "2"])->result_array();
		$this->load->theme('invpayments/rejected',$data);	
	}

	public function approve($id)
	{
		$payment = getInvPayment($id);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$payment['url']."/approve-payment-amount-inv/".$payment['pay_id']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);

        $this->db->where('id',$id)->update('invoice_payments',['status' => '1']);
		$this->session->set_flashdata('msg', 'Payment Approved');
		redirect(base_url('invoice_pay/new'));
	}

	public function reject($id)
	{
		$payment = getInvPayment($id);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$payment['url']."/reject-payment-amount-inv/".$payment['pay_id']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);

		$this->db->where('id',$id)->update('invoice_payments',['status' => '2']);
		$this->session->set_flashdata('msg', 'Payment Rejected');
		redirect(base_url('invoice_pay/new'));
	}

	public function update()
	{
		$this->db->where('id',$this->input->post('id'))->update('invoice_payments',['amount' => $this->input->post('amount')]);

		$payment = getInvPayment($this->input->post('id'));
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$payment['url']."/change-payment-amount-inv/".$payment['pay_id'].'/'.$payment['amount']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);
        //echo $payment['url']."/change-payment-amount-inv/".$payment['pay_id'].'/'.$payment['amount'];exit;
		$this->session->set_flashdata('msg', 'Amount Changed');
		redirect(base_url('invoice_pay/new'));
	}
}