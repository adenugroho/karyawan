  <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
          <h2>Data Laporan Tunjangan</h2>
          <hr/>
                 <!-- /. ROW  -->         
           
         
   <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" >Filter : </h3>
            </div>
            <div class="panel-body">
                <form  action="<?php echo site_url('TLaporan/search_keyword');?>" method = "post"  class="form-horizontal" >
                   
                    <div class="form-group">
                        <label for="FirstName" class="col-sm-2 control-label">Divisi</label>
                    <div class="col-sm-2">
                       <select class="form-control" name="divisi">
                         <option value="">Pilih</option>
                      <?php
                        $query=$this->db->query("select nama from divisi");
                        foreach ($query->result() as $divisi) {
                        ?>

                         <option value="<?php echo $divisi->nama; ?>"><?php echo $divisi->nama; ?></option>
                      

                      <?php
                       }
                      ?>
                       </select>
                      </div>
                     
                       
                    </div>
                    

                    
 <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label">Bulan/Tahun</label>
                        <div class="col-sm-4">
                          <div class="col-sm-4">
 <?php
$now=date("m");

                            ?>
<select name="bulan" class="form-control" style="width: 100px">
  <option <?php if( $now=='01'){echo "selected"; } ?> value="01">Januari</option>
  <option  <?php if( $now=='02'){echo "selected"; } ?> value="02">Februari</option>
  <option <?php if( $now=='03'){echo "selected"; } ?> value="03">Maret</option>
  <option <?php if( $now=='04'){echo "selected"; } ?> value="04">April</option>
  <option <?php if( $now=='05'){echo "selected"; } ?> value="05">Mei</option>
  <option <?php if( $now=='06'){echo "selected"; } ?> value="06">Juni</option>
  <option <?php if( $now=='07'){echo "selected"; } ?>  value="07">Juli</option>
  <option <?php if( $now=='08'){echo "selected"; } ?> value="08">Agustus</option>
  <option <?php if( $now=='09'){echo "selected"; } ?> value="09">September</option>
  <option <?php if( $now=='10'){echo "selected"; } ?> value="10">Oktober</option>
  <option <?php if( $now=='11'){echo "selected"; } ?> value="11">November</option>
  <option <?php if( $now=='12'){echo "selected"; } ?> value="12">Desember</option>
</select>
                        </div>
                          <div class="col-sm-4">
                        <select name="tahun" class="form-control" style="width: 100px">
<?php
$mulai= date('Y') - 50;
for($i = $mulai;$i<$mulai + 100;$i++){
    $sel = $i == date('Y') ? ' selected="selected"' : '';
    echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
}
?>
</select>
</div>

                    </div>
                  </div>
                     
                   
              
                    <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label"></label>
                        <div class="col-sm-4">
                            <input type="submit" value ="Search" name="submit" class="btn btn-success" />
                           <a href="<?php echo site_url('Laporan');?> " class="btn btn-default" >Back</a>
                           || <button onclick="printContent('div1')" class="btn btn-danger">Print</button>
                            <input type="submit" value ="Excel" name="submit" class="btn btn-success" />
                             <input type="submit" value ="PDF" name="submit" class="btn btn-success" />

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
   <div id="div1">
  
     <?php 
 if(isset($_POST['submit'])){
    ?>
    <?php
    function getBulan($bln){
                switch ($bln){
                    case 1: 
                        return "Januari";
                        break;
                    case 2:
                        return "Februari";
                        break;
                    case 3:
                        return "Maret";
                        break;
                    case 4:
                        return "April";
                        break;
                    case 5:
                        return "Mei";
                        break;
                    case 6:
                        return "Juli";
                        break;
                    case 7:
                        return "Juni";
                        break;
                    case 8:
                        return "Agustus";
                        break;
                    case 9:
                        return "September";
                        break;
                    case 10:
                        return "Oktober";
                        break;
                    case 11:
                        return "November";
                        break;
                    case 12:
                        return "Desember";
                        break;
                }
}
    $bln=$_POST['bulan'];
     $tahun=$_POST['tahun'];
     $divisi=$_POST['divisi'];
   $romawi = getBulan($bln);
  
    ?>

    <h2 align="center">Laporan Tunjangan Divisi <?php echo $divisi; ?> Bulan <?php echo $romawi; ?> Tahun <?php echo $tahun; ?></h2>
</hr>
</br>
</br>
<table width="100%" border="1">
        <tr >
        <td>No</td>
        <td>Nip</td>
        <td>Nama</td>
        <td>Kode Tunjangan</td>
        <td>Nama Tunjangan</td>
        <td>Besar TUnjangan</td>
        <td>Bulan</td>
         <td>Tahun</td>
          <td>Jenis</td>
          

</tr>
    <?php
    $no=1;
foreach($results as $row){
?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row->nip; ?></td>
        <td><?php echo $row->divisi; ?></td>
         <td><?php echo $row->kd_tunjangan; ?></td>
          <td><?php echo $row->nama_tunjangan; ?></td>
           <td>Rp. <?php echo number_format(  $row->besar_tunjangan,2,',','.'); ?></td>
            <td><?php echo $row->bulan; ?></td>
             <td><?php echo $row->tahun; ?></td>
              <td><?php echo $row->jenis; ?></td>
              
              
        
    </tr>

<?php
$no++;
}
foreach ($total as $total) {
 
?>
<td  colspan="5" bgcolor="yellow" align="center"><b>Total</b></td>
<td bgcolor="yellow" colspan="4"><b>Rp. <?php echo number_format( $total->hasil,2,',','.'); ?></b></td>
</table>



<?php

}
           }else if(isset($_POST['excel'])){
          
         ?>

    <h1 align="center">Laporan Cuti </h1>
</hr>
</br>
</br>
<table width="100%" border="1">

        <tr>
        <td>No</td>
        <td>Nip</td>
        <td>Nama</td>
        <td>Divisi</td>
        <td>Golongan</td>
        <td>Gaji Pokok</td>
        <td>Alpa</td>
         <td>Lembur</td>
          <td>Bonus</td>
           <td>Total</td>

</tr>
    <?php
    $no=1;
foreach($results as $row){

?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row->nip; ?></td>
        <td><?php echo $row->nama; ?></td>
         <td><?php echo $row->divisi; ?></td>
          <td><?php echo $row->golongan; ?></td>
           <td><?php echo $row->gaji_pokok; ?></td>
            <td><?php echo $row->ketidakhadiran; ?></td>
             <td><?php echo $row->lembur; ?></td>
              <td><?php echo $row->bonus; ?></td>
               <td><?php echo $row->total; ?></td>
              
        
    </tr>

<?php
$no++;
}
?>
</table>

         <?php   
 
}else{

}
?>   
  <br/>