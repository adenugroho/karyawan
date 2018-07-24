    <!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Karyawan</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
 
                   
 
                   
                     <input name="nip" id="nip" value="<?= $kodeunik; ?>" class="form-control" type="hidden" placeholder="Masukan Angka Romawi" style="width:335px;" required>
                     
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama" style="width:335px;" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-9">
                            <input name="username" id="username" class="form-control" type="text" placeholder="Username" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
                            <input name="password" id="password" class="form-control" type="text" placeholder="Password" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Bank</label>
                        <div class="col-xs-9">
                            <input name="bank" id="bank" class="form-control" type="text" placeholder="Bank" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Rekening</label>
                        <div class="col-xs-9">
                            <input name="no_rek" id="no_rek" class="form-control" type="text" placeholder="No Rekening" style="width:335px;" required>
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
                <h3 class="modal-title" id="myModalLabel">Edit Karyawan</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
 
                    
                            <input name="id" id="id" class="form-control" type="hidden" placeholder="Kode Barang" style="width:335px;" readonly>
                        
 
                     <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="nama_edit" id="nama_edit" class="form-control" type="text" placeholder="Nama" style="width:335px;" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-9">
                            <input name="username_edit" id="username_edit" class="form-control" type="text" placeholder="Username" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Bank</label>
                        <div class="col-xs-9">
                            <input name="bank_edit" id="bank_edit" class="form-control" type="text" placeholder="Bank" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Rekening</label>
                        <div class="col-xs-9">
                            <input name="no_rek_edit" id="no_rek_edit" class="form-control" type="text" placeholder="No Rekening" style="width:335px;" required>
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
 
<!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEditPassword" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Edit Karyawan</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
 
                    
                            <input name="id" id="id" class="form-control" type="hidden" placeholder="Kode Barang" style="width:335px;" readonly>
                        
 
                    
                     <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
                            <input name="password_edit" id="password_edit" class="form-control" type="text" placeholder="Password" style="width:335px;" required>
                        </div>
                    </div>

                   
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_updatepassword">Update</button>
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
             
            
             <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>

<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_sallary();   //pemanggilan fungsi tampil barang.
         
        $('#mydata').dataTable();
          
        //fungsi tampil barang
        function tampil_data_sallary(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>Karyawan/list',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].nip+'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].divisi+'</td>'+
                                '<td>'+data[i].golongan+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="Karyawan/qr/'+data[i].nip+'" class="btn btn-success">Convert</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-info  item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-info  item_password" data="'+data[i].id+'">Pasword</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger item_hapus" data="'+data[i].id+'">Hapus</a>'+
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
                url  : "<?php echo base_url('Karyawan/get_karyawan')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(id, nama, username, password, bank, no_rek){
                        $('#ModalaEdit').modal('show');
                       $('[name="id"]').val(data.id);
                        $('[name="nama_edit"]').val(data.nama);
                        $('[name="username_edit"]').val(data.username);
                        $('[name="bank_edit"]').val(data.bank);
                        $('[name="no_rek_edit"]').val(data.no_rek);
                    });
                }
            });

            return false;
        });
 
 $('#show_data').on('click','.item_password',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('Karyawan/get_password')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(id, password){
                        $('#ModalaEditPassword').modal('show');
                       $('[name="id"]').val(data.id);
                        $('[name="password_edit"]').val(data.password);
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
            var username=$('#username').val();
            var password=$('#password').val();
            var bank=$('#bank').val();
            var no_rek=$('#no_rek').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('Karyawan/simpan_karyawan')?>",
                dataType : "JSON",
                data : {nip:nip , nama:nama, username:username, password:password, bank:bank, no_rek:no_rek},
                success: function(data){
                    $('[name="nip"]').val("");
                    $('[name="nama"]').val("");
                    $('[name="username"]').val("");
                    $('[name="password"]').val("");
                    $('[name="bank"]').val("");
                    $('[name="no_rek"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_sallary();
                }
            });
             location.reload();
            return false;
        });
 
        //Update Barang
        $('#btn_update').on('click',function(){
            var id=$('#id').val();
            var nama=$('#nama_edit').val();
            var username=$('#username_edit').val();
            var bank=$('#bank_edit').val();
            var no_rek=$('#no_rek_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('Karyawan/update_karyawan')?>",
                dataType : "JSON",
                data : {id:id , nama:nama, username:username,bank:bank, no_rek:no_rek},
                success: function(data){
                    $('[name="id"]').val("");
                    $('[name="nama"]').val("");
                    $('[name="username"]').val("");
                    $('[name="bank"]').val("");
                    $('[name="no_rek"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_sallary();
                }
            });
              location.reload();
            return false;
        });
 
  //Update Barang
        $('#btn_updatepassword').on('click',function(){
            var id=$('#id').val();
            var password=$('#password_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('Karyawan/update_password')?>",
                dataType : "JSON",
                data : {id:id , password:password},
                success: function(data){
                    $('[name="id"]').val("");
                    $('[name="password"]').val("");
                    $('#ModalaEditPassword').modal('hide');
                    tampil_data_sallary();
                }
            });
              location.reload();
            return false;
        });
 

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var id=$('#id').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('Karyawan/hapus_karyawan')?>",
            dataType : "JSON",
                    data : {id: id},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_sallary();
                    }
                });
              location.reload();
                return false;
            });
 
    });
 
</script>
 
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
      <script src="<?php echo base_url('assets/js/morris/raphael-2.1.0.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/morris/morris.js')?>"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
 <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js')?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js')?>"></script>
   
</body>
</html>

