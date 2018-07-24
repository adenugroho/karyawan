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
  <option <?php if( $now=='02'){echo "selected"; } ?> value="02">Februari</option>
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
                         
                           || <button onclick="printContent('div1')" class="btn btn-danger">Print</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

      




       



</div>