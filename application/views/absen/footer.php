    
 
             
            
             <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
      
    
<script type="text/javascript">
$("#nip").select2({
    placeholder:"Nip",
    ajax:{
        url:"<?php echo base_url("Absen/barang")?>",
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
        url :"<? echo base_url('select2/get_info')?>",
        data:{id : v_id},
        success: function(data)
        {
            var dt = JSON.parse(data);
            $("input[name=nama]").val(dt.n_barang);
            $("input[name=type]").val(dt.tipe);
            $("input[name=merk]").val(dt.merk);
            $("input[name=h_jual]").val(dt.h_barang);
            $("input[name=h_beli]").val(dt.h_beli);
            $("input[name=stock]").val(dt.h_beli);
            
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
            "url": "<?php echo site_url('Absen/ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
               
                data.nip = $('#nip').val();
                data.tanggal = $('#tanggal').val();
                 
               
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

