<?php 

	/**
	 * 
	 */
	class Ebunga extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();	
		}


		function index(){

			$data['title'] = "ebunga";
			$this->load->view('template/header', $data);
			$this->load->view('user/index');
			$this->load->view('template/footer');
		}
	}

 ?>