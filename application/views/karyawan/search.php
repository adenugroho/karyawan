  <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
          <h2>Data Siswa</h2>
          <hr/>
                 <!-- /. ROW  -->
              
 <div align="right">
<form id="frm" method="post" action="<?php echo base_url('siswa/search')?>">
    <input type="text" name="keyword" id="name" class="input-control" onblur="validate()" placeholder="search">
    <input type="submit"  value="Cari" name="btn-submit" id="btn-submit" disabled="disabled" class="btn btn-success btn-sm">
    <a href="<?php echo base_url('Karyawan')?>" class="btn btn-info btn-sm" >back</a>
  </form>
</div>
 <br/>
 <a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a>
  <br/>
   <div class="table-responsive">
<table width="100%" class="table table-bordered">
    <tr style="background-color: aqua">

       <th>Nama Siswa</th>
      <th>Tanggal Absen</th>      
    </tr>
  <?php
                    $no=1;
                    foreach ($products as $dosen) {
                ?>
                <tr>
                    <td><?php echo $dosen->nip; ?></td>
                    <td><?php echo $dosen->nama; ?></td>
                    <td><?php echo $dosen->tanggal; ?></td>
                    <td><?php echo $dosen->jam; ?></td>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </thead>
    </table>
   </div>