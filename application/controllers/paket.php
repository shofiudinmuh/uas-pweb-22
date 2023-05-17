<?php
class paket extends CI_Controller {

    public function index() {
        $data['content'] = $this->db->query("SELECT * FROM paket");
        $this->load->view('view_home',$data);
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
        redirect('paket/detail/'.$id); 
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
        redirect('paket/detail/'.$content_id); 
    }
    
}