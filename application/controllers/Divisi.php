        <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {
public function __construct()
    {
        parent::__construct();
       $this->load->model('MDivisi');
        if($this->session->userdata('status') != "login"){
   redirect(base_url("Login"));
  }
}
     function index()
    {
        $this->load->view('divisi/itampil');
    }

  function data_barang(){
        $data=$this->MDivisi->barang_list();
        echo json_encode($data);
    }
 
    function get_barang(){
        $kobar=$this->input->get('id');
        $data=$this->MDivisi->get_barang_by_kode($kobar);
        echo json_encode($data);
    }
 
     function simpan_barang(){
        $nama=$this->input->post('nama');
        $nip=$this->input->post('nip');
        $new_divisi=$this->input->post('new_divisi');
        $data=$this->MDivisi->simpan_barang($nama,$nip,$new_divisi);
        echo json_encode($data);
    }
 
    function update_barang(){
         $id=$this->input->post('id');
        $nama=$this->input->post('namas');
        $nip=$this->input->post('nips');
        $nama_pimpinan=$this->input->post('nama_pimpinans');
        $data=$this->MDivisi->update_barang($id,$nip,$nama,$nama_pimpinan);
        echo json_encode($data);
    }
 
    function hapus_barang(){
        $id=$this->input->post('id');
        $data=$this->MDivisi->hapus_barang($id);
        echo json_encode($data);
    }
    
}
