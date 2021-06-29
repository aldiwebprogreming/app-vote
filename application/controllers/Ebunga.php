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
			  $this->load->library('pagination');
			  $this->load->model('card');
		}


		function home(){

			$this->load->view('template/header');

			$this->load->view('user/home');
			$this->load->view('template/footer');
		}


		function index(){


	

		$config['base_url'] = site_url('ebunga/index'); //site url
        $config['total_rows'] = $this->db->get_where('tbl_produk',array('status' => 1))->num_rows(); //total row
        $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div id="next" class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['produk'] = $this->card->get_produk($config["per_page"], $data['page'])->result_array();           

        $data['pagination'] = $this->pagination->create_links();

			// $data['produk'] = $this->db->get('tbl_produk')->result_array();


			$this->load->view('template/header', $data);
			$this->load->view('user/index', $data);
			$this->load->view('template/footer', $data);
			
		}

		function vote(){




			$kode_produk = $this->input->post('kode_produk');
			$kode_peserta = $this->input->post('kode_peserta');
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$notlp = $this->input->post('notlp');

			$ip = $this->input->ip_address();

			$cek = $this->db->query("SELECT * FROM tbl_vote WHERE email_vote='$email' OR ip_user ='$ip' ")->num_rows();


			if ($cek >= 1) {
				$this->session->set_flashdata('message', 'swal("Maaf!", "Anda sudah vote", "warning");');

			redirect('ebunga/');
				
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

			$data2 = array(
			'kode_peserta' => $kode_peserta ,
			'kode_produk' => $kode_produk,
			'jml' => 1,
			'date_vote' => date('Y-m-d'),
			 );


				$cek_vote2 = $this->db->get_where('tbl_vote2', array('kode_produk' =>$kode_produk))->num_rows();
				if ($cek_vote2 == 0) {
					$inputvote2 = $this->db->insert('tbl_vote2', $data2);
				}else {

					$get = $this->db->get_where('tbl_vote2', array('kode_produk' => $kode_produk))->row_array();
					$jml_vote = $get['jml'];

					$edit2 = [

							'jml' => 1+$jml_vote,

						];

						$this->db->where('kode_produk', $kode_produk);
						$this->db->update('tbl_vote2', $edit2);
				}


			$input = $this->db->insert('tbl_vote', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Vote success", "success");');
			redirect('ebunga/');

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

		function vote_detail(){




			$kode_produk = $this->input->post('kode_produk');
			$kode_peserta = $this->input->post('kode_peserta');
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$notlp = $this->input->post('notlp');

			$ip = $this->input->ip_address();
			$url = "http://localhost/app-vote/produk/detail/$kode_produk";

			$cek = $this->db->query("SELECT * FROM tbl_vote WHERE email_vote='$email' OR ip_user ='$ip' ")->num_rows();


			if ($cek >= 1) {
				$this->session->set_flashdata('message', 'swal("Maaf!", "Anda sudah vote", "warning");');

			redirect($url);
				
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

			$data2 = array(
			'kode_peserta' => $kode_peserta ,
			'kode_produk' => $kode_produk,
			'jml' => 1,
			'date_vote' => date('Y-m-d'),
			 );


				$cek_vote2 = $this->db->get_where('tbl_vote2', array('kode_produk' =>$kode_produk))->num_rows();
				if ($cek_vote2 == 0) {
					$inputvote2 = $this->db->insert('tbl_vote2', $data2);
				}else {

					$get = $this->db->get_where('tbl_vote2', array('kode_produk' => $kode_produk))->row_array();
					$jml_vote = $get['jml'];

					$edit2 = [

							'jml' => 1+$jml_vote,

						];

						$this->db->where('kode_produk', $kode_produk);
						$this->db->update('tbl_vote2', $edit2);
				}


			$input = $this->db->insert('tbl_vote', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Vote success", "success");');
			redirect($url);

		}

			


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

			$email =  $this->input->post('email');
			$kode = $kode_peserta;

			$this->sendEmail($email, $kode);

			$input = $this->db->insert('tbl_registrasi_peserta', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account</div>');
				$this->session->set_flashdata('message', 'swal("Congratulation! your account has been created.", "Please activate your account", "success");');
            redirect('/login');

		}

		}

		function sendEmail($email, $kode){

        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'aldiiit593@gmail.com',
            'smtp_pass' => 'aldimantap123',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

			$this->load->library('email', $config);
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");

			$this->email->from('aldiiit593@gmail.com', 'ebunga vote');
			$this->email->to("$email");

			$this->email->subject('ebunga cake');

			
			
			$get1 = file_get_contents(base_url("email/email3.php?id=$email&&kd=$kode"));
	      			

			$this->email->message("$get1");

			if (!$this->email->send())
			show_error($this->email->print_debugger());
			else
			echo 'Your e-mail has been sent!';
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
                   
                    $this->session->set_flashdata('message', 'swal("Password salah", "Mohon cek password anda", "warning");');
                    redirect('login/');
                }
            } else {
               
                    $this->session->set_flashdata('message', 'swal("Anda belum verifikasi email!", "Mohon verifikasi akun anda", "warning");');
                    redirect('login/');
            }
        } else {
        
             $this->session->set_flashdata('message', 'swal("Akun anda tidak terdaftar", "Mohon untuk mendaftar", "error");');
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


    function pagination(){
    	$this->load->view('user/pegi');
    }


    function cari($cari){
    	
    	$data['cari'] = $this->db->query("SELECT * FROM tbl_produk WHERE slug_toko LIKE '$cari%'")->result_array();

    	$this->load->view('user/search', $data);

    	
    }


function pegi(){

	$this->load->view('user/pegi');
}



function verifikasi(){


		$kd = $this->input->get('kd');
		

		$data = [

			'is_active' => 1,

		];
		$this->db->where('kode_peserta', $kd);
		$this->db->update('tbl_registrasi_peserta', $data);
		$this->session->set_flashdata('alert', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Akun terverifikasi!!</strong> silahkan login dan masukan email dan password anda dengan benar.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('login/');

}


function sertifikat($toko){

		// $data['nama'] = $this->input->get('nama');
		// $data['email'] = $this->input->get('email');
		// $data['kode'] = $this->input->get('kode');

		$data['toko'] = $toko;
		$this->load->library('dompdf_gen');

		$this->load->view('peserta/cetak', $data);
 		$paper_size ="A4";
 		$orientation = "landscape";
 		// $customPaper = array(0,0,360,360);
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();


 		//kode dibawah ini unutk menajalankan di server linux agar tidak error saat menreload ke pdf
 		ob_end_clean();


 		//end
 		$this->dompdf->stream("sertifikat", array('Attachment' => 0));

		



	}





	}

 ?>