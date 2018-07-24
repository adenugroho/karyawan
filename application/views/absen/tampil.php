    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
          <h2>Data Absen</h2>
          <hr/>
                 <!-- /. ROW  -->      
            
         
   <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" >Custom Filter : </h3>
            </div>
            <div class="panel-body">
                <form id="form-filter" class="form-horizontal" >
                   
                    <div class="form-group">
                        <label for="FirstName" class="col-sm-2 control-label">Nip</label>
                     
          
            <select class="form-control" id="nip" onChange="get_data(this.value)" style="width:150px">
                <option></option>
            </select>
            
         
                    </div>
                    <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label">Tanggal</label>
                        <div class="col-sm-4">
                             <div class="date" data-date="" data-date-format="dd/mm/yy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
         <input class="form-control datepicker"  id="tanggal" data-date-format="yyyy-mm-dd" type="text" name="tanggal" placeholder="Tanggal Absen"  >
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
                     <th>Absen IN</th>
                     <th>Absen OUT</th>
                   
                    
                   
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
                     <th>Absen IN</th>
                     <th>Absen OUT</th>
                    
                </tr>
            </tfoot>
        </table>
   
  <br/>
 
 