<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function tambah(){
		// Cek login
		if($this->session->userdata('sts_login') != true){
			redirect('Welcome');
		}else{
			$data['title'] = 'Dashboard';
			$data['sub_title'] = '';
			$data['breadcrumb'] = '
				<li class="active"><a href="#"><i class="fa fa-dashboard"></i> Pegawai</a></li>
        		<!--<li class="active">Invoice</li>-->
			';

			$this->template->view('dashboard',$data);
		}
	}
