<?php 

class user extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index($nama,$npm){
        $data['m_data']= $this->m_data->get_data();
        $this->load->view('v_user_t',$data);
	}
	function admin($nama,$npm){
        $data['m_data']= $this->m_data->get_data();
        $this->load->view('v_admin',$data);
	}
	function daftaruser($nama,$npm){
		$data['m_data']= $this->m_data->data_u();
		$this->load->view('v_daftaruser',$data);
	}
}