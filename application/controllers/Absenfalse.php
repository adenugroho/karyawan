          <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absenfalse extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model('MAbsenfalse','Absenfalse');
        $this->load->library('session');
         if($this->session->userdata('status') != "login"){
   redirect(base_url("Login"));
  }
    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->helper('form');
        
        
        $this->load->view('absenfalse/itampil');
    }

    public function ajax_list()
    {
        
        $list = $this->Absenfalse->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $customers->nip;
            $row[] = $customers->nama;
            $row[] = $customers->tanggal;
          
            
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Absenfalse->count_all(),
                        "recordsFiltered" => $this->Absenfalse->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    
 function simpan()
    {
        $nip=$this->input->post('nip');
        $nama=$this->input->post('nama');
        $jumlah=$this->input->post('jumlah');
       
            $simpan_data=array(
            'nip'  => $nip,
            'nama'      => $nama,
             'tanggal'      => date("Y-m-d"),
              'jam_mulai'      => date("h:i:s"),
            'jumlah'      => $jumlah
              
       );
        $simpan = $this->db->insert('lembur', $simpan_data);
         
      
          $this->session->set_flashdata('success','Data Yang anda masukan berhasil.');
        redirect('Lembur');
        return $simpan;
       
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
                                         ->from("karyawan")
                                         ->where("nip",$id)
                                         ->get()
                                         ->row();
        echo json_encode($info);
                                         
    }


    
    public function alpa()
    {
        $date=date("Y-m-d");
         $mount=date("m");
          $year=date("Y");
       $insert=$this->db->query("insert into absen_false (nip,nama,tanggal) select nip,nama,CURDATE() from karyawan where NOT (tanggal_absen='$date' or cuti='C') ");
       $tampil=$this->db->query("select nip,CURDATE() as tanggal from karyawan  where NOT tanggal_absen='$date'");
       $array=array(
        "tanggal_absen" => $date
       );
        foreach ($tampil->result() as $row) {
        $this->db->where("nip", $row->nip);
        $update=$this->db->update("karyawan",$array);
      }
       
        redirect ("Absenfalse");
        return $insert;
        return $update;
    }

     public function reload_data(){
        $date=date("Y-m-d");
        $update_null=$this->db->query("update karyawan set cuti=''");
        $query=$this->db->query("select nip from cuti where tanggal='$date'");
        $data=array(
                "cuti" => "C"

            );
        foreach ($query->result() as $row) {
            
            $this->db->where("nip",$row->nip);
            $update=$this->db->update("karyawan",$data);

            
        }
        redirect ("Absenfalse");
        return $update_null;
         return $update;

    }
}
