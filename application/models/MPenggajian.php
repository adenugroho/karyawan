              <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPenggajian extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
    }

    
    
	
function search($nip,$bulan,$tahun)
    {
         $this->db->where('nip',$nip);
         $this->db->where('MONTH(tanggal) ',$bulan);
          $this->db->where('YEAR(tanggal) ',$tahun);
          
        $query  =   $this->db->get('cuti');
        return $query->result();
    }

   function search1($nip,$bulan,$tahun)
    {
       $this->db->where('nip',$nip);
         $this->db->where('MONTH(tanggal)',$bulan);
          $this->db->where('YEAR(tanggal)',$tahun);
          
        $query  =   $this->db->get('absen');
        return $query->result();
    }

   function lembur($nip,$bulan,$tahun)
    {
       $this->db->where('nip',$nip);
         $this->db->where('MONTH(tanggal)',$bulan);
          $this->db->where('YEAR(tanggal)',$tahun);
          
        $query  =   $this->db->get('lembur');
        return $query->result();
    }
     function alpa($nip,$bulan,$tahun)
    {
       $this->db->where('nip',$nip);
         $this->db->where('MONTH(tanggal)',$bulan);
          $this->db->where('YEAR(tanggal)',$tahun);
          
        $query  =   $this->db->get('absen_false');
        return $query->result();
    }

    function lap_penggajian($nip,$nama,$divisi,$golongan,$gapok,$ketidakhadiran,$lembur,$bonus,$total,$bulan,$tahun,$date,$no_rek,$metode,$bank)
    {
      $array=array(
        "nip" => $nip,
        "nama" => $nama,
        "divisi" => $divisi,
        "golongan" => $golongan,
        "metode" => $metode,
        "gaji_pokok" => $gapok,
        "ketidakhadiran" => $ketidakhadiran,
        "lembur" => $lembur,
        "bonus" => $bonus,
        "total" => $total,
        "bulan" => $bulan,
        "tahun" => $tahun,
        "bank" => $bank,
        "no_rek" => $no_rek,
        "date" => $date
      );
      $query=$this->db->insert("lap_gaji",$array);
        return $query;
    }

    ///////
 function lap_penggajian1($nip,$kd_tunjangan,$nama_tunjangan,$besar_tunjangan,$jenis,$bulan,$tahun)
    {
      $array=array(
        "nip" => $nip,
        "bulan" => $bulan,
        "tahun" => $tahun,
        "kd_tunjangan" => $kd_tunjangan,
         "nama_tunjangan" => $nama_tunjangan,
          "jenis" => $jenis,
          "besar_tunjangan" => $besar_tunjangan
       
      );
      $query=$this->db->insert("lap_tunjangan",$array);
        return $query;
    }
     function lap_penggajian2($nip,$nama_tunjangan,$besar_tunjangan,$bulan,$tahun)
    {
      $array=array(
        "nip" => $nip,
        "bulan" => $bulan,
        "tahun" => $tahun,
      
         "nama_tunjangan" => $nama_tunjangan,
          "besar_tunjangan" => $besar_tunjangan
       
      );
      $query=$this->db->insert("lap_tunjangan",$array);
        return $query;
    }

    function tampiltt()
    {
   $query=$this->db->query("SELECT sum(besar_tunjangan) as tunjangan FROM tunjangan where jenis ='TT' &&  status='ON'");
        
        return $query->result();
    }

}