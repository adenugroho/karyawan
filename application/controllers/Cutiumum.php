     <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cutiumum extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model('MCutiumum','Cutiumum');
        $this->load->library('session');
         if($this->session->userdata('status') != "login"){
   redirect(base_url("Login"));
  }
    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->helper('form');
        
        
        $this->load->view('cuti/Cutiumum/itampil');
    }

    public function ajax_list()
    {
        
        $list = $this->Cutiumum->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $customers->nip;
            $row[] = $customers->nama;
            $row[] = $customers->jenis_cuti;
            $row[] = $customers->tanggal;
           
            
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Cutiumum->count_all(),
                        "recordsFiltered" => $this->Cutiumum->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    
 function simpan()
    {
        $nip=$this->input->post('nip');
        $nama=$this->input->post('nama');
         $tanggal_mulai=$this->input->post('tanggal_mulai');
         $tanggal = substr($tanggal_mulai,8,2);
          $bulan = substr($tanggal_mulai,5,2);
           $tahun = substr($tanggal_mulai,0,4);
        $jumlah=$this->input->post('jumlah');
         $jenis_cuti=$this->input->post('jenis_cuti');
         $display=$this->db->query("SELECT * FROM cuti where nip='$nip' && tanggal='$tanggal_mulai'");
if($display==TRUE){
$this->session->set_flashdata('diambil','Gagal');
 redirect('Cutiumum');
}else{
         $max_date=$jumlah-1;
for ($i=0;$i<=$max_date;$i++){
$date = mktime(0,0,0,$bulan,$tanggal+$i,$tahun);
$dates=date("Y-m-d", $date);
 $simpan = $this->db->query("insert into cuti (nip,nama,jenis_cuti,tanggal) values ('$nip','$nama','$jenis_cuti','$dates')");
}
       
           
        
         
          $this->session->set_flashdata('success');
        redirect('Cutiumum');
        return $simpan;
        return $update;
         
        }

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
    
}
