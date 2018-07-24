        <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sallary extends CI_Controller {
public function __construct()
    {
        parent::__construct();
       $this->load->model('MSallary');
        if($this->session->userdata('status') != "login"){
   redirect(base_url("Login"));
  }
}
     function index()
    {
        $this->load->view('sallary/itampil');
    }

  function sallary(){
        $data=$this->MSallary->sallary_list();
        echo json_encode($data);
    }
 
    function get_sallary(){
        $kobar=$this->input->get('id');
        $data=$this->MSallary->get_sallary_by_kode($kobar);
        echo json_encode($data);
    }
 
     function simpan_sallary(){
        $kobar=$this->input->post('kobar');
        $nabar=$this->input->post('nabar');
        $harga=$this->input->post('harga');
        $data=$this->MSallary->simpan_sallary($kobar,$nabar,$harga);
        echo json_encode($data);
    }
 
    function update_sallary(){
         $id=$this->input->post('id');
        $golongan=$this->input->post('golongan');
        $gaji_pokok=$this->input->post('gaji_pokok');
        $uang_lembur=$this->input->post('uang_lembur');
        $data=$this->MSallary->update_sallary($id,$golongan,$gaji_pokok,$uang_lembur);
        echo json_encode($data);
    }
 
    function hapus_sallary(){
        $id=$this->input->post('id');
        $data=$this->MSallary->hapus_sallary($id);
        echo json_encode($data);
    }
    
}
