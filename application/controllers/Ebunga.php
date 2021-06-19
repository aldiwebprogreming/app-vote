<?php 

	/**
	 * 
	 */
	class Ebunga extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();	
			 $this->load->library('form_validation');
		}


		function index(){

			$data['title'] = "ebunga";
			$data['produk'] = $this->db->get('tbl_produk')->result_array();

			foreach ($data['produk'] as $vote) {
				$kp = $vote['kode_produk'];

				$data['vote2'] = $this->db->get_where('tbl_vote', array('kode_produk' => $kp ))->num_rows();
				

			}


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

			$cek = $this->db->get_where('tbl_vote',   array('email_vote' => $email))->num_rows();

			if ($cek >= 1) {
				$this->session->set_flashdata('message', 'swal("Maaf!", "Anda sudah vote", "warning");');

			redirect('/');
				
			} else {

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


		}

		function detail($slug){


			$data['data'] = $this->db->get_where('tbl_produk',  array('kode_produk' => $slug))->row_array();

			$kp = $data['data']['kode_peserta'];
			$kpr = $data['data']['kode_produk'];

			$kab = $this->db->get_where('tbl_registrasi_peserta',array('kode_peserta' => $kp))->row_array();
			$kab2 = $kab['kab'];

			$data['kab'] = $this->db->get_where('tbl_kabupaten', array('id' => $kab2))->row_array();
			$data['vote'] = $this->db->get_where('tbl_vote', array('kode_produk' => $kpr))->num_rows();


			$this->load->view('template/header');
			$this->load->view('user/detail', $data);
			$this->load->view('template/footer');

		}

		function registrasi(){

			 $this->form_validation->set_rules('name', 'Name', 'required|trim');
        	$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_registrasi_peserta.email]', [
            'is_unique' => 'This email has already registered!']);
        	$this->form_validation->set_rules('notelp', 'No.telp', 'required|trim|min_length[11]|max_length[13]');
        	$this->form_validation->set_rules('name_store', 'Store', 'required|trim');
        	$this->form_validation->set_rules('kab', 'Kabupaten', 'required|trim');
        	$this->form_validation->set_rules('kec', 'Kecamatan', 'required|trim');
        	$this->form_validation->set_rules('kel', 'Kelurahan', 'required|trim');
        	$this->form_validation->set_rules('pass1', 'Password', 'required|trim|min_length[5]|matches[pass2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
       		 ]);
        	$this->form_validation->set_rules('pass2', 'Password', 'required|trim|matches[pass1]');


        	if ($this->form_validation->run() == false) {

			$data['prov'] = $this->db->get('tbl_provisni')->result_array();	
			$this->load->view('template/header');
			$this->load->view('peserta/registrasi', $data);
			$this->load->view('template/footer');

		}else {
			$kode = rand(1, 100000);
			$kode_peserta = "RG".$kode;
			$data = array(
				'kode_peserta' => $kode_peserta,
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'no_telp' => $this->input->post('notelp'),
				'name_store' => $this->input->post('name_store'),
				'prov' => $this->input->post('prov'),
				'kab' => $this->input->post('kab'),
				'kec' => $this->input->post('kec'),
				'kel' => $this->input->post('kel'),
				'pass' => password_hash($this->input->post('pass2'), PASSWORD_DEFAULT),
				
			 );

			$input = $this->db->insert('tbl_registrasi_peserta', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account</div>');
				$this->session->set_flashdata('message', 'swal("Congratulation! your account has been created.", "Please activate your account", "success");');
            redirect('/login');

		}

		}


		function login(){


		  $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
       	 $this->form_validation->set_rules('pass', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
			
			$this->load->view('template/header');
			$this->load->view('peserta/login');
			$this->load->view('template/footer');
			}else {
            // validasinya success
            $this->_login();
       	 }
		} 


		function _login(){

			$email = $this->input->post('email');
	        $password = $this->input->post('pass');

	        $user = $this->db->get_where('tbl_registrasi_peserta', ['email' => $email])->row_array();
	        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['pass'])) {
                    $data = [
                        'email' => $user['email'],
                        'name' => $user['name'],
                        'kode_peserta' => $user['kode_peserta'],
                        'nama_toko' => $user['name_store'],
                    ];

                    $this->session->set_userdata($data);
                    redirect('dashboard/');
                    
                } else {
                   
                    $this->session->set_flashdata('message', 'swal("Wrong password", "please login with correct password", "warning");');
                    redirect('login/');
                }
            } else {
               
                    $this->session->set_flashdata('message', 'swal("This email has not been activated!", "please activate your account", "warning");');
                    redirect('login/');
            }
        } else {
        
             $this->session->set_flashdata('message', 'swal("Email is not registered!", "please register", "error");');
                    redirect('login/');
        }

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

		 public function logout(){
        $this->session->unset_userdata('kode_peserta');
        $this->session->unset_userdata('email');
         $this->session->unset_userdata('name');

        redirect('login ');
    }


	}

 ?>