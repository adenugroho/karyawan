 <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
          <h2>Data Cuti Umum</h2>
          <hr/>
            <?php if ($this->session->flashdata('success')) : ?>
    <script>alert('Cuti berhasil di tambahkan!!!' )</script>;
  <?php endif; ?>

   <?php if ($this->session->flashdata('diambil')) : ?>
    <script>alert('Cuti sudah di ambil pada hari yang di pilih!!!' )</script>;
  <?php endif; ?>

          <?php if ($this->session->flashdata('gagal')) : ?>
    <script>alert('Maaf tidak bisa ambil cuti!!!' )</script>;
  <?php endif; ?>

                 <!-- /. ROW  -->
                     
            
         
   <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" >Filters</h3>
            </div>
            <div class="panel-body">
                <form id="form-filter" class="form-horizontal" >
                   
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
                        <label for="LastName" class="col-sm-2 control-label">Tanggal Mulai</label>
                        <div class="col-sm-4">
                             <div class="date" data-date="" data-date-format="dd/mm/yy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
         <input class="form-control datepicker"  id="tanggal_mulai" data-date-format="yyyy-mm-dd" type="text" name="tanggal_mulai" placeholder="Tanggal Absen"  >
        </div>
                        </div>
                    </div>
                    
                   <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label">Tanggal Selesai</label>
                        <div class="col-sm-4">
                             <div class="date" data-date="" data-date-format="dd/mm/yy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
         <input class="form-control datepicker"  id="tanggal_selesai" data-date-format="yyyy-mm-dd" type="text" name="tanggal_selesai" placeholder="Tanggal Absen"  >
        </div>
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
  <form action="<?php echo base_url('Cutiumum/simpan')?>" method="post" autocomplete="off">
<div class="example" data-text="Autocomplete Select2">
            <div class="form-group">
              
                <div class="row">
                    <div class="col-md-2">
                       
                        <select class="form-control" id="nips" name="nip" onChange="get_data(this.value)" required>
                <option></option>
            </select>
                    </div>
                    <div class="col-md-2">
                         <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" readonly="" required />
                    </div>
                    <div class="col-md-2">
                        <select class="form-control" name="jenis_cuti">
                          <option>Pilih Kode Cuti</option>
                          <option value="ML">ML</option>
                          <option value="MP">MP</option>
                          <option value="MA">MA</option>
                          <option value="MN">MN</option>
                          <option value="MK">MK</option>
                          <option value="MI">MI</option>
                          <option value="MD">MD</option>
                          <option value="MK">MK</option>
                          <option value="MS">MS</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                         <input type="text" class="form-control" name="jumlah"  id="val2"  placeholder="Jumlah Cuti" required />
                    </div>
                   
                         
                     <div class="col-md-1">
                         <div class="date" data-date="" data-date-format="dd/mm/yy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
         <input class="form-control datepicker"  id="tanggal" data-date-format="yyyy-mm-dd" type="text" name="tanggal_mulai" placeholder="Mulai " required />
        </div>
                    </div>
                   
                   <div class="col-md-1">
                          <input type="submit" value="Simpan" class="btn btn-primary" />
                    </div>
                </div>
            </div>
 </div>
           
        </form>
      </div>

      <div>
        <font size="3">Kode Cuti:</font>  
        <br/>
        <font size="3">ML=Melahirkan || MP=Pekerja Menikah || MA=Menikahkan anaknya || MN=Mengkhitankan anaknya || MK=Membaptiskan anaknya || MI=Istri melahirkan/mengalami keguguran kandungan || MD=Suami/Istri, orang tua/mertua, anak atau menantu meninggal dunia || MK=Anggota keluarga dalam satu rumah meninggal dunia. || MS=Sakit. </font>  
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
                    <th>Jenis Cuti</th>
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
                    <th>Jenis Cuti</th>
                    <th>Tanggal</th>
                    
                    
                </tr>
            </tfoot>
        </table>
   
  <br/>
 
 