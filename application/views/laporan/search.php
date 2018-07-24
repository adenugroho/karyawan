  <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
          <h2>Data Laporan</h2>
          <hr/>
                 <!-- /. ROW  -->
<div align="right">
<form id="frm" method="post" action="<?php echo base_url('absen/search')?>">
    <input type="text" name="keyword" id="name" class="input-control" onblur="validate()" placeholder="search">
    <input type="submit"  value="Cari" name="btn-submit" id="btn-submit" disabled="disabled" class="btn btn-success btn-sm">
    <a href="<?php echo base_url('absen')?>" class="btn btn-info btn-sm" >back</a>
  </form>
</div>
 <br/>
   <div class="table-responsive">
<table width="100%" class="table table-bordered">
   <tr style="background-color: aqua">
     <th>Nis</th>
      <th>Nama Siswa</th>
      <th>Kelas</th>
      <th>Tanggal Absen</th> 
      <th>Jam</th>  
        
    </tr>
  <?php
                    
                    foreach ($absens as $absen) {
                ?>
                <tr>
                  <td><?php echo $absen->nis; ?></td>
                    <td><?php echo $absen->nama_siswa; ?></td>
                    <td><?php echo $absen->kelas; ?></td>
                    <td><?php echo $absen->tanggal; ?></td>
                    <td><?php echo $absen->jam; ?></td>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </thead>
    </table>
   </div>