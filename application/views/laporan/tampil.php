   <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
          <h2>Data Laporan</h2>
          <hr/>
                 <!-- /. ROW  -->          
           
         
   <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" >Filter : </h3>
            </div>
            <div class="panel-body">
                <form  action="<?php echo site_url('Laporan/search_keyword');?>" method = "post"  class="form-horizontal" >
                   
                    <div class="form-group">
                        <label for="FirstName" class="col-sm-2 control-label">Nip</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control datepicker"  name="nip" id="nip" style="width: 150PX" readonly="">
                      </div>
                       <div class="col-sm-2">
          
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">. . .</button>
                   
            
         </div>
                    </div>
                    

                    
 <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label">Bulan/Tahun</label>
                        <div class="col-sm-4">
                          <div class="col-sm-4">
 <?php
$now=date("m");

                            ?>
<select name="bulan" class="form-control" style="width: 100px">
  <option <?php if( $now=='01'){echo "selected"; } ?> value="01">Januari</option>
  <option  <?php if( $now=='02'){echo "selected"; } ?> value="02">Februari</option>
  <option <?php if( $now=='03'){echo "selected"; } ?> value="03">Maret</option>
  <option <?php if( $now=='04'){echo "selected"; } ?> value="04">April</option>
  <option <?php if( $now=='05'){echo "selected"; } ?> value="05">Mei</option>
  <option <?php if( $now=='06'){echo "selected"; } ?> value="06">Juni</option>
  <option <?php if( $now=='07'){echo "selected"; } ?>  value="07">Juli</option>
  <option <?php if( $now=='08'){echo "selected"; } ?> value="08">Agustus</option>
  <option <?php if( $now=='09'){echo "selected"; } ?> value="09">September</option>
  <option <?php if( $now=='10'){echo "selected"; } ?> value="10">Oktober</option>
  <option <?php if( $now=='11'){echo "selected"; } ?> value="11">November</option>
  <option <?php if( $now=='12'){echo "selected"; } ?> value="12">Desember</option>
</select>
                        </div>
                          <div class="col-sm-4">
                        <select name="tahun" class="form-control" style="width: 100px">
<?php
$mulai= date('Y') - 50;
for($i = $mulai;$i<$mulai + 100;$i++){
    $sel = $i == date('Y') ? ' selected="selected"' : '';
    echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
}
?>
</select>
</div>

                    </div>
                  </div>
                     <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label">Jenis Laporan</label>
                        <div class="col-sm-4">
                            <select name="laporan" class="form-control">
                              <option value="absen">Absen</option>
                               <option value="cuti">Cuti</option>
     <option value="lap_gaji">Gaji</option>
</select>
                        </div>
                    </div>
                   
              
                    <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label"></label>
                        <div class="col-sm-4">
                            <input type="submit" value = "Search" name="submit" class="btn btn-success" />
                           <a href="<?php echo site_url('Laporan');?> " class="btn btn-default" >Back</a>
                           || <button onclick="printContent('div1')" class="btn btn-danger">Print</button>
                            <input type="submit" value="PDF" name="submit" class="btn btn-success" />

                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div align="left">
  
      </div>
 <br/>
 <br/>
 <br/>
   <div id="div1">
  
     <?php 
 if(isset($_POST['submit'])){
    ?>
   
<?php
$date=date('Y');
if($_POST['laporan']=='cuti'){
    ?>

    <h1 align="center">Laporan Cuti <?php echo $date; ?></h1>
</hr>
</br>
</br>
<table width="100%" border="1">
        <tr>
        <td>No</td>
        <td>Nip</td>
        <td>Nama</td>
        <td>Jenis Cuti</td>
        <td>Tanggal</td>
       
</tr>
    <?php
    $no=1;
foreach($results as $row){
?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row->nip; ?></td>
        <td><?php echo $row->nama; ?></td>
         <td><?php echo $row->jenis_cuti; ?></td>
          <td><?php echo $row->tanggal; ?></td>
          
        
    </tr>

<?php
$no++;
}
?>
</table>
<?php
}else if($_POST['laporan']=='absen'){
?>
 <h1 align="center">Laporan Absensi</h1>
</hr>
</br>
</br>
<table width="100%" border="1">
        <tr>
        <td>Nip</td>
        <td>Nama</td>
        <td>Tanggal</td>
       
</tr>
<?php
foreach($results1 as $row){
    ?>
<tr>
         <td><?php echo $row->nip; ?></td>
        <td><?php echo $row->nama; ?></td>
         <td><?php echo $row->tanggal; ?></td>
          
        
    </tr>
 
    <?php
}
?>
 </table>
<?php
}else if($_POST['laporan']=='lap_gaji'){
  ?>
</table>
 
<h3 align="center">Laporan Gaji</h3>
</hr>
</br>
</br>
<?php
foreach($lap_gaji as $row){
    ?>
   <table width="100%" border="1" class="table table-bordered">
    <tr>
    <td>Nama/Nip</td>
    <td>Divisi/Golongan</td>
     <td>Bank/No Rekening</td>
      <td>Metode</td></tr>
      <tr height="100%">
         <td><?php echo $row->nama; ?> / <?php echo $row->nip; ?></td>
    <td><?php echo $row->divisi; ?> / <?php echo $row->golongan; ?></td>
     <td><?php echo $row->bank; ?> / <?php echo $row->no_rek; ?></td>
      <td><?php echo $row->metode; ?></td>
      </tr>
   </table>

<table align="right" width="50%">
<tr>
  <td colspan="2" align="center"><font size="4">Total Gaji dan Tunjangan</font></td>
</tr>
<tr>
  <td colspan="2" align="center"><hr/></td>
</tr>
  <tr>
  </tr>
  <tr>
    <td>Gaji Pokok</td>
    <td>Rp. <?php echo  number_format($row->gaji_pokok,2,',','.'); ?></td>
  </tr>
 
  <tr>
    <td width="50%">Lembur</td>
    <td>Rp. <?php echo number_format($row->lembur,2,',','.'); ?></td>
  </tr>
  <tr>
    <td>Bonus</td>
    <td>Rp. <?php echo number_format($row->bonus,2,',','.'); ?></td>
  </tr>
    <tr>
    <td>Potongan/Tidak Hadir</td>
    <td>Rp. -<?php  $a=$row->gaji_pokok; $b=$row->ketidakhadiran; echo number_format(($a*(2/100)) * $b ,2,',','.'); ?> 
/ <?php echo $row->ketidakhadiran; ?>-Hari</td>
  </tr>
  
 <?php
}
foreach ($lap_tunjanganTT as $tunjangantt) {
?>
 <tr>
    <td><?php echo $tunjangantt->nama_tunjangan; ?></td>
    <td>Rp. <?php echo number_format($tunjangantt->besar_tunjangan,2,',','.'); ?></td>

  </tr>
<?php
}
?>

  </tr>
    <?php


foreach ($total as $total) {
$totals[] = $total->hasil;
?>
<tr>
  
  <tr>
  <td colspan="2" align="center"><hr/></td>
</tr>
<tr>
     <tr>
      <td>Total</td>
 
    <td width="50%">&nbsp;Rp. <?php echo number_format($total->hasil,2,',','.'); ?></td>
    
  </tr>
  <?php
  }
  ?> 
</tr>


  <tr>
    
   <td colspan="2" align="center"><hr/></td>
  </tr>

</table>


   
<table align="left" width="50%">
<tr>
  <td colspan="2" align="center"><font size="4">Potongan Tunjangan Tetap</font></td>
  <tr>
  <td colspan="2" align="center"><hr/></td>
</tr>
</tr>
<?php
foreach($lap_tunjangan as $row){
    ?>
   
   



 
  
  <tr>
    <td width="50%"><?php echo $row->nama_tunjangan; ?></td>
    <td width="50%">&nbsp;Rp. -<?php echo number_format($row->besar_tunjangan,2,',','.'); ?></td>
  </tr>
    <?php
}
foreach ($potongan_tunjangan as $potongan_tunjangan) {
 $potongan_tunjangans[] = $potongan_tunjangan->potongan;
?>
<tr>
  
    <td width="50%" colspan="2"><hr/></td>
  </tr>
<tr>
    <td width="50%">Total Gaji Kotor</td>
   
    <td width="50%">&nbsp;Rp. -<?php echo number_format($potongan_tunjangan->potongan,2,',','.'); ?></td>

  
  </tr>
  </table>
<?php
}
foreach ($hasil as $hasil) {
  # code...

?>

<br/>
<br/>
<table>
  <tr>
    <td>&nbsp;</td>

  </tr>
   <tr>
    <td>&nbsp;</td>
    
  </tr>
</table>

 <?php
$total = array_sum($totals);
$potongan_tunjangan = array_sum($potongan_tunjangans);
$hasil=$total-$potongan_tunjangan;
  ?>
  <div align="center">
<h3><font color="red"><b>Gaji Bersih&nbsp;Rp. <?php echo number_format($hasil,2,',','.'); ?></b></font></h3>
</div>
 
  <div class="border">
<font size="3">Hasil = <?php echo number_format($total,2,',','.'); ?> - <?php echo number_format($potongan_tunjangan,2,',','.'); ?></font>
</div>
<?php
}
}
         
?>   
 
 <?php
}else{

}
 ?>
  <br/>
 



