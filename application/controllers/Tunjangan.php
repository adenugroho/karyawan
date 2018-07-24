         <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TUnjangan extends CI_Controller {
public function __construct()
    {
        parent::__construct();
       $this->load->model('MTunjangan');
        if($this->session->userdata('status') != "login"){
   redirect(base_url("Login"));
  }
}
     function index()
    {
        $this->load->view('tunjangan/itampil');
    }

  function data_barang(){
        $data=$this->MTunjangan->barang_list();
        echo json_encode($data);
    }
 
    function get_barang(){
        $kobar=$this->input->get('id');
        $data=$this->MTunjangan->get_barang_by_kode($kobar);
        echo json_encode($data);
    }
 
     function simpan_barang(){
        $nama=$this->input->post('nama');
        $besar=$this->input->post('besar');
        $status=$this->input->post('status');
         $jenis=$this->input->post('jenis');
        $data=$this->MTunjangan->simpan_barang($nama,$besar,$status,$jenis);
        echo json_encode($data);
    }
 
    function update_barang(){
         $id=$this->input->post('id');
        $nama_tunjangan=$this->input->post('nama_tunjangan');
        $besar_tunjangan=$this->input->post('besar_tunjangan');
        $status=$this->input->post('status');
         $jenis=$this->input->post('jenis');
        $data=$this->MTunjangan->update_barang($id,$nama_tunjangan,$besar_tunjangan,$status,$jenis);
        echo json_encode($data);
    }
 
    function hapus_barang(){
        $id=$this->input->post('id');
        $data=$this->MTunjangan->hapus_barang($id);
        echo json_encode($data);
    }
    
}
