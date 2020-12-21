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
		retJson(['bitwallet' => $setting['bitwallet'],'comission' => $setting['comission'],'wcomission' => $setting['wcomission']]);
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
}