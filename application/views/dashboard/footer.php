     
 
             
            
             <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
      <script src="&lt;?php echo base_url();?&gt;asset/highcharts/jquery.min.js" type="text/javascript"></script>
<script src="https://code.highcharts.com/highcharts.js" type="text/javascript"></script>
<script src="https://code.highcharts.com/modules/exporting.js" type="text/javascript"></script>
<script src="https://code.highcharts.com/modules/offline-exporting.js" type="text/javascript"></script>
    <script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart',
   type: 'line',
  },
  title: {
   text: 'Grafik Statistik Absen 2018',
   x: -20
  },
  subtitle: {
   text: 'Count Absen',
   x: -20
  },
  xAxis: {
   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
  },
  yAxis: {
   title: {
    text: 'Total Absen'
   }
  },
  series: [{
   name: 'Data dalam Bulan',
   data: <?php echo json_encode($grafik); ?>
  }]
 });
}); 
</script>

<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'cuti',
   type: 'line',
  },
  title: {
   text: 'Grafik Statistik Cuti 2018',
   x: -20
  },
  subtitle: {
   text: 'Count Cuti',
   x: -20
  },
  xAxis: {
   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
  },
  yAxis: {
   title: {
    text: 'Total Cuti'
   }
  },
  series: [{
   name: 'Data dalam Bulan',
   data: <?php echo json_encode($cuti); ?>
  }]
 });
}); 
</script>

<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'tidakhadir',
   type: 'line',
  },
  title: {
   text: 'Grafik Tanpa Keterangan 2018',
   x: -20
  },
  subtitle: {
   text: 'Count Cuti',
   x: -20
  },
  xAxis: {
   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
  },
  yAxis: {
   title: {
    text: 'Total Tidakhadir'
   }
  },
  series: [{
   name: 'Data dalam Bulan',
   data: <?php echo json_encode($tidakhadir); ?>
  }]
 });
}); 
</script>
</body>

  
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
 <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js')?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js')?>"></script>
         
       <script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>

<!-- Fungsi datepickier yang digunakan -->

<script type="text/javascript">
 $('.datepicker').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
    });
</script> 
       
       
</html>

