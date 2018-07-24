     <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDashboard extends CI_Model
{


 function tampil($nip)
    {
      $date=date("Y-m-d");
      $this->db->where('nip','001');
         $this->db->where('tanggal',$date);
        $query  =   $this->db->get('absen');
        return $query->result();
    }

}