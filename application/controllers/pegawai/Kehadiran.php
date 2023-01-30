<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadiran extends CI_Controller {

    public function index(){
        // Cek login
		if($this->session->userdata('sts_login') != true){
			redirect('Welcome');
		}else{
			$data['title'] = 'Kehadiran';
			$data['sub_title'] = 'List';
			$data['breadcrumb'] = '
        		<li class="active"><a href="'.base_url().'pegawai/kehadiran"><i class="fa fa-dashboard"></i> Kehadiran</a></li>
			';
			$data['hadir'] = $this->crud->selectAllOrderby('pegawai','id','asc')->result();
			$this->template->view('kehadiran/index',$data);
		}
    }

}