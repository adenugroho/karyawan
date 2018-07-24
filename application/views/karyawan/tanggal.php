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
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
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
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="<?php echo base_url('assets/img/find_user.png')?>" class="user-image img-responsive"/>
                    </li>
                
                    <li>
                        <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="<?php echo base_url('tamu')?>"><i class="fa fa-desktop fa-3x"></i> Data Kunjungan</a>
                    </li>
                        
                     <li>
                        <a  href="<?php echo base_url('input/index')?>"><i class="fa fa-desktop fa-3x"></i> Tambah Kunjungan</a>
                    </li>
                    
                                       
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
               <h2>Data Kunjungan</h2>
             <hr />  
          <p align="left">
      <?php echo form_open('tamu/tanggal') ?>
    <input type="date" name="keyword" placeholder="search">
    <input type="date" name="keyword1" placeholder="search">
    <input type="submit" name="search_submit" value="Cari">
  <?php echo form_close() ?>
    </p>     
<form action="<?php echo site_url('tamu/index/'); ?>" method="post">
    <p align="right">
      <input type="search" name="cari" placeholder="Search Keyword..."> <input type="submit" name="q" value="Search" >
    </p>
    
<div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
         <th>Nama</th>
          <th>RUangan</th>
          <th>Tanggal Kunjungan</th>
          <th>Kegiatan/Acara</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        if (count($product) > 0) {
        foreach($product as $products) {  echo "<div class=\"letter\">"; ?>
        <tr>
          <td><?php echo $products->nama_pengunjung ?></td>
           <td><?php echo $products->ruangan ?></td>
            <td><?php echo $products->tanggal ?></td>
             <td><?php echo $products->acara ?></td>
        </tr>
      <?php 
  echo "</div>";
          }
    }else {
          echo "<tbody><tr><td colspan='8' style='padding:10px; background:#F00; border:none; color:#FFF;'>Hasil pencarian tidak ditemukan.</td></tr></tbody>";
        } ?>
 
      </tbody>
    </table>
    </form>
           </div>    
        </div>
                 <!-- /. ROW  -->
                <hr />                
                
               
                 <!-- /. ROW  -->
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js')?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery.metisMenu.js')?>"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url('assets/js/morris/raphael-2.1.0.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/morris/morris.js')?>"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
    
   
</body>
</html>

<form method="post" action="input/inputdatatamu">
     <input type="text" name="nama_pengunjung" />
     <input type="text" name="ruangan" />
    <input type="text" name="acara" />
    <input type="submit" value="Tambah">
    <input type="reset" value="Batal">
</form>