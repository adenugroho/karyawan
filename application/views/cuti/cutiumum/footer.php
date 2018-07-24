 
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
                                    <tr class="pilih" nip="<?php echo $row->nip; ?>">
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
$("#nips").select2({
    placeholder:"Nip",
    ajax:{
        url:"<?php echo base_url("Cutiumum/karyawan")?>",
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
        url :"<?php echo base_url('Cutiumum/get_info')?>",
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
 
var table;
 
$(document).ready(function() {
 
    //datatables
    table = $('#table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Cutiumum/ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
               
                data.nip = $('#nip').val();
                data.tanggal_mulai = $('#tanggal_mulai').val();
                data.tanggal_selesai = $('#tanggal_selesai').val();
                 
               
            }
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
    });
 
    $('#btn-filter').click(function(){ //button filter event click
        table.ajax.reload();  //just reload table
    });
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });
 
});
 
</script>
       
  <script type="text/javascript">
 
//            jika dipilih, kode obat akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("nip").value = $(this).attr('nip');
                $('#myModal').modal('hide');
            });
//            tabel lookup obat
            $(function () {
                $("#lookup").dataTable();
            });
 
            function dummy() {
                var nama = document.getElementById("nama").value;
                alert('kode obat ' + nama + ' berhasil tersimpan');
            }
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

