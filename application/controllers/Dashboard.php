     <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model('MDashboard');
         if($this->session->userdata('status') != "login"){
   redirect(base_url("Login"));
  }
    }

    public function index() {  
   
   foreach($this->MDashboard->statistik_absen()->result_array() as $row)
   {
    $data['grafik'][]=(float)$row['Januari'];
    $data['grafik'][]=(float)$row['Februari'];
    $data['grafik'][]=(float)$row['Maret'];
    $data['grafik'][]=(float)$row['April'];
    $data['grafik'][]=(float)$row['Mei'];
    $data['grafik'][]=(float)$row['Juni'];
    $data['grafik'][]=(float)$row['Juli'];
    $data['grafik'][]=(float)$row['Agustus'];
    $data['grafik'][]=(float)$row['September'];
    $data['grafik'][]=(float)$row['Oktober'];
    $data['grafik'][]=(float)$row['November'];
    $data['grafik'][]=(float)$row['Desember'];
   }

   foreach($this->MDashboard->statistik_ketidakhadiran()->result_array() as $row)
   {
    $data['tidakhadir'][]=(float)$row['Januari'];
    $data['tidakhadir'][]=(float)$row['Februari'];
    $data['tidakhadir'][]=(float)$row['Maret'];
    $data['tidakhadir'][]=(float)$row['April'];
    $data['tidakhadir'][]=(float)$row['Mei'];
    $data['tidakhadir'][]=(float)$row['Juni'];
    $data['tidakhadir'][]=(float)$row['Juli'];
    $data['tidakhadir'][]=(float)$row['Agustus'];
    $data['tidakhadir'][]=(float)$row['September'];
    $data['tidakhadir'][]=(float)$row['Oktober'];
    $data['tidakhadir'][]=(float)$row['November'];
    $data['tidakhadir'][]=(float)$row['Desember'];
   }
    
    foreach($this->MDashboard->statistik_cuti()->result_array() as $row)
   {
    $data['cuti'][]=(float)$row['Januari'];
    $data['cuti'][]=(float)$row['Februari'];
    $data['cuti'][]=(float)$row['Maret'];
    $data['cuti'][]=(float)$row['April'];
    $data['cuti'][]=(float)$row['Mei'];
    $data['cuti'][]=(float)$row['Juni'];
    $data['cuti'][]=(float)$row['Juli'];
    $data['cuti'][]=(float)$row['Agustus'];
    $data['cuti'][]=(float)$row['September'];
    $data['cuti'][]=(float)$row['Oktober'];
    $data['cuti'][]=(float)$row['November'];
    $data['cuti'][]=(float)$row['Desember'];
   }

   $this->load->view('dashboard/itampil', $data); 
 }

   
}
