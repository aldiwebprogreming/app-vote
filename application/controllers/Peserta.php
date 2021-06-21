<?php 
	
	/**
	 * 
	 */
	class Peserta extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('name') == NULL) {
				redirect('login/');
			}
			$this->load->library('form_validation');

		}

		function index(){

			$this->load->view('template/header2');
			$this->load->view('peserta/dashboard');
			$this->load->view('template/footer');
		}


		function upload(){


			$kode_peserta = $this->session->kode_peserta;




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
					$config['max_size']             = 10000;
					$config['max_width']            = 10240;
					$config['max_height']           = 76800;

					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('gambar_cake')){
						$error = array('error' => $this->upload->display_errors());
						$this->load->view('v_upload', $error);
					}else{
						
						$neme_produk = $_FILES['gambar_cake']['name'];
						$kode_peserta = $this->session->kode_peserta;
						$nama_toko = $this->session->nama_toko;

						$kode = rand(1, 100000);
						$kode_produk = "PR".$kode;

						$data = array(
							'kode_produk' =>$kode_produk,
							'kode_peserta' => $kode_peserta,
							'nama_toko' => $nama_toko,
							'judul_produk' => $this->input->post('judul'),
							'keterangan' => $this->input->post('keterangan'),
							'gambar_produk' => $neme_produk,

						);

						$cek = $this->db->get_where('tbl_produk', array('kode_peserta' => $kode_peserta ))->num_rows();
						if ($cek >= 1) {

						$this->session->set_flashdata('message', 'swal("your product already exists!", "", "warning" );');
				 		redirect('upload/');
		
							} else{


						$inptu = $this->db->insert('tbl_produk', $data);
						$this->session->set_flashdata('message', 'swal("Success!", "product has been input successfully", "success");');
                    redirect('upload/');

					}

				}
				}

			

		}


		function profil(){

			$kode_peserta = $this->session->kode_peserta;
			$data['profil'] = $this->db->get_where('tbl_registrasi_peserta', array('kode_peserta' => $kode_peserta ))->result_array();	

			foreach ($data['profil'] as $val) {
				
			}

			$prov = $val['prov'];
			$kab = $val['kab'];
			$kec = $val['kec'];
			$kel = $val['kel'];

			$data['prov'] = $this->db->get_where('tbl_provisni', array('id' => $prov))->row_array();
			$data['kab'] = $this->db->get_where('tbl_kabupaten', array('id' => $kab))->row_array();

			$data['kec'] = $this->db->get_where('tbl_kecamatan', array('id' => $kec))->row_array();

			$data['kel'] = $this->db->get_where('tbl_kelurahan', array('id' => $kel))->row_array();


			$data['cake'] = $this->db->get_where('tbl_produk',array('kode_peserta' => $kode_peserta))->row_array();

			$data['cek'] = $this->db->get_where('tbl_produk',array('kode_peserta' => $kode_peserta))->num_rows();


			$this->load->view('template/header2');
			$this->load->view('peserta/profil', $data);
			$this->load->view('template/footer');

		}


		function listVote(){

			$kode_peserta = $this->session->kode_peserta;
			$data['list'] = $this->db->query("SELECT * FROM tbl_vote WHERE kode_peserta='$kode_peserta' ORDER BY id DESC")->result_array();
			$data['jml'] = $this->db->get_where('tbl_vote', array('kode_peserta' => $kode_peserta))->num_rows();
			$this->load->view('template/header2');
			$this->load->view('peserta/list_vote', $data);
			$this->load->view('template/footer');
		}
	}

 ?>