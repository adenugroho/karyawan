    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPLaporan extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
    }

    
    
	
function search($divisi,$golongan,$bulan,$tahun)
    {
       $this->db->select("nip,nama,divisi,golongan,gaji_pokok,((gaji_pokok*(20/100))*2) as potongan,ketidakhadiran,lembur,bonus,total,bulan,tahun,date ");
         $this->db->where('divisi',$divisi);
           $this->db->where('bulan',$bulan);
           $this->db->where('tahun',$tahun);
       
         
        $query  =   $this->db->get('lap_gaji');
        return $query->result();
    }
function total($divisi,$golongan,$bulan,$tahun)
    {
       $this->db->select("sum(total) as hasil ");
         $this->db->where('divisi',$divisi);
           $this->db->where('bulan',$bulan);
           $this->db->where('tahun',$tahun);
       
         
        $query  =   $this->db->get('lap_gaji');
        return $query->result();
    }
   
}