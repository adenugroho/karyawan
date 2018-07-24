  
     <!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Tunjangan/Potongan</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
 
                   
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Tunjangan/Potongan</label>
                        <div class="col-xs-9">
                            <input name="nama" id="nama" class="form-control" type="text" placeholder="Masukan Nama Tunjangan/Potongan" style="width:335px;" required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Besar Tunjangan</label>
                        <div class="col-xs-9">
                            <input name="besar" id="besar" class="form-control" type="number" placeholder="Besar Tunjangan" style="width:335px;" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Status Tunjangan</label>
                        <div class="col-xs-9">
                            <select name="status" id="status"  class="form-control" style="width:335px;" required>
                                <option value="ON">ON</option>
                                <option value="OFF">OFF</option>
                            </select>
                        </div>
                    </div>
  <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Tunjangan</label>
                        <div class="col-xs-9">
                            <select  name="jenis" id="jenis" class="form-control" style="width:335px;" required>
                                <option value="T">Tunjangan Umum</option>
                                <option value="TT">Tunjangan Tetap</option>
                            </select>
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
                        <label class="control-label col-xs-3" >Nama Tunjangan</label>
                        <div class="col-xs-9">
                            <input name="nama_tunjangan" id="nama_tunjangan" class="form-control" type="text" placeholder="Nama Barang" style="width:335px;" >
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Besar Tunjangan</label>
                        <div class="col-xs-9">
                            <input name="besar_tunjangan" id="besar_tunjangan" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-9">
                             <select name="status_edit" id="status_edit" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
                                <option ></option>
                                <option value="ON">ON</option>
                                <option value="OFF">OFF</option>
                            </select>
                          
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis</label>
                        <div class="col-xs-9">
                            <select name="jenis_edit" id="jenis_edit" class="form-control" type="text"  style="width:335px;" required>
                                 <option ></option>
                                <option value="T">T</option>
                                <option value="TT">TT</option>
                            </select>
                           
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
        url:"<?php echo base_url("Tunjangan/karyawan")?>",
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
        url :"<?php echo base_url('Tunjangan/get_info')?>",
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
        tampil_data_barang();   //pemanggilan fungsi tampil barang.
         
        $('#mydata').dataTable();
          
        //fungsi tampil barang
        function tampil_data_barang(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>Tunjangan/data_barang',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].nama_tunjangan+'</td>'+
                                '<td>'+data[i].besar_tunjangan+'</td>'+
                                '<td>'+data[i].status+'</td>'+
                                 '<td>'+data[i].jenis+'</td>'+
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
                url  : "<?php echo base_url('Tunjangan/get_barang')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(id,nama_tunjangan, besar_tunjangan, status, jenis){
                        $('#ModalaEdit').modal('show');
                       $('[name="id"]').val(data.id);
                        $('[name="nama_tunjangan"]').val(data.nama_tunjangan);
                        $('[name="besar_tunjangan"]').val(data.besar_tunjangan);
                        $('[name="status_edit"]').val(data.status);
                         $('[name="jenis_edit"]').val(data.jenis);
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
            var nama=$('#nama').val();
            var besar=$('#besar').val();
            var status=$('#status').val();
            var jenis=$('#jenis').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('Tunjangan/simpan_barang')?>",
                dataType : "JSON",
                data : {nama:nama , besar:besar, status:status,jenis:jenis},
                success: function(data){
                    $('[name="nama"]').val("");
                    $('[name="besar"]').val("");
                    $('[name="status"]').val("");
                     $('[name="jenis"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });
 
        //Update Barang
        $('#btn_update').on('click',function(){
            var id=$('#id').val();
            var nama_tunjangan=$('#nama_tunjangan').val();
            var besar_tunjangan=$('#besar_tunjangan').val();
             var status=$('#status_edit').val();
            var jenis=$('#jenis_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('Tunjangan/update_barang')?>",
                dataType : "JSON",
                data : {id:id , nama_tunjangan:nama_tunjangan,besar_tunjangan:besar_tunjangan, status:status,jenis:jenis},
                success: function(data){
                     $('[name="id"]').val(data.id);
                        $('[name="nama_tunjangan"]').val(data.nama_tunjangan);
                        $('[name="besar_tunjangan"]').val(data.besar_tunjangan);
                        $('[name="status"]').val(data.status);
                         $('[name="jenis_edit"]').val(data.jenis);
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
            url  : "<?php echo base_url('Tunjangan/hapus_barang')?>",
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

