     <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TLaporan extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model('MTLaporan','TLaporan');
        if($this->session->userdata('status') != "login"){
   redirect(base_url("Login"));
  }
    }
    
    public function index()
    {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->view('tlaporan/itampil');
    }

  
    public function search_keyword(){
        $this->load->model('MPLaporan');
     $divisi    =   $this->input->post('divisi');
     $bulan    =   $this->input->post('bulan');
       $tahun    =   $this->input->post('tahun');
        $print=$this->input->post('submit');
if($print == 'Search'){
$data['results']    =   $this->TLaporan->search($divisi,$bulan,$tahun);
$data['total']    =   $this->TLaporan->total($divisi,$bulan,$tahun);
   $this->load->view('tlaporan/itampil',$data);
}else if($print == 'Excel'){   
    

 function getBulan($bln){
                switch ($bln){
                    case 1: 
                        return "Januari";
                        break;
                    case 2:
                        return "Februari";
                        break;
                    case 3:
                        return "Maret";
                        break;
                    case 4:
                        return "April";
                        break;
                    case 5:
                        return "Mei";
                        break;
                    case 6:
                        return "Juli";
                        break;
                    case 7:
                        return "Juni";
                        break;
                    case 8:
                        return "Agustus";
                        break;
                    case 9:
                        return "September";
                        break;
                    case 10:
                        return "Oktober";
                        break;
                    case 11:
                        return "November";
                        break;
                    case 12:
                        return "Desember";
                        break;
                }
}
   
   $bulans = getBulan($bulan);
  

    $filename=$divisi."/".$tahun."/".date('dmy').".xls";
$query = $this->db->query("select * from lap_tunjangan where divisi='$divisi' && bulan='$bulan' && tahun='$tahun'");
$query1 = $this->db->query("select sum(besar_tunjangan) as hasil from lap_tunjangan where divisi='$divisi' && bulan='$bulan' && tahun='$tahun'");
echo "<div align='center'>";
echo "<h2 align='center'>Laporan Tunjangan Divisi ".$divisi." Bulan ".$bulans." Tahun ".$tahun."</h2>";
echo "<table border='1' widht='100%'>";
echo " <tr>";
echo "<td>Nip</td>";
echo "<td>Nama Divisi</td>";
echo "<td>Kode Tunjangan</td>";
echo "<td>Nama Tunjangan</td>";
echo "<td>Besar Tunjangan</td>";
echo "<td>Bulan</td>";
echo "<td>Tahun</td>";
echo "<td>Jenis</td>";
echo "</tr>";
    foreach ($query->result() as $hasil) {
       
        echo "<tr>";
        echo  "<td>".$hasil->nip."</td>";
        echo  "<td>".$hasil->divisi."</td>";
        echo  "<td>".$hasil->kd_tunjangan."</td>";
         echo  "<td>".$hasil->nama_tunjangan."</td>";
          echo  "<td>".$hasil->besar_tunjangan."</td>";
           echo  "<td>".$hasil->bulan."</td>";
            echo  "<td>".$hasil->tahun."</td>";
             echo  "<td>".$hasil->jenis."</td>";
              
        echo  "</tr>";

    }

    foreach ($query1->result() as $hasil)  {
       echo "<td  colspan='4' bgcolor='yellow' align='center'><b>Total</b></td>";
        echo "<td bgcolor='yellow' colspan='4' align='left'><b>".$hasil->hasil."</b></td>";
    }
   echo "</table>";
   echo "</div>";
  header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename=" . $filename);  //File name extension was wrong
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private", false);
       
   }else{
    $this->load->library('Pdf');
   $data['results']    =   $this->TLaporan->search($divisi,$bulan,$tahun);
$data['total']    =   $this->TLaporan->total($divisi,$bulan,$tahun);
            $this->load->view('tlaporan/laporan', $data);
    }


   }
          
 }

 


