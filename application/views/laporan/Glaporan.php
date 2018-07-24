<?php
      $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
      $pdf->SetTitle('Daftar Produk');
      $pdf->SetHeaderMargin(30);
      $pdf->SetTopMargin(20);
      $pdf->setFooterMargin(20);
      $pdf->SetAutoPageBreak(true);
      $pdf->SetAuthor('Author');
      $pdf->SetDisplayMode('real', 'default');
       $pdf->SetFont('', '', 8, '', 'false');
      $pdf->AddPage();
      $i=0;
    $html='<h3 align="center">Laporan Gaji</h3>
</hr>
</br>
</br>';

foreach($lap_gaji as $row){
   
   $html.='<table width="100%" border="1" >
    <tr>
    <td>Nama/Nip</td>
    <td>Divisi/Golongan</td>
     <td>Bank/No Rekening</td>
      <td>Metode</td></tr>
      <tr height="100%">
         <td>'.$row->nama.'/'. $row->nip.'</td>
    <td>'. $row->divisi.' / '. $row->golongan.'</td>
     <td>'. $row->bank.' /'. $row->no_rek.'</td>
      <td>'. $row->metode.'</td>
      </tr>
   </table>

<table align="right" width="50%">
<tr>
  <td colspan="2" align="center"><font size="4">Total Gaji dan Tunjangan</font></td>
</tr>
<tr>
  <td colspan="2" align="center"><hr/></td>
</tr>
  <tr>
  </tr>
  <tr>
    <td>Gaji Pokok</td>
    <td>Rp.'. number_format($row->gaji_pokok,2,',','.').'</td>
  </tr>
 
  <tr>
    <td width="50%">Lembur</td>
    <td>Rp.'. number_format($row->lembur,2,',','.').'</td>
  </tr>
  <tr>
    <td>Bonus</td>
    <td>Rp.'. number_format($row->bonus,2,',','.').'</td>
  </tr>
    <tr>
    <td>Potongan/Tidak Hadir</td>
    <td>Rp.-'. $a=$row->gaji_pokok; $b=$row->ketidakhadiran;  number_format(($a*(2/100)) * $b ,2,',','.').'
/ '. $row->ketidakhadiran.' -Hari</td>
  </tr>';
}

    foreach ($lap_tunjanganTT as $tunjangantt) {

 $html.='<tr>
    <td><?php echo $tunjangantt->nama_tunjangan; ?></td>
    <td>Rp. '.number_format($tunjangantt->besar_tunjangan,2,',','.').'</td>

  </tr>';

}

 $html.= '</tr>';
   


foreach ($total as $total) {
$totals[] = $total->hasil;

$html.='<tr>
  
  <tr>
  <td colspan="2" align="center"><hr/></td>
</tr>
<tr>
     <tr>
      <td>Total</td>
 
    <td width="50%">&nbsp;Rp.'. number_format($total->hasil,2,',','.').'</td></tr>';
  
  }
  
$html.='</tr>


  <tr>
    
   <td colspan="2" align="center"><hr/></td>
  </tr>

</table> ';

$html.='<table align="left" width="50%">
<tr>
  <td colspan="2" align="center"><font size="4">Potongan Tunjangan Tetap</font></td>
  <tr>
  <td colspan="2" align="center"><hr/></td>
</tr>
</tr>
';
foreach($lap_tunjangan as $row){
    
   
   



 
  
 $html= '<tr>
    <td width="50%"><?php echo $row->nama_tunjangan; ?></td>
    <td width="50%">&nbsp;Rp. -'.number_format($row->besar_tunjangan,2,',','.').'</td>
  </tr>';
  
}
foreach ($potongan_tunjangan as $potongan_tunjangan) {
 $potongan_tunjangans[] = $potongan_tunjangan->potongan;

$html.='<tr>
  
    <td width="50%" colspan="2"><hr/></td>
  </tr>
<tr>
    <td width="50%">Total Gaji Kotor</td>
   
    <td width="50%">&nbsp;Rp.-'. number_format($potongan_tunjangan->potongan,2,',','.').'</td>

  
  </tr>
  </table>';

}

foreach ($hasil as $hasil) {
 

$html.='<br/>
<br/>
<table>
  <tr>
    <td>&nbsp;</td>

  </tr>
   <tr>
    <td>&nbsp;</td>
    
  </tr>
</table>';

 
$total = array_sum($totals);
$potongan_tunjangan = array_sum($potongan_tunjangans);
$hasil=$total-$potongan_tunjangan;
 
  $html.='<div align="center">
<h3><font color="red"><b>Gaji Bersih&nbsp;Rp.'. number_format($hasil,2,',','.').'</b></font></h3>
</div>
 
  <div class="border">
<font size="3">Hasil = '. number_format($total,2,',','.')  -   number_format($potongan_tunjangan,2,',','.').'</font>
</div>';
}
     
      $pdf->writeHTML($html, true, false, true, false, '');
      $pdf->Output('Laporan/'.date("dmy").'-'.date("hm").'.pdf', 'I');
?>