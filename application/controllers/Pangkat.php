     <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pangkat extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model('MPangkat','Pangkat');
        $this->load->library('session');
         if($this->session->userdata('status') != "login"){
   redirect(base_url("Login"));
  }
    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->helper('form');
        
        
        $this->load->view('pangkat/itampil');
    }

    public function ajax_list()
    {
        
        $list = $this->Pangkat->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $customers->nip;
            $row[] = $customers->nama;
            $row[] = $customers->divisi;
            $row[] = $customers->golongan;
            $row[] = $customers->tanggal_pangkat;
           
            
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Pangkat->count_all(),
                        "recordsFiltered" => $this->Pangkat->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    
 function simpan()
    {
        $nip=$this->input->post('nip');
        $nama=$this->input->post('nama');
        $tanggal1=$this->input->post('tanggal1');
        $tanggal2=$this->input->post('tanggal2');
        $jumlah=$this->input->post('jumlah');
         $total_cuti=$this->input->post('total_cuti');
         $sisa=$this->input->post('sisa');
         if($sisa <=0){
            $this->session->set_flashdata('gagal','Data Yang anda masukan berhasil.');
             redirect('cutibiasa');

         }else{
            $simpan_data=array(
            'nip'  => $nip,
            'nama'      => $nama,
            'tanggal_mulai'      => $tanggal1,
            'tanggal_selesai'      => $tanggal2,
             'jenis_cuti'      => 'B',
             'jumlah'      => $jumlah   
       );
        $simpan = $this->db->insert('cuti', $simpan_data);
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
    
    public function update()
    {
         $nip=$this->input->post('nip');
        $divisi=$this->input->post('divisib');
        $golongan=$this->input->post('golonganb');
        $date=date('Y-m-d');
         $update_data=array(
            
             'tanggal_pangkat'      => $date,
             'divisi'      => $divisi,
             'golongan'      => $golongan   
       );
         $this->db->where('nip',$nip);
         $update= $this->db->update("karyawan",$update_data);
          $this->session->set_flashdata('success','Data Yang anda masukan berhasil.');
          redirect('Pangkat');
         return $update;

    }
}
