 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url('assets/js/morris/morris-0.4.3.min.css')?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url('assets/css/custom.css')?>" rel="stylesheet" />
     <link href="<?php echo base_url('assets/css/style-menu.css')?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
      <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css')?>"/>

      

<!-- End Css Dropzone-->
<!-- Load javascript-->
<script src="<?php echo base_url("assets/js/jquery-2.1.3.min.js");?>"></script>
<script src="<?php echo base_url("assets/js/select2.min.js");?>"></script>
<script src="<?php echo base_url("assets/plugin/dropzone/dropzone.js")?>"></script>
<script src="<?php echo base_url("assets/js/metro.js");?>"></script>
<script src="<?php echo base_url("assets/js/metro.min.js");?>"></script>

</head>
<style type="text/css">
  .border {
      border: solid black;
      width: 50%;
   }
</style>
 <script>
  function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
  }
  </script>
 <script>
function sum() {
      var total = document.getElementById('total').value;
      var potongan_tunjangan = document.getElementById('potongan_tunjangan').value;
    
       var TOTAL = (parseInt(total) - parseInt(potongan_tunjangan));


       
     
       if (!isNaN(TOTAL)) {
         document.getElementById('hasil').value = TOTAL      ;
      }
}

</script>
 <script type="text/javascript">
    //set timezone
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    //buat object date berdasarkan waktu di server
    var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
    //buat object date berdasarkan waktu di client
    var clientTime = new Date();
    //hitung selisih
    var Diff = serverTime.getTime() - clientTime.getTime();    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function displayServerTime(){
        //buat object date berdasarkan waktu di client
        var clientTime = new Date();
        //buat object date dengan menghitung selisih waktu client dan server
        var time = new Date(clientTime.getTime() + Diff);
        //ambil nilai jam
        var sh = time.getHours().toString();
        //ambil nilai menit
        var sm = time.getMinutes().toString();
        //ambil nilai detik
        var ss = time.getSeconds().toString();
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
  </script>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
 <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
<?php
function hari_ini(){
  $hari = date ("D");
 
  switch($hari){
    case 'Sun':
      $hari_ini = "Minggu";
    break;
 
    case 'Mon':     
      $hari_ini = "Senin";
    break;
 
    case 'Tue':
      $hari_ini = "Selasa";
    break;
 
    case 'Wed':
      $hari_ini = "Rabu";
    break;
 
    case 'Thu':
      $hari_ini = "Kamis";
    break;
 
    case 'Fri':
      $hari_ini = "Jumat";
    break;
 
    case 'Sat':
      $hari_ini = "Sabtu";
    break;
    
    default:
      $hari_ini = "Tidak di ketahui";   
    break;
  }
 
  return "" . $hari_ini . "";
 
}
?>
font-size: 16px;"> <body onload="setInterval('displayServerTime()', 1000);">
<?php echo hari_ini();echo ",&nbsp;"; echo date("d"); echo date(" M Y");?>  - <span id="clock"><?php print date('H:i:s'); ?></span>
</body>    <a href="Login/logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
               <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="<?php echo base_url('assets/img/find_user.png')?>" class="user-image img-responsive"/>
          </li>
        
          <li>
                        <a class="active-menu"  href="<?php echo base_url('Dashboard')?>"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a href="#"><i class="fa fa-group" style="font-size:36px"></i>Karyawan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                               <a  href="<?php echo base_url('Karyawan')?>"><i class="fa fa-desktop fa-3x"></i>Data Karyawan</a>
                            </li>
                            <li>
                               <a  href="<?php echo base_url('Pangkat')?>"><i class="fa fa-desktop fa-3x"></i>Data Status Karyawan</a>
                            </li>

                          </ul>
                    </li>
                         <li>
                        <a href="#"><i class="fa fa-male" style="font-size:46px"></i>Absensi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                               <a  href="<?php echo base_url('Absen')?>"><i class="fa fa-check" style="font-size:36px"></i>Absen Masuk</a>
                            </li>
                            <li>
                                <a  href="<?php echo base_url('Absenfalse')?>"><i class="fa fa-exclamation" style="font-size:36px"></i>Absen Tidak Masuk</a>
                            </li>

                          </ul>
                    </li>
                    
                    <li>
                        <a  href="<?php echo base_url('Lembur')?>"><i class="fa fa-desktop fa-3x"></i>Data Lembur</a>
                    </li>
                     <li>
                        <a  href="<?php echo base_url('Penggajian')?>"><i class="fa fa-desktop fa-3x"></i>Kelola Gaji Karyawan</a>
                    </li>

                      <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Cuti<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                               <a  href="<?php echo base_url('Cutibiasa')?>"><i class="fa fa-desktop fa-3x"></i>Data Cuti Tahunan</a>
                            </li>
                            <li>
                               <a  href="<?php echo base_url('Cutiumum')?>"><i class="fa fa-desktop fa-3x"></i>Data Cuti Umum</a>
                            </li>

                          </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Kelola Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li>
                               <a  href="<?php echo base_url('Divisi')?>"><i class="fa fa-desktop fa-3x"></i>Data Divisi</a>
                            </li>
                            <li>
                               <a  href="<?php echo base_url('Sallary')?>"><i class="fa fa-desktop fa-3x"></i>Data Sallary</a>
                            </li>
                            <li>
                               <a  href="<?php echo base_url('Tunjangan')?>"><i class="fa fa-desktop fa-3x"></i>Data TUnjangan</a>
                            </li>

                          </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Laporan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li>
                               <a  href="<?php echo base_url('Laporan')?>"><i class="fa fa-desktop fa-3x"></i>Laporan All</a>
                            </li>
                            <li>
                               <a  href="<?php echo base_url('PLaporan')?>"><i class="fa fa-desktop fa-3x"></i>Laporan Penggajian</a>
                            </li>
                            <li>
                               <a  href="<?php echo base_url('TLaporan')?>"><i class="fa fa-desktop fa-3x"></i> Laporan Tunjangan</a>
                            </li>

                          </ul>
                    </li>
          
                             
                  
                </ul>
               
            </div>
            
        </nav>  