    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PLaporan extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model('MPLaporan','PLaporan');
        if($this->session->userdata('status') != "login"){
   redirect(base_url("Login"));
  }
    }
    
    public function index()
    {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->view('plaporan/itampil');
    }

  
    public function search_keyword(){
        $this->load->model('MPLaporan');
     $divisi    =   $this->input->post('divisi');
     $golongan    =   $this->input->post('golongan');
     $bulan    =   $this->input->post('bulan');
       $tahun    =   $this->input->post('tahun');
        $print=$this->input->post('submit');
if($print == 'Search'){
$data['results']    =   $this->MPLaporan->search($divisi,$golongan,$bulan,$tahun);
$data['total']    =   $this->MPLaporan->total($divisi,$golongan,$bulan,$tahun);
   $this->load->view('plaporan/itampil',$data);
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
$query = $this->db->query("select nip,nama,divisi,golongan,gaji_pokok,((gaji_pokok*(20/100))*2) as potongan,ketidakhadiran,lembur,bonus,total,bulan,tahun,date from lap_gaji where divisi='$divisi' && bulan='$bulan' && tahun='$tahun'");
$query1 = $this->db->query("select sum(total) as hasil from lap_gaji where divisi='$divisi' && bulan='$bulan' && tahun='$tahun'");
echo "<div align='center'>";
echo "<h2 align='center'>Laporan Penggajian Divisi ".$divisi." Bulan ".$bulans." Tahun ".$tahun."</h2>";
echo "<table border='1' widht='100%'>";
echo "<tr>";
 echo "<td>Nip</td>";
echo " <td>Nama</td>";
echo "<td>Divisi</td>";
echo "<td>Golongan</td>";
echo "<td>Gaji Pokok</td>";
echo " <td>Alpa</td>";
echo " <td>Lembur</td>";
echo " <td>Bonus</td>";
echo " <td>Total</td>";
echo "</tr>";
    foreach ($query->result() as $hasil) {
       
        echo "<tr>";
        echo  "<td>".$hasil->nip."</td>";
        echo  "<td>".$hasil->nama."</td>";
        echo  "<td>".$hasil->divisi."</td>";
         echo  "<td>".$hasil->golongan."</td>";
          echo  "<td>".$hasil->gaji_pokok."</td>";
           echo  "<td>".$hasil->ketidakhadiran."</td>";
            echo  "<td>".$hasil->lembur."</td>";
             echo  "<td>".$hasil->bonus."</td>";
              echo  "<td>".$hasil->total."</td>";
        echo  "</tr>";

    }

    foreach ($query1->result() as $hasil)  {
       echo "<td  colspan='8' bgcolor='yellow' align='center'><b>Total</b></td>";
        echo "<td bgcolor='yellow'><b>".$hasil->hasil."</b></td>";
    }
   echo "</table>";
   echo "</div>";
  header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename=" . $filename);  //File name extension was wrong
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private", false);
       
   }else{
     $this->load->library('pdf');
    $data['results']    =   $this->MPLaporan->search($divisi,$golongan,$bulan,$tahun);
$data['total']    =   $this->MPLaporan->total($divisi,$golongan,$bulan,$tahun);
$this->load->view('plaporan/laporan',$data);
   }
          
 }

 

}
