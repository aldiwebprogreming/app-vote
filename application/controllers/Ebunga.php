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
			$data['produk'] = $this->db->get('tbl_produk')->result_array();

			$this->load->view('template/header', $data);
			$this->load->view('user/index', $data);
			$this->load->view('template/footer');
		}

		function vote(){

			$kode_produk = $this->input->post('kode_produk');
			$kode_peserta = $this->input->post('kode_peserta');
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$notlp = $this->input->post('notlp');

			$data = array(
			'kode_peserta' => $kode_peserta ,
			'kode_produk' => $kode_produk,
			'jumlah_vote' => 1,
			'ip_user' => $this->input->ip_address(),
			'name_vote' =>$name,
			'email_vote' => $email,
			'notlp_vote' => $notlp,
		
			 );


			$input = $this->db->insert('tbl_vote', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Vote success", "success");');
		redirect('/');


		}

		function detail($slug){


			$data['detail'] = $this->db->get_where('tbl_produk',  array('kode_produk' => $slug))->result_array();	
			$this->load->view('template/header');
			$this->load->view('user/detail', $data);
			$this->load->view('template/footer');

		}

		function registrasi(){


			$data['prov'] = $this->db->get('tbl_provisni')->result_array();

	
			$this->load->view('template/header');
			$this->load->view('peserta/registrasi', $data);
			$this->load->view('template/footer');

		}


		function register_create(){
			$data = array(

				'kode_peserta' => '343434',
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'no_telp' => $this->input->post('notlp'),
				'prov' => $this->input->post('prov'),
				'kab' => $this->input->post('kab'),
				'kec' => $this->input->post('kec'),
				'kel' => $this->input->post('kel'),
				'pass' => $this->input->post('pass2'),
				'date_registrasi' => ''
			 );


			$input = $this->input
		}


		function kab($id){
			
			$data['kab'] = $this->db->get_where('tbl_kabupaten', array('province_id' => $id))->result_array();

			$this->load->view('peserta/kab.php', $data);
		}


		function kec($id){
			
			$data['kec'] = $this->db->get_where('tbl_kecamatan', array('regency_id' => $id))->result_array();

			$this->load->view('peserta/kec.php', $data);
		}


		function kel($id){
			
			$data['kel'] = $this->db->get_where('tbl_kelurahan', array('district_id' => $id))->result_array();

			$this->load->view('peserta/kel.php', $data);
		}
	}

 ?>