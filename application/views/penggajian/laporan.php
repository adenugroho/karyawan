  <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
          <h2>Data Upah</h2>
          <hr/>
                 <!-- /. ROW  -->
              <?php if ($this->session->flashdata('sukses')) : ?>
   <div class="alert alert-success" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Success!</strong> Berhasil Di Tambahkan </div>
  <?php endif; ?>

          <?php if ($this->session->flashdata('gagal')) : ?>
    <div class="alert alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Gagal!</strong>Maaf Anda Sudah Melakukan Input. </div>
  <?php endif; ?>
              
           
         
   <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" >Filter : </h3>
            </div>
            <div class="panel-body">
                <form  action="<?php echo site_url('Penggajian/search_keyword');?>" method = "post"  class="form-horizontal" >
                   
                    <div class="form-group">
                        <label for="FirstName" class="col-sm-2 control-label">Nip</label>
                    
          
            
                        <div class="col-sm-2">
                        <input type="text" class="form-control"  name="nip" id="nip" style="width: 150PX" readonly="">
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
                        <label for="LastName" class="col-sm-2 control-label"></label>
                        <div class="col-sm-4">
                            <input type="submit" value = "Search" name="submit" class="btn btn-success" />
                           <a href="<?php echo site_url('Penggajian');?> " class="btn btn-default" >Back</a>
                           || <button onclick="printContent('div1')" class="btn btn-danger">Print</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

      




       <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" >Input Penggajian : </h3>
            </div>
            <div class="panel-body">
                <form  action="<?php echo site_url('Penggajian/lap_penggajian');?>" method = "post"  class="form-horizontal" autocomplete="off">
                   
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1" align="center">
                          <label>Pilih</label>
                        </div>
                     <div class="col-md-1">
                       
                        <select class="form-control" id="nips" name="nip" onChange="get_data(this.value)" >
                <option></option>
            </select>
                    </div>
                    <div class="col-sm-2">
                     <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" readonly="">
                   </div>
                    <div class="col-sm-1">
                     <input type="text" name="golongan" id="nama" class="form-control" placeholder="Golongan" readonly="">
                   </div>
                    <div class="col-sm-1">
                     <input type="text" name="gapok" id="gapok" class="form-control" placeholder="Gaji Pokok" onkeyup="sum();" readonly="" />
                   </div>
                    <div class="col-sm-1">
                     <input type="text" name="lembur" id="lembur" class="form-control" placeholder="Lembur" onkeyup="sum();" readonly="" />
                   </div>
                     <div class="col-sm-2">
                     <input type="text" name="BANK" class="form-control" placeholder="BANK" onkeyup="sum();" readonly="" />
                   </div>

                   <div class="col-sm-2">
                     <input type="text" name="no_rek"  class="form-control" placeholder="No Rek" readonly="">
                     <input type="hidden" name="divisi"  class="form-control" >
                      <div class="col-sm-2">
                     <input type="text" name="jamtotal" id="jamtotal"  class="form-control" placeholder="jam" readonly="">
                   
                   </div>
                   
                   </div>
                   
                    </div>
                    </div>

                    
 <div class="form-group">
                       <div class="row">
                        <div class="col-md-1" align="center">
                          <label>Input</label>
                        </div>
                    <div class="col-sm-1">
                     <input type="number" name="ketidakhadiran" id="ketidakhadiran"  class="form-control" placeholder="Alpa" onkeyup="sum();" required="" />
                   </div>
                    <div class="col-sm-1">
                     <input type="number" name="jml_lembur" id="jml_lembur" class="form-control" placeholder="Lembur" onkeyup="sum();" required="" />
                   </div>
                   <div class="col-sm-1">
                     <input type="number" name="bonus" id="bonus" class="form-control" placeholder="Bonus" onkeyup="sum();" required="" />
                   </div>
                    <div class="col-sm-1">
                    <?php
                    foreach ($tampiltt as $tampiltts) {
                      if($tampiltts->tunjangan > 0){
                    ?>

                     <input type="number" name="tunjangan" id="tunjangan"  value="<?php echo $tampiltts->tunjangan; ?>" class="form-control" placeholder="Bonus" onkeyup="sum();" readonly />
                     <?php
                   }else{

                     ?>
                      <input type="number" name="tunjangan" id="tunjangan"  value="0" class="form-control" placeholder="Bonus" onkeyup="sum();" readonly />
                     <?php
                   }
                 }
                     ?>
                   </div>
                   <div class="col-sm-1">
                     <input type="number"  id="potongan" class="form-control" placeholder="Potongan" readonly="">
                   </div>
                   <div class="col-sm-2">
                     <input type="number" name="total" id="total" class="form-control" placeholder="Total Gaji" readonly="">

                   </div>
   <div class="col-sm-1">
                     <select name="metode" class="form-control">
                      <option value="Transfer">Transfer</option>
                       <option value="Cash">Cash</option>
                       
                     </select>

                   </div>

                     <div class="col-sm-1">
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

                     <div class="col-sm-1">
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
                        <label for="LastName" class="col-sm-2 control-label"></label>
                        <div class="col-sm-4">
                            <input type="submit" value = "Input" name="submit" class="btn btn-success" />
                           || <button onclick="printContent('div1')" class="btn btn-danger">Print</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      

  
  <div id="hasil"></div>


<div id="div1">
 
 <br/>
 <div>
 <h3 align="center">Laporan Cuti </h3>
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

<br/>
<br/>
<br/>
<div>
<h3 align="center">Laporan Absen </h3>
</hr>
</br>
</br>
<table width="100%" border="1">
        <tr>
           <td>No</td>
        <td>Nip</td>
        <td>Nama</td>
        <td>Tanggal</td>
        <td>TIME IN</td>
        <td>TIME OUT</td>
</tr>
<?php
$no=1;
foreach($results1 as $row){
    ?>
<tr>
  <td><?php echo $no; ?></td>
         <td><?php echo $row->nip; ?></td>
        <td><?php echo $row->nama; ?></td>
         <td><?php echo $row->tanggal; ?></td>
          <td><?php echo $row->datein; ?></td>       
          <td><?php echo $row->dateout; ?></td> 
        
    </tr>
    <?php
    $no++;
 }
 ?>
</table>
<br/>
<br/>
<br/>
<div>
<h3 align="center">Laporan Lembur </h3>
</hr>
</br>
</br>
<table width="100%" border="1">
        <tr>
           <td>No</td>
        <td>Nip</td>
        <td>Nama</td>
        <td>Tanggal</td>
        <td>Jam</td>
        <td>Jumlah</td>
</tr>
<?php
$no=1;
foreach($lembur as $row){
    ?>
<tr>
  <td><?php echo $no; ?></td>
         <td><?php echo $row->nip; ?></td>
        <td><?php echo $row->nama; ?></td>
         <td><?php echo $row->tanggal; ?></td>
          <td><?php echo $row->jam_mulai; ?></td> 
          <td><?php echo $row->jumlah; ?></td>       
        
    </tr>
    <?php
    $no++;
 }
 ?>
</table>

<br/>
<br/>
<br/>
<div>
<h3 align="center">Laporan Ketidakhadiran </h3>
</hr>
</br>
</br>
<table width="100%" border="1">
        <tr>
           <td>No</td>
        <td>Nip</td>
        <td>Nama</td>
        <td>Tanggal</td>
    
</tr>
<?php
$no=1;
foreach($alpa as $row){
    ?>
<tr>
  <td><?php echo $no; ?></td>
         <td><?php echo $row->nip; ?></td>
        <td><?php echo $row->nama; ?></td>
         <td><?php echo $row->tanggal; ?></td>
        
        
    </tr>
    <?php
    $no++;
 }
 ?>
</table>
</div>