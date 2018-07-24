 <div id="page-wrapper" >
            <div id="page-inner">
          <h2>Data Tidak Hadir</h2>
          <hr/>
            <?php if ($this->session->flashdata('success')) : ?>
    <script>alert('Cuti berhasil di tambahkan!!!' )</script>;
  <?php endif; ?>

          <?php if ($this->session->flashdata('gagal')) : ?>
    <script>alert('Maaf tidak bisa ambil cuti!!!' )</script>;
  <?php endif; ?>          
            
         
   <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" >Filter</h3>
            </div>
            <div class="panel-body">
                <form id="form-filter" class="form-horizontal" >
                   
                    <div class="form-group">

                        <label for="FirstName" class="col-sm-2 control-label">Nip</label>
                        <div class="col-sm-2">
                        <input type="text" class="form-control"  name="" id="nip" style="width: 150PX" readonly="">
                      </div>
                       <div class="col-sm-2">
          
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">. . .</button>
                   </div>
                    </div>
                 
                    
                   <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label">Bulan Tidak Hadir</label>
                        <div class="col-sm-1">
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
                         <div class="col-sm-1">
  <select name="tahun" class="form-control" id="tahun" style="width: 100px">
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
              
                    <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label"></label>
                        <div class="col-sm-4">
                            <button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
                            <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

 <br/>
 <br/>
 <br/>
   
        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nip</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                  
                   
                    
                   
                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
                <tr>
                   <th>No</th>
                    <th>Nip</th>
                    <th>Nama</th>
                     <th>Tanggal</th>
                 
                    
                </tr>
            </tfoot>
        </table>
   
<h3 align="center">Data yang tidak Hadir Hari ini.</h3>
  <div class="form-group">
              
                <div class="row">
                    <div class="col-md-1">
                      <?php
                      if(date("h:i:s")>="17:00:00" && date("h:i:s")<="23:00:00"){
                      ?>
  <form method="post" action="Absenfalse/alpa">
    <button type="submit" value="Update" class="btn btn-success">Update</button>
  </form>
  <?php
}
  ?>
</div>
 <div class="col-md-1">
  <form method="post" action="Absenfalse/reload_data">
    <button type="submit" value="Update" class="btn btn-success">Reload</button>
  </form>
</div>
</div>
</div>
      <div class="modal-body">
                        <table  id="lookup1" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nip</th>
                                    <th>Nama</th>
                                     <th>Tanggal Sekarang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $date=date("Y-m-d");
                              

                                
                                //Data mentah yang ditampilkan ke tabel    
                              $query=$this->db->query("select nip,nama,CURDATE() as tanggal from karyawan where NOT (tanggal_absen='$date' && status='TRUE' or cuti='C') ");
                              foreach($query->result() as $row){
                                    ?>
                                    <tr class="pilih" nip="<?php echo $row->nip; ?>">
                                        <td><?php echo $row->nip; ?></td>
                                        <td><?php echo $row->nama; ?></td>
                                         <td><?php echo $row->tanggal; ?></td>
                                        
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>  
                    </div>
  <br/>
 
 