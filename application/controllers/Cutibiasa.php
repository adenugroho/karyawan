      <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cutibiasa extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model('MCutibiasa','Cutibiasa');
        $this->load->library('session');
         if($this->session->userdata('status') != "login"){
   redirect(base_url("Login"));
  }
    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->helper('form');
        
        
        $this->load->view('cuti/cutibiasa/itampil');
    }

    public function ajax_list()
    {
        
        $list = $this->Cutibiasa->get_datatables();
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
                        "recordsTotal" => $this->Cutibiasa->count_all(),
                        "recordsFiltered" => $this->Cutibiasa->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    
 function simpan()
    {
        $nip=$this->input->post('nip');
        $nama=$this->input->post('nama');
       
        $tanggal2=$this->input->post('tanggal2');
        $jumlah=$this->input->post('jumlah');
         $total_cuti=$this->input->post('total_cuti');
         $sisa=$this->input->post('sisa');
          $tanggal_mulai=$this->input->post('tanggal_mulai');
         $tanggal = substr($tanggal_mulai,8,2);
          $bulan = substr($tanggal_mulai,5,2);
           $tahun = substr($tanggal_mulai,0,4);

         if($sisa <=0){
            $this->session->set_flashdata('gagal','Data Yang anda masukan berhasil.');
             redirect('cutibiasa');

         }else{
$display=$this->db->query("SELECT nip FROM cuti where nip='$nip' && tanggal='$tanggal_mulai'");
$result = $display->row_array();
if($result >= 1){
$this->session->set_flashdata('diambil','Gagal');
 redirect('cutibiasa');
}else{
     $max_date=$jumlah-1;
for ($i=0;$i<=$max_date;$i++){
$date = mktime(0,0,0,$bulan,$tanggal+$i,$tahun);
$dates=date("Y-m-d", $date);
 $simpan = $this->db->query("insert into cuti (nip,nama,jenis_cuti,tanggal) values ('$nip','$nama','B','$dates')");
}
            $simpan_data=array(
            'nip'  => $nip,
            'nama'      => $nama,
            'tanggal'      => $dates,
             'jenis_cuti'      => 'B'
            
       );

       
         $update_data=array(
            'cuti_b'  => $total_cuti  
       );
        $this->db->where('nip', $nip);
         $update = $this->db->update('karyawan', $update_data);
          $this->session->set_flashdata('success','Data Yang anda masukan berhasil.');
        redirect('cutibiasa');
        return $simpan;
        return $update;
         } 
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
