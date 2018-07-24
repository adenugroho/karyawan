    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model('MLaporan','Laporan');
        if($this->session->userdata('status') != "login"){
   redirect(base_url("Login"));
  }
    }
    
    public function index()
    {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->view('laporan/itampil');
    }

  
    public function search_keyword(){
        $this->load->model('MLaporan');
     $nip    =   $this->input->post('nip');
     $bulan    =   $this->input->post('bulan');
     $tahun    =   $this->input->post('tahun');
      $submit    =   $this->input->post('submit');
       $tanggal_mulai    =   $this->input->post('tanggal_mulai');
         $tanggal_selesai    =   $this->input->post('tanggal_selesai');
     $laporan    =   $this->input->post('laporan');

     if($laporan=='cuti'){
 $data['results']    =   $this->MLaporan->search($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun);
   $this->load->view('Laporan/itampil',$data);

     }else if($laporan=='absen'){
 $data1['results1']    =   $this->MLaporan->search1($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun);
  $this->load->view('Laporan/itampil',$data1);
          
     }else if($laporan=='lap_gaji'){
      if($submit=='Search'){
 $data2['lap_gaji']    =   $this->MLaporan->search2($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun);
 $data2['lap_tunjangan']    =   $this->MLaporan->search21($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun);
 $data2['lap_tunjanganTT']    =   $this->MLaporan->searchTT($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun);
$data2['total']    =   $this->MLaporan->total($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun);
$data2['potongan_tunjangan']    =   $this->MLaporan->potongan_tunjangan($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun);
$data2['hasil']    =   $this->MLaporan->hasil($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun);
  $this->load->view('Laporan/itampil',$data2);
}else if($submit=='PDF'){
$this->load->library('Pdf');
  $data2['lap_gaji']    =   $this->MLaporan->search2($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun);
 $data2['lap_tunjangan']    =   $this->MLaporan->search21($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun);
 $data2['lap_tunjanganTT']    =   $this->MLaporan->searchTT($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun);
$data2['total']    =   $this->MLaporan->total($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun);
$data2['potongan_tunjangan']    =   $this->MLaporan->potongan_tunjangan($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun);
$data2['hasil']    =   $this->MLaporan->hasil($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun);
  $this->load->view('Laporan/Glaporan',$data2);
}
          
     }          
          
 }

 

}
