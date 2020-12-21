<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

function pre_print($array)
{   
    echo count($array);
    echo "<pre>";
    print_r($array);
    exit;
}

function retJson($array){
    header("Content-type: application/json");
    echo json_encode($array);
}

function _vdatetime($datetime)
{
	return date('d-m-Y h:i A',strtotime($datetime));
}

function _sortdate($datetime)
{
    if($datetime!=""){
        return date('Ymd',strtotime($datetime));
    }else{
        return "";
    }
}

function getTommorrow()
{
    return date('Y-m-d',strtotime("-1 day",strtotime(date('Y-m-d'))));
}

function vd($date)
{
    return date('d-m-Y',strtotime($date));
}

function vfd($date)
{
    return date('F d, Y',strtotime($date));
}

function dd($date)
{
    return date('Y-m-d',strtotime($date));
}


function dt($time){
    return date('H:i:s',strtotime($time));   
}

function vt($time){
    return date('h:i A',strtotime($time));   
}

function getPretyDateTime($date)
{
    return date('d M Y h:i A',strtotime($date));
}

function rs()
{
    return "₹";
}  

function getFileExtension($filename){
    return pathinfo($filename, PATHINFO_EXTENSION);
}

function get_setting()
{
	$ci=& get_instance();
    $ci->load->database();
    return $ci->db->get_where('setting',['id' => '1'])->row_array();
}

function get_user(){
	$ci=& get_instance();
    $ci->load->database();
    return $ci->db->get_where('user',['id' => $ci->session->userdata('id')])->row_array();	
}

function menu($seg,$array)
{
    $CI =& get_instance();
    $path = $CI->uri->segment($seg);
    foreach($array as $a)
    {
        if($path === $a)
        {
          return array("active","active","pcoded-trigger");
          break;  
        }
    }
}

function newDepo()
{
    $ci=& get_instance();
    return $ci->db->get_where('deposit',['status' => "0"])->num_rows();  
}

function approvedDepo()
{
    $ci=& get_instance();
    return $ci->db->get_where('deposit',['status' => "1"])->num_rows();  
}

function rejectedDepo()
{
    $ci=& get_instance();
    return $ci->db->get_where('deposit',['status' => "2"])->num_rows();  
}

function newWith()
{
    $ci=& get_instance();
    return $ci->db->get_where('withdraw',['status' => "0"])->num_rows();  
}

function approvedWith()
{
    $ci=& get_instance();
    return $ci->db->get_where('withdraw',['status' => "1"])->num_rows();  
}

function rejectedWith()
{
    $ci=& get_instance();
    return $ci->db->get_where('withdraw',['status' => "2"])->num_rows();  
}

function getDeposit($id)
{
    $ci=& get_instance();
    return $ci->db->get_where('deposit',['id' => $id])->row_array();  
}

function getWithdraw($id)
{
    $ci=& get_instance();
    return $ci->db->get_where('withdraw',['id' => $id])->row_array();  
}

?>