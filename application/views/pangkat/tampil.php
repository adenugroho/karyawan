  <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
          <h2>Data Pangkat Karyawan</h2>
          <hr/>
            <?php if ($this->session->flashdata('success')) : ?>
    <script>alert('Berhasil di tambahkan!!!' )</script>;
  <?php endif; ?>

          <?php if ($this->session->flashdata('gagal')) : ?>
    <script>alert('Maaf tidak bisa ambil cuti!!!' )</script>;
  <?php endif; ?>

                 <!-- /. ROW  -->
                    
            
         
   <br>

 <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" >Update Kenaikan/Penurunan Pangkat Karyawan</h3>
            </div>
            <div class="panel-body">
        
  <form action="<?php echo base_url('Pangkat/update')?>" method="post" autocomplete="off" class="form-horizontal">

            <div class="form-group">
              
               
                    <div class="form-group">

                        <label for="FirstName" class="col-sm-2 control-label">Nip</label>
                    <div class="col-sm-4">
                       
                        <select class="form-control" id="nips" name="nip" onChange="get_data(this.value)" required="">
                <option></option>
            </select>
                    </div>
                </div>
                <div class="form-group">

                        <label for="FirstName" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-4">
                         <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" readonly="" />
                    </div>
                </div>
                    <div class="form-group">

                        <label for="FirstName" class="col-sm-2 control-label">Divisi Sebelumnya</label>
                    <div class="col-sm-4">
                         <input type="text" class="form-control" name="divisi"  id="val2"  placeholder="DIvisi" readonly="" />
                    </div>
                </div>
                    <div class="form-group">

                        <label for="FirstName" class="col-sm-2 control-label">Golongan Sebelumnya</label>
                     <div class="col-sm-4">
                         <input type="text" class="form-control" name="golongan"  id="val2"  placeholder="Golongan" readonly=""/>
                    </div>
                </div>
                    <div class="form-group">

                        <label for="FirstName" class="col-sm-2 control-label">Divisi Baru</label>
                     <div class="col-sm-4">
                        <input name="divisib" type="radio" value="Plant" required="" />
        Plant || <input type="radio" name="divisib" value="Logistik" />
        Logistik || <input type="radio" name="divisib" value="Packing" />
        Packing || <input type="radio" name="divisib" value="IT" />
        IT
                    </div>
                </div>

                 <div class="form-group">

                        <label for="FirstName" class="col-sm-2 control-label">Gologan Baru</label>                                  
                     <div class="col-sm-4">
                        <input name="golonganb" type="radio" value="I" required="" />
        I || <input type="radio" name="golonganb" value="II" />
        II || <input type="radio" name="golonganb" value="II" />
        III || <input type="radio" name="golonganb" value="IV" />
        IV
                    </div>
                </div>
                          
                   
                   <div class="col-sm-1">
                          <input type="submit" value="Update" class="btn btn-primary" />
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
                    <th>Divisi</th>
                    <th>Golongan</th>
                    <th>Tanggal Update</th>
                    
                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nip</th>
                    <th>Nama</th>
                    <th>Divisi</th>
                    <th>Golongan</th>
                    <th>Tanggal Update</th>
                    
                </tr>
            </tfoot>
        </table>
   
  <br/>
 
 