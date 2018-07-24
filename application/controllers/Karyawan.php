      <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
 function __construct(){
        parent::__construct();
        $this->load->helper('url');
       
        $this->load->database();
          $this->load->model('MKaryawan');
         if($this->session->userdata('status') != "login"){
   redirect(base_url("Login"));
  }
    }
 
	  function index()
    {
        $data['kodeunik']=$this->MKaryawan->code_otomatis();
        $this->load->view('karyawan/itampil',$data);
    }

  function list(){
        $data=$this->MKaryawan->karyawan_list();
        echo json_encode($data);
    }
 
    function get_karyawan(){
        $kobar=$this->input->get('id');
        $data=$this->MKaryawan->get_karyawan_by_kode($kobar);
        echo json_encode($data);
    }

    function get_password(){
        $kobar=$this->input->get('id');
        $data=$this->MKaryawan->get_karyawan_by_password($kobar);
        echo json_encode($data);
    }
 
     function simpan_karyawan(){
        $nip=$this->input->post('nip');
        $nama=$this->input->post('nama');
        $username=$this->input->post('username');
        $password=md5($this->input->post('password'));
        $bank=$this->input->post('bank');
        $no_rek=$this->input->post('no_rek');
        $data=$this->MKaryawan->simpan_karyawan($nip,$nama,$username,$password,$bank,$no_rek);
        echo json_encode($data);
    }
 
    function update_karyawan(){
         $id=$this->input->post('id');
        $nama=$this->input->post('nama');
        $username=$this->input->post('username');
        $bank=$this->input->post('bank');
        $no_rek=$this->input->post('no_rek');
        $data=$this->MKaryawan->update_karyawan($id,$nama,$username,$bank,$no_rek);
        echo json_encode($data);
    }

    function update_password(){
         $id=$this->input->post('id');
        $password=md5($this->input->post('password'));
        $data=$this->MKaryawan->update_password($id,$password);
        echo json_encode($data);
    }
 
    function hapus_karyawan(){
        $id=$this->input->post('id');
        $data=$this->MKaryawan->hapus_karyawan($id);
        echo json_encode($data);
    }

public function qr($nip)
{

    
   
   $this->load->library('Ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name=$nip.'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $nis; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
 
        redirect('Karyawan'); //r

}

}
