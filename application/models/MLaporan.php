   <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLaporan extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
    }

    
    
	
function search($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun)
    {
         $this->db->where('nip',$nip);
         $this->db->where('MONTH(tanggal)',$bulan);
          $this->db->where('YEAR(tanggal)',$tahun);
        
        $query  =   $this->db->get('cuti');
        return $query->result();
    }

   function search1($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun)
    {
       $this->db->where('nip',$nip);
         $this->db->where('MONTH(tanggal)',$bulan);
          $this->db->where('YEAR(tanggal)',$tahun);
          
        $query  =   $this->db->get('absen');
        return $query->result();
    }
     function search2($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun)
    {
       $this->db->where('nip',$nip);
         $this->db->where('bulan',$bulan);
          $this->db->where('tahun',$tahun);
          
        $query  =   $this->db->get('lap_gaji');
        return $query->result();
    }
     function search21($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun)
    {
       $this->db->where('nip',$nip);
         $this->db->where('bulan',$bulan);
          $this->db->where('tahun',$tahun);
          $this->db->where('jenis','T');
          
        $query  =   $this->db->get('lap_tunjangan');
        return $query->result();
    }
    
     function searchTT($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun)
    {
      $this->db->select('*');
       $this->db->where('nip',$nip);
         $this->db->where('bulan',$bulan);
          $this->db->where('tahun',$tahun);
          
       
          
        $query  =   $this->db->get('lap_tunjangan');
        return $query->result();
    }
  

    function total($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun)
    {
   $query=$this->db->query("SELECT lap_gaji.total+sum(lap_tunjangan.besar_tunjangan) as hasil FROM lap_tunjangan,lap_gaji WHERE lap_tunjangan.nip=lap_gaji.nip && lap_tunjangan.bulan=lap_gaji.bulan && lap_tunjangan.tahun=lap_gaji.tahun && lap_gaji.nip='$nip' && lap_gaji.bulan='$bulan' && lap_gaji.tahun='$tahun'");
        
        return $query->result();
    }

    function potongan_tunjangan($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun)
    {
   $query=$this->db->query("SELECT sum(besar_tunjangan) as potongan FROM lap_tunjangan where jenis !='TT' && nip='$nip' && bulan='$bulan' && tahun='$tahun'");
        
        return $query->result();
    }

      function hasil($nip,$tanggal_mulai,$tanggal_selesai,$bulan,$tahun)
    {
   $query=$this->db->query("SELECT ((lap_gaji.total+sum(lap_tunjangan.besar_tunjangan))-sum(lap_tunjangan.besar_tunjangan)) as hasil FROM lap_tunjangan,lap_gaji WHERE lap_tunjangan.nip=lap_gaji.nip && lap_tunjangan.bulan=lap_gaji.bulan && lap_tunjangan.tahun=lap_gaji.tahun && lap_gaji.nip='$nip' && lap_gaji.bulan='$bulan' && lap_gaji.tahun='$tahun'");
        
        return $query->result();
    }

}