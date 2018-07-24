   <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model('MAbsen','Absen');
         if($this->session->userdata('status') != "login"){
   redirect(base_url("Login"));
  }
    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->helper('form');
        
        
        $this->load->view('absen/itampil');
    }

    public function ajax_list()
    {
        
        $list = $this->Absen->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $customers->nip;
            $row[] = $customers->nama;
            $row[] = $customers->tanggal;
            $row[] = $customers->datein;
             $row[] = $customers->dateout;
            
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Absen->count_all(),
                        "recordsFiltered" => $this->Absen->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    

 
    function barang()
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
                                         ->from("tb_barang")
                                         ->where("k_barang",$id)
                                         ->get()
                                         ->row();
        echo json_encode($info);
                                         
    }
    
}
