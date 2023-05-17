<?php
class blog extends CI_Controller {

    public function index() {
        $this->load->helpers('url');
		$this->load->database();
        $data['content'] = $this->db->query("SELECT * FROM paket");
        $this->load->view('blog',$data);
    }

    public function detail() {
        $this->load->helpers('url');
		$this->load->database();
        $post_id         = $this->uri->segment('3');
        $content         = $this->db->query("SELECT * FROM paket WHERE paket_id='$post_id'")->row_array();
        $data['paket_id']=$content['paket_id'];
        $data['gambar']  = $content['gambar'];
        $data['nama']   = $content['nama_paket'];
        $data['harga']     = $content['harga'];
        $this->load->view('blog',$data);
    }

    public function kirim() {
        $this->load->helpers('url');
		$this->load->database();
        $id             = $this->input->post('id');
        $nama           = $this->input->post('nama');
        $email          = $this->input->post('email');
        $isi            = $this->input->post('isi');
        $this->db->query("INSERT INTO comment VALUES('','0','$nama','$email','$isi','$id')");
        redirect('blog/detail/'.$id); 
    } 

    public function balas() {
        $this->load->helpers('url');
		$this->load->database();
        $comment_id = $this->input->post('comment_id');
        $post_id = $this->input->post('post_id');
        $nama       = $this->input->post('nama');
        $email      = $this->input->post('email');
        $isi        = $this->input->post('isi');
        $this->db->query("INSERT INTO comment VALUES('','$comment_id','$nama','$email','$isi','$post_id')");
        redirect('blog/detail/'.$post_id); 
    }
    
}