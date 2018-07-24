    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
          <h2>Data Pengaturan Upah</h2>
          <hr/>
            <?php if ($this->session->flashdata('success')) : ?>
    <script>alert('Cuti berhasil di tambahkan!!!' )</script>;
  <?php endif; ?>

          <?php if ($this->session->flashdata('gagal')) : ?>
    <script>alert('Maaf tidak bisa ambil cuti!!!' )</script>;
  <?php endif; ?>

                 <!-- /. ROW  -->
                      
            
         <div class="well">
 
    <!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Data
              
                <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Barang</a></div>
            </h1>
        </div>
    <div class="row">
        <div id="reload">
        <table class="table table-striped" id="mydata">
            <thead>
                <tr>
                    <th>Golongan</th>
                    <th>Gaji Pokok</th>
                    <th>Uang Lembur</th>
                    <th style="text-align: right;">Aksi</th>
                </tr>
            </thead>
            <tbody id="show_data">
                 
            </tbody>
        </table>
        </div>
    </div>
  </div>

 