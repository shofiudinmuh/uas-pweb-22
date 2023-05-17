<?php
class cs extends CI_Controller {

    public function index() {
        $data['content'] = $this->db->query("SELECT * FROM paket");
        $this->load->view('view_home',$data);
    }
    public function home(){
		$this->load->helpers('url');
		$this->load->database();
		$query = $this->db->get('paket');
		$this->db->select('*');
		$this->db->from('paket');
		$query = $this->db->get();
		$data['paket'] = $query->result();

		$query = $this->db->get('promo');
		$this->db->select('*');
		$this->db->from('promo');
		$query = $this->db->get();
		$data['promo'] = $query->result();
		$this->load->view('cs', $data);
	}

    public function detail() {
        $this->load->helpers('url');
		$this->load->database();
        $id                     = $this->uri->segment('3');
        $content                = $this->db->query("SELECT * FROM paket WHERE paket_id='$id'")->row_array();
        // $data['content_title']  = $content['content_title'];
        // $data['content_body']   = $content['content_body'];
        $data['content_id']     = $content['paket_id'];
        $data['paket_id']=$content['paket_id'];
        $data['gambar']  = $content['gambar'];
        $data['nama']   = $content['nama_paket'];
        $data['harga']     = $content['harga'];
        $this->load->view('view_content',$data);
    }

    public function kirim() {
        $this->load->helpers('url');
		$this->load->database();
        $id             = $this->input->post('id');
        $nama           = $this->input->post('nama');
        $email          = $this->input->post('email');
        $isi_komentar   = $this->input->post('isi');
        $this->db->query("INSERT INTO table_comment VALUES('','0','$nama','$email','$isi_komentar','$id')");
        redirect('komentar/detail/'.$id); 
    } 

    public function balas() {
        $this->load->helpers('url');
		$this->load->database();
        $comment_id = $this->input->post('comment_id');
        $content_id = $this->input->post('content_id');
        $nama       = $this->input->post('nama');
        $email      = $this->input->post('email');
        $isi        = $this->input->post('isi');
        $this->db->query("INSERT INTO table_comment VALUES('','$comment_id','$nama','$email','$isi','$content_id')");
        redirect('cs/detail/'.$content_id); 
    }
    
}