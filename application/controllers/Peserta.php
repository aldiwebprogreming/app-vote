<?php 
	
	/**
	 * 
	 */
	class Peserta extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
		}

		function index(){

			$this->load->view('template/header2');
			$this->load->view('peserta/dashboard');
			$this->load->view('template/footer');
		}


		function upload(){

				 $this->load->helper(array('form', 'url'));

			 $this->form_validation->set_rules('judul', 'title product', 'required|trim');
			  $this->form_validation->set_rules('keterangan', 'description ', 'required|trim');
			
			  if ($this->form_validation->run() == false) {
			  	$this->load->view('template/header2');
				$this->load->view('peserta/upload');
				$this->load->view('template/footer');
			  }else {

			  		$config['upload_path']          = './produk/';
					$config['allowed_types']        = 'gif|jpg|png';
					$config['max_size']             = 100;
					$config['max_width']            = 1024;
					$config['max_height']           = 768;

					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('gambar_cake')){
						$error = array('error' => $this->upload->display_errors());
						$this->load->view('v_upload', $error);
					}else{
						
						$neme_produk = $_FILES['gambar_cake']['name'];
						$kode_peserta = $this->session->kode_peserta;

						$kode = rand(1, 100000);
						$kode_produk = "PR".$kode;

						$data = array(
							'kode_produk' =>$kode_produk,
							'kode_peserta' => $kode_peserta,
							'judul_produk' => $this->input->post('judul'),
							'keterangan' => $this->input->post('keterangan'),
							'gambar_produk' => $neme_produk,

						);


						$inptu = $this->db->insert('tbl_produk', $data);
						$this->session->set_flashdata('message', 'swal("Success!", "product has been input successfully", "success");');
                    redirect('upload/');

					}
				}

			

		}
	}

 ?>