     <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTLaporan extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
    }

    
    
	
function search($divisi,$bulan,$tahun)
    {
       $this->db->select("*");
         $this->db->where('divisi',$divisi);
           $this->db->where('bulan',$bulan);
           $this->db->where('tahun',$tahun);
       
         
        $query  =   $this->db->get('lap_tunjangan');
        return $query->result();
    }
function total($divisi,$bulan,$tahun)
    {
       $this->db->select("sum(besar_tunjangan) as hasil ");
         $this->db->where('divisi',$divisi);
           $this->db->where('bulan',$bulan);
           $this->db->where('tahun',$tahun);
       
         
        $query  =   $this->db->get('lap_tunjangan');
        return $query->result();
    }
   
}