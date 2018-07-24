 
     <!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Barang</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
 
                   
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Golongan</label>
                        <div class="col-xs-9">
                            <input name="golongan" id="golongan" class="form-control" type="text" placeholder="Masukan Angka Romawi" style="width:335px;" required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Gaji Pokok</label>
                        <div class="col-xs-9">
                            <input name="gaji_pokok" id="gaji_pokok" class="form-control" type="text" placeholder="Gaji Pokok" style="width:335px;" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Uang Lembur</label>
                        <div class="col-xs-9">
                            <input name="uang_lembur" id="uang_lembur" class="form-control" type="text" placeholder="Uang Lembur" style="width:335px;" required>
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
                        <label class="control-label col-xs-3" >Golongan</label>
                        <div class="col-xs-9">
                            <input name="golongan_edit" id="golongan_edit" class="form-control" type="text" placeholder="Nama Barang" style="width:335px;" readonly="">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Gaji Pokok</label>
                        <div class="col-xs-9">
                            <input name="gaji_pokok_edit" id="gaji_pokok_edit" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Uang Lembur</label>
                        <div class="col-xs-9">
                            <input name="uang_lembur_edit" id="uang_lembur_edit" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
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
             
            
             <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
      
     
<script type="text/javascript">
$("#nips").select2({
    placeholder:"Nip",
    ajax:{
        url:"<?php echo base_url("Sallary/karyawan")?>",
        dataType: 'json',
        data: function (params) {

            var queryParameters = {
                text: params.term
            }
            return queryParameters;
        }   
    },
    cache: true,
    minimumInputLength: 1,
    formatResult: format,
    formatSelection: format,
    escapeMarkup: function(m) { return m; }
});
function format(x)
{
    return x.text;
}
function get_data(v_id)
{
    $.ajax({
        url :"<?php echo base_url('Sallary/get_info')?>",
        data:{id : v_id},
        success: function(data)
        {
            var dt = JSON.parse(data);
           
            $("input[name=nama]").val(dt.nama);
             $("input[name=cuti_b]").val(dt.cuti_b);
            
        }
    });
    
}


</script>

        


<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_sallary();   //pemanggilan fungsi tampil barang.
         
        $('#mydata').dataTable();
          
        //fungsi tampil barang
        function tampil_data_sallary(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>Sallary/sallary',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].golongan+'</td>'+
                                '<td>'+data[i].gaji_pokok+'</td>'+
                                '<td>'+data[i].uang_lembur+'</td>'+
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
                url  : "<?php echo base_url('Sallary/get_sallary')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(barang_kode, barang_nama, barang_harga){
                        $('#ModalaEdit').modal('show');
                       $('[name="id"]').val(data.id);
                        $('[name="golongan_edit"]').val(data.golongan);
                        $('[name="gaji_pokok_edit"]').val(data.gaji_pokok);
                        $('[name="uang_lembur_edit"]').val(data.uang_lembur);
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
            var kobar=$('#golongan').val();
            var nabar=$('#gaji_pokok').val();
            var harga=$('#uang_lembur').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('Sallary/simpan_sallary')?>",
                dataType : "JSON",
                data : {kobar:kobar , nabar:nabar, harga:harga},
                success: function(data){
                    $('[name="kobar"]').val("");
                    $('[name="nabar"]').val("");
                    $('[name="harga"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_sallary();
                }
            });
            return false;
        });
 
        //Update Barang
        $('#btn_update').on('click',function(){
            var id=$('#id').val();
            var golongan=$('#golongan_edit').val();
            var gaji_pokok=$('#gaji_pokok_edit').val();
            var uang_lembur=$('#uang_lembur_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('Sallary/update_sallary')?>",
                dataType : "JSON",
                data : {id:id , golongan:golongan, gaji_pokok:gaji_pokok,uang_lembur:uang_lembur},
                success: function(data){
                    $('[name="id"]').val("");
                    $('[name="golongan"]').val("");
                    $('[name="gaji_pokok"]').val("");
                    $('[name="uang_lembur"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_sallary();
                }
            });
            return false;
        });
 
        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var id=$('#id').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('Sallary/hapus_sallary')?>",
            dataType : "JSON",
                    data : {id: id},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_sallary();
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

