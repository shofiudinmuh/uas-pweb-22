<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class exportmodel extends CI_Model {
  public function view(){
    return $this->db->get('table_comment')->result(); // Tampilkan semua data yang ada di tabel siswa
  }
}