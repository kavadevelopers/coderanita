<?php
class Api extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function get_setting()
	{
		$setting = get_setting();
		retJson(['bitwallet' => $setting['bitwallet'],'comission' => $setting['comission'],'wcomission' => $setting['wcomission'],'pcard_comission' => $setting['pcard_comission'],'vcard_comission' => $setting['vcard_comission']]);
	}

	public function get_withdraw_methods()
	{
		$result = $this->db->get_where('withdraw_method',['status' => '1'])->result_array();
		retJson($result);	
	}

	public function get_card_pricing()
	{
		$result = $this->db->get_where('card_pricing')->result_array();
		$setting = get_setting();
		retJson(['pricing' => $result,'pcard_comission' => $setting['pcard_comission'],'vcard_comission' => $setting['vcard_comission'],'pcard_fees' => $setting['pcard_fees'],'vcard_fees' => $setting['vcard_fees'],'bitwallet' => $setting['bitwallet'],'twillio_comission' => $setting['twillio_comission']]);
	}

	public function deposit()
	{
		if($this->input->post('bank')){
			$data = [
				'bank'				=> $this->input->post('bank'),
				'deposit_id'		=> $this->input->post('deposit_id'),
				'amount'			=> $this->input->post('amount'),
				'deptype'			=> $this->input->post('deptype'),
				'file'				=> $this->input->post('file'),
				'url'				=> $this->input->post('url'),
				'remarks'			=> $this->input->post('remarks'),
				'comission'			=> $this->input->post('comission'),
				'btc_val'			=> $this->input->post('btc_val'),
				'depo_date'			=> date('Y-m-d',strtotime($this->input->post('depo_date'))),
				'created_at'		=> date('Y-m-d H:i:s')
			];
			$this->db->insert('deposit',$data);
		}else{
			echo retJson(['return' => "Not Allowed"]);
		}
	}

	public function withdraw()
	{
		if($this->input->post('bank')){
			$data = [
				'bank'				=> $this->input->post('bank'),
				'with_id'			=> $this->input->post('with_id'),
				'amount'			=> $this->input->post('amount'),
				'comission'			=> $this->input->post('comission'),
				'withtype'			=> $this->input->post('withtype'),
				'url'				=> $this->input->post('url'),
				'withid'			=> $this->input->post('withid'),
				'bitrate'			=> $this->input->post('bitrate'),
				'hash'				=> $this->input->post('hash'),
				'withdate'			=> date('Y-m-d',strtotime($this->input->post('withdate'))),
				'created_at'		=> date('Y-m-d H:i:s')
			];
			$this->db->insert('withdraw',$data);
		}else{
			echo retJson(['return' => "Not Allowed"]);
		}
	}	

	public function save_card_request()
	{
		if($this->input->post('bank')){
			$data = [
				'bank'				=> $this->input->post('bank'),
				'ctype'				=> $this->input->post('ctype'),
				'amount'			=> $this->input->post('amount'),
				'address'			=> $this->input->post('address'),
				'hash'				=> $this->input->post('hash'),
				'url'				=> $this->input->post('url'),
				'bitsend'			=> $this->input->post('bitsend'),
				'bitrate'			=> $this->input->post('bitrate'),
				'created_at'		=> date('Y-m-d H:i:s')
			];
			$this->db->insert('card_order',$data);
		}else{
			echo retJson(['return' => "Not Allowed"]);
		}
	}

	public function save_modification()
	{
		if($this->input->post('subject')){
			$data = [
				'subject'			=> $this->input->post('subject'),
				'email'				=> $this->input->post('email'),
				'message'			=> $this->input->post('message'),
				'cat'				=> date('Y-m-d H:i:s')
			];
			$this->db->insert('modification_request',$data);
		}else{
			echo retJson(['return' => "Not Allowed"]);
		}
	}
}