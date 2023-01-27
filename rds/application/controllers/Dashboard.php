<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){
		// Cek login
		if($this->session->userdata('sts_login') != true){
			redirect('Welcome');
		}else{
			$data['title'] = 'Dashboard';
			$data['sub_title'] = '';
			$data['breadcrumb'] = '
				<li class="active"><a href="'.base_url().'dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        		<!--<li class="active">Invoice</li>-->
			';

			$this->template->view('dashboard',$data);
		}
	}

}