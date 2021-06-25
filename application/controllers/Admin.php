<?php 
	

/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct()
	{
	 	parent::__construct();

	}

	function index(){

		$data['jml_peserta'] = $this->db->get('tbl_registrasi_peserta')->num_rows();
		$data['jml_vote'] = $this->db->get('tbl_vote')->num_rows();


		$this->load->view('template_admin/header');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template_admin/footer');


	}


	function data_peserta(){

		$data['peserta'] = $this->db->get('tbl_registrasi_peserta')->result_array();
		$this->load->view('template_admin/header');
		$this->load->view('admin/data_peserta', $data);
		$this->load->view('template_admin/footer');
	}


	function data_produk(){

		$data['produk'] = $this->db->get('tbl_produk')->result_array();
		$this->load->view('template_admin/header');
		$this->load->view('admin/data_produk', $data);
		$this->load->view('template_admin/footer');
	}


	function data_vote(){

		$data['peserta'] = $this->db->get('tbl_vote')->result_array();
		$this->load->view('template_admin/header');
		$this->laod->view('admin/data_vote', $data);
		$this->load->view('template_admin/footer');
	}


	function edit(){

		$id = $this->input->post('valaktif');
		$email = $this->input->post('email');

		$data = [

			'is_active' => 0,

		];


		$this->sendEmail($email);

		$this->db->where('id', $id);
		$this->db->update('tbl_registrasi_peserta', $data);
		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil diubah", "success");');
			redirect('admin/data-peserta');
	}


	function edit2(){

		$id = $this->input->post('non');
		$email = $this->input->post('email');

		$data = [

			'is_active' => 1,

		];

		$this->sendEmail2($email);

		$this->db->where('id', $id);
		$this->db->update('tbl_registrasi_peserta', $data);
		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil diubah", "success");');
			redirect('admin/data-peserta');
	}



	function sendEmail($email){

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
			
			$get1 = file_get_contents(base_url('email/email.php'));
	      			

			$this->email->message("$get1");

			if (!$this->email->send())
			show_error($this->email->print_debugger());
			else
			echo 'Your e-mail has been sent!';
	}


	function sendEmail2($email){

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
			
			$get1 = file_get_contents(base_url('email/email2.php'));
	      			

			$this->email->message("$get1");

			if (!$this->email->send())
			show_error($this->email->print_debugger());
			else
			echo 'Your e-mail has been sent!';
	}


	function hapus_produk(){

		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('tbl_produk');
		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil di hapus", "success");');
			redirect('admin/data-produk');


	}

	function hapus_peserta(){

		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('tbl_registrasi_peserta');
		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil di hapus", "success");');
			redirect('admin/data-peserta');


	}


	function aktifProduk(){
		$id = $this->input->post('id_produk');
		$email = 'alldii1956@gmail.com';
		$data = $this->db->get_where('tbl_registrasi_peserta',  array('email' => $email))->row_array();
		$nama = $data['name'];
		$kode_peserta = $data['kode_peserta'];


			$data = [

			'status' => 1,

		];

		$this->sendEmailSertifikat($email, $nama, $kode_peserta);

		

		$this->db->where('id', $id);
		$this->db->update('tbl_produk', $data);
		$this->session->set_flashdata('message', 'swal("Sukses!", "Cake barhasil disetujui", "success");');
			redirect('admin/data-produk');

	}


	function nonaktifProduk(){
		$id = $this->input->post('id_produk');

			$data = [

			'status' => 0,

		];

		

		$this->db->where('id', $id);
		$this->db->update('tbl_produk', $data);
		$this->session->set_flashdata('message', 'swal("Sukses!", "Cake barhasil di nonaktifkan", "success");');
			redirect('admin/data-produk');

	}


	function sendEmailSertifikat($email, $nama, $kode_peserta){

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

			$this->email->subject('Sertfikat peserta lomba desain cake ebunga');
			
			$get1 = file_get_contents(base_url("email/sertifikat.php?email=$email&&nama=$nama&&kode=$kode_peserta"));
	      			

			$this->email->message($get1);

			if (!$this->email->send())
			show_error($this->email->print_debugger());
			else
			echo 'Your e-mail has been sent!';
	}


	


	function sertifikat(){

		$data['nama'] = $this->input->get('nama');
		$data['email'] = $this->input->get('email');
		$data['kode'] = $this->input->get('kode');


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