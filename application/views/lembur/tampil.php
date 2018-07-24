   <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
          <h2>Data Lembur Karyawan</h2>
          <hr/>
            <?php if ($this->session->flashdata('success')) : ?>
    <script>alert('Cuti berhasil di tambahkan!!!' )</script>;
  <?php endif; ?>

          <?php if ($this->session->flashdata('gagal')) : ?>
    <script>alert('Maaf tidak bisa ambil cuti!!!' )</script>;
  <?php endif; ?>

                 <!-- /. ROW  -->       
            
         
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
                        <input type="text" class="form-control datepicker"  name="" id="nip" style="width: 150PX">
                      </div>
                       <div class="col-sm-2">
          
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">. . .</button>
                   </div>
                    </div>
                 
                    
                   <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label">Tanggal Selesai</label>
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

        <div align="left">
  <form action="<?php echo base_url('Lembur/simpan')?>" method="post" autocomplete="off">
<div class="example" data-text="Autocomplete Select2">
            <div class="form-group">
              
                <div class="row">
                    <div class="col-md-2">
                       
                        <select class="form-control" id="nips" name="nip" onChange="get_data(this.value)" required="" >
                <option></option>
            </select>
                    </div>
                    <div class="col-md-2">
                         <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" readonly="" />
                    </div>
                    <div class="col-md-2">
                         <input type="text" class="form-control" name="jumlah"   placeholder="Jumlah Jam" required=""  />
                    </div>
                    
                   
                    
                         
                    
                   
                   <div class="col-md-1">
                          <input type="submit" value="Simpan" class="btn btn-primary" />
                    </div>
                </div>
            </div>
 </div>
           
        </form>
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
                    <th>Jam Mulai</th>
                    <th>Jumlah Jam</th>
                   
                    
                   
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
                  <th>Jam Mulai</th>
                    <th>Jumlah Jam</th>
                    
                </tr>
            </tfoot>
        </table>
   
  <br/>
 
 