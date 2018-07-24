 
     <!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Divisi</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
   <div class="form-group">

                        <label for="FirstName" class="col-sm-2 control-label">Nip</label>
                         <div class="col-sm-2">
          
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">. . .</button>
                   </div>
                        <div class="col-sm-2">
                        <input type="text" class="form-control datepicker"  name="" id="nip" readonly="" required="">
                      
                      </div>
                      
                    </div>
                     <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama Pimpinan" style="width:335px;" required readonly="">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-xs-3" >Divisi Baru</label>
                        <div class="col-xs-9">
                            <input name="new_divisi" id="new_divisi" class="form-control" type="text" placeholder="Divisi Baru" style="width:335px;" required>
                        </div>
                    </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->
 
        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Edit Barang</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
 
                    
                            <input name="id" id="id" class="form-control" type="hidden" placeholder="Kode Barang" style="width:335px;" readonly>
                        
 
                   <div class="form-group">

                        <label for="FirstName" class="col-sm-2 control-label">Nip</label>
                         <div class="col-sm-2">
          
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">. . .</button>
                   </div>
                        <div class="col-sm-2">
                        <input type="text" class="form-control datepicker"  name="nips" id="nips" readonly="" required="">
                      
                      </div>
                      
                    </div>
                     <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pimpinan</label>
                        <div class="col-xs-9">
                            <input name="nama_pimpinans" id="nama_pimpinans" class="form-control" type="text" placeholder="Nama Pimpinan" style="width:335px;" required readonly="">
                        </div>
                    </div>
                   
 
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL EDIT-->
 
        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                           
                            <input type="hidden" name="id" id="id" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus barang ini?</p></div>
                                         
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->
             <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width:800px">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Karyawan</h4>
                    </div>
                    <div class="modal-body">
                        <table  id="lookup" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nip</th>
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //Data mentah yang ditampilkan ke tabel    
                              $query=$this->db->query("select * from karyawan");
                              foreach($query->result() as $row){
                                    ?>
                                    <tr class="pilih" nip="<?php echo $row->nip; ?>" nama="<?php echo $row->nama; ?>">
                                        <td><?php echo $row->nip; ?></td>
                                        <td><?php echo $row->nama; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div> 
            
             <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
      
           
  <script type="text/javascript">
 
//            jika dipilih, kode obat akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("nip").value = $(this).attr('nip');
                document.getElementById("nama").value = $(this).attr('nama');
                $('#myModal').modal('hide');
            });

            $(document).on('click', '.pilih', function (e) {
                document.getElementById("nips").value = $(this).attr('nip');
                document.getElementById("nama_pimpinans").value = $(this).attr('nama');
                $('#myModal').modal('hide');
            });
//            tabel lookup obat
            $(function () {
                $("#lookup").dataTable();
            });
 
            
        </script>


        


<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_barang();   //pemanggilan fungsi tampil barang.
         
        $('#mydata').dataTable();
          
        //fungsi tampil barang
        function tampil_data_barang(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>Divisi/data_barang',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].nip+'</td>'+
                                '<td>'+data[i].nama_pimpinan+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('Divisi/get_barang')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(nama, nip, nama_pimpinan){
                        $('#ModalaEdit').modal('show');
                        $('[name="namas"]').val(data.nama);
                        $('[name="nips"]').val(data.nip);
                        $('[name="nama_pimpinans"]').val(data.nama_pimpinan);
                    });
                }
            });
            return false;
        });
 
 
        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="id"]').val(id);
        });
 
        //Simpan Barang
         $('#btn_simpan').on('click',function(){
            var nip=$('#nip').val();
            var nama=$('#nama').val();
            var new_divisi=$('#new_divisi').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('Divisi/simpan_barang')?>",
                dataType : "JSON",
                data : {nip:nip , nama:nama, new_divisi:new_divisi},
                success: function(data){
                    $('[name="nip"]').val("");
                    $('[name="nama"]').val("");
                    $('[name="new_divisi"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });
 
        //Update Barang
        $('#btn_update').on('click',function(){
            var id=$('#id').val();
            var namas=$('#namas').val();
            var nips=$('#nips').val();
            var nama_pimpinan=$('#nama_pimpinans').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('Divisi/update_barang')?>",
                dataType : "JSON",
                data : {id:id , namas:namas, nips:nips,nama_pimpinans:nama_pimpinans},
                success: function(data){
                    $('[name="id"]').val("");
                    $('[name="namas"]').val("");
                    $('[name="nips"]').val("");
                    $('[name="nama_pimpinans"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });
 
        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var id=$('#id').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('Divisi/hapus_barang')?>",
            dataType : "JSON",
                    data : {id: id},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_barang();
                    }
                });
                return false;
            });
 
    });
 
</script>
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

