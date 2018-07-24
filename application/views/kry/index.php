<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>My Admin - is a responsive admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url('assets/bower_components/metisMenu/dist/metisMenu.min.css')?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url('assets/bower_components/morrisjs/morris.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">My Admin</span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs hidden-lg
 waves-effect waves-light"><i class="ti-arrow-circle-left ti-menu"></i>
</a></li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                  
                    <li>
                        <a class="profile-pic" href="#"> <img src="images/users/hritik.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Maruti</b> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <div class="navbar-default sidebar nicescroll" role="navigation">
            <div class="sidebar-nav navbar-collapse ">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="ti-search"></i> </button>
                            </span>
                        </div>
                    </li>
                    <li>
                        <a href="index.html" class="waves-effect"><i class="glyphicon glyphicon-fire fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.html" class="waves-effect"><i class="ti-user fa-fw"></i>Profile</a>
                    </li>
                    <li>
                        <a href="basic-table.html" class="waves-effect"><i class="ti-layout fa-fw"></i>Basic-Table</a>
                    </li>
                    <li>
                        <a href="themifyicon.html" class="waves-effect"><i class="ti-face-smile fa-fw"></i> Icons</a>
                    </li>
                    <li>
                        <a href="map-google.html" class="waves-effect"><i class="ti-location-pin fa-fw"></i> Google Map</a>
                    </li>
                    <li>
                        <a href="blank.html" class="waves-effect"><i class="ti-files fa-fw"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="404.html" class="waves-effect"><i class="ti-info fa-fw"></i> Error 404</a>
                    </li>
                </ul>
                <div class="center p-20">
                    <span class="hide-menu"><a href="http://wrappixel.com/templates/myadmin/" target="_blank" class="btn btn-info btn-block btn-rounded waves-effect waves-light">Upgrade to Pro</a></span>
                </div>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Welcome to Karyawan</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
              
                 <div class="row">
                   
                        <div class="white-box">
                            <h2>Status Absen</h2>
              <table width="50%" align="center" border="0">     
<?php
foreach ($tampil as $tampil) {
?>

<tr>
    <td width="30%">
Tanggal Absen</td><td> =</td><td> <?php echo $tampil->tanggal; ?></td>
</tr>
<tr>
    <td>
Jam Masuk</td><td>= </td><td><?php echo $tampil->datein; ?></td>
</tr>
<tr>
    <td>
Jam Keluar</td><td>= </td><td><?php echo $tampil->dateout; ?></td>
</tr>

<?php
}
?>
    </table>                </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <footer class="footer text-center"> 2017 &copy; Myadmin brought to you by wrappixel.com </footer>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/bower_components/metisMenu/dist/metisMenu.min.js')?>"></script>
    <!--Nice scroll JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.nicescroll.js')?>"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url('assets/bower_components/raphael/raphael-min.js')?>"></script>
    <script src="bower_components/morrisjs/morris.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('assets/js/waves.js')?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/js/myadmin.js')?>"></script>
    <script src="<?php echo base_url('assets/js/dashboard1.js')?>"></script>
</body>

</html>