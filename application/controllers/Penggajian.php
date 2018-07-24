           <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggajian extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
   redirect(base_url("Login"));
  }
       
    }
    
    public function index()
    {
        $this->load->helper('url');
        $this->load->helper('form');
           $this->load->model('MPenggajian');
     
   $this->load->view('penggajian/itampil');
    }

  
    public function search_keyword(){
        $this->load->model('MPenggajian');
     $nip    =   $this->input->post('nip');
     $bulan    =   $this->input->post('bulan');
     $tahun    =   $this->input->post('tahun');
       $tanggal_mulai    =   $this->input->post('tanggal_mulai');
         $tanggal_selesai    =   $this->input->post('tanggal_selesai');
     $laporan    =   $this->input->post('laporan');
      $data['tampiltt']    =   $this->MPenggajian->tampiltt();
$data['results']    =   $this->MPenggajian->search($nip,$bulan,$tahun);
$data['results1']    =   $this->MPenggajian->search1($nip,$bulan,$tahun);
$data['lembur']    =   $this->MPenggajian->lembur($nip,$bulan,$tahun);
$data['alpa']    =   $this->MPenggajian->alpa($nip,$bulan,$tahun);
   $this->load->view('penggajian/ilaporan',$data);          
 }


function karyawan()
    {
        $return_arr = array();
        $row_array = array();
        $text = $this->input->get('text');
        $barang = $this->db->select("*")
                                             ->from("karyawan")
                                             ->like("nip", $text)
                                             ->or_like("nama",$text)
                                             ->get();
        if($barang->num_rows() > 0)
        {

            foreach($barang->result_array() as $row)
            {
                $row_array['id'] = $row['nip'];
                $row_array['text'] = utf8_encode(" $row[nip]");
                array_push($return_arr,$row_array);
            }

        }
        
        echo json_encode(array("results" => $return_arr ));
    }
    function get_info()
    {
        $id = $this->input->get('id');
        
        $info = $this->db->select("*")
                                         ->from("tb_barang")
                                         ->where("k_barang",$id)
                                         ->get()
                                         ->row();
        echo json_encode($info);
                                         
    }
    

    function karyawan1()
    {
        $return_arr = array();
        $row_array = array();
        $text = $this->input->get('text');
        $barang = $this->db->select("*")
                                             ->from("karyawan")
                                             ->like("nip", $text)
                                             ->or_like("nama",$text)
                                             ->get();
        if($barang->num_rows() > 0)
        {

            foreach($barang->result_array() as $row)
            {
                $row_array['id'] = $row['nip'];
                $row_array['text'] = utf8_encode(" $row[nip]");
                array_push($return_arr,$row_array);
            }

        }
        
        echo json_encode(array("results" => $return_arr ));
    }
    function get_info1()
    {
        $id = $this->input->get('id');
        
        $info = $this->db->select("k.*,s.*,sum(a.tota) as jamtotal")
                                         ->from("karyawan k,peng_sallary s,absen a")
                                         ->where("s.golongan=k.golongan")
                                         ->where("k.nip=a.nip")
                                         ->where("k.nip",$id)
                                         ->get()
                                         ->row();
        echo json_encode($info);
                                         
    }


     function karyawan2()
    {
        $return_arr = array();
        $row_array = array();
        $text = $this->input->get('text');
        $barang = $this->db->select("*")
                                             ->from("tunjangan")
                                             ->like("kd_tunjangan", $text)
                                             ->or_like("nama_tunjangan",$text)
                                             ->get();
        if($barang->num_rows() > 0)
        {

            foreach($barang->result_array() as $row)
            {
                $row_array['id'] = $row['kd_tunjangan'];
                $row_array['text'] = utf8_encode(" $row[kd_tunjangan]");
                array_push($return_arr,$row_array);
            }

        }
        
        echo json_encode(array("results" => $return_arr ));
    }
    function get_info2()
    {
        $id = $this->input->get('id');
        
        $info = $this->db->select("*")
                                         ->from("tunjangan")
                                         ->where("kd_tunjangan",$id)
                                         ->get()
                                         ->row();
        echo json_encode($info);
                                         
    }



    public function lap_penggajian(){
         $this->load->model('MPenggajian');
     $nip    =   $this->input->post('nip');
      $nama    =   $this->input->post('nama');
       $divisi    =   $this->input->post('divisi');
       $golongan    =   $this->input->post('golongan');
       $metode    =   $this->input->post('metode');
        $gapok    =   $this->input->post('gapok');
         $ketidakhadiran    =   $this->input->post('ketidakhadiran');
         $lembur    =   $this->input->post('jml_lembur');
          $bank    =   $this->input->post('BANK');
         $bonus    =   $this->input->post('bonus');
         $total    =   $this->input->post('total');
         $bulan    =   $this->input->post('bulan');
         $tahun    =   $this->input->post('tahun');
          $besar_tunjangan    =   $this->input->post('besar_tunjangan[0]');
           $nama_tunjangan    =   $this->input->post('nama_tunjangan[0]');
           
         $date    =   date("Y-m-d H-i-s");
         $no_rek    =   $this->input->post('no_rek');
         $query=$this->db->query("select * from lap_gaji where nip='$nip' && bulan='$bulan' && tahun='$tahun'");



         if($query->num_rows() >= 1){
            $this->session->set_flashdata("gagal","gagal");
redirect ("Penggajian");
         }else{



         $query=$this->MPenggajian->lap_penggajian($nip,$nama,$divisi,$golongan,$gapok,$ketidakhadiran,$lembur,$bonus,$total,$bulan,$tahun,$date,$no_rek,$metode,$bank);
         $tampil=$this->db->query("select * from tunjangan where status='ON'");
foreach ($tampil->result() as $tampil1) {
    $kd_tunjangan=$tampil1->kd_tunjangan;
    $nama_tunjangan=$tampil1->nama_tunjangan;
    $besar_tunjangan=$tampil1->besar_tunjangan;
     $jenis=$tampil1->jenis;
          $query1=$this->MPenggajian->lap_penggajian1($nip,$kd_tunjangan,$nama_tunjangan,$besar_tunjangan,$jenis,$bulan,$tahun);
      }
      
 $this->session->set_flashdata('sukses','sukses');
         redirect ("Penggajian");
        
         }
 }

 
}
