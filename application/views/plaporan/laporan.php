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
      $html='<h3 align="center">Daftar Gaji Karyawan</h3>
          <table border="1" align="center">
            <tr bgcolor="aqua">
              
        <td align="center" width="20px" align="center">No</td>
        <td  width="40px" align="center">Nip</td>
        <td align="center">Nama</td>
        <td align="center">Divisi</td>
        <td align="center" width="40px" >Golongan</td>
          <td align="center" width="70px">Gaji Pokok</td>
          <td align="center" width="60px">ketidakhadiran</td>
          <td align="center" width="30px">Lembur</td>
          <td align="center" width="30px">Bonus</td>
          <td align="center" width="70px">Total</td>
          <td align="center" width="30px">Bulan</td>
          <td align="center" width="30px">Tahun</td>
         








          

            </tr>';
      foreach ($results as $row) 
        {
          $i++;
          $html.='<tr bgcolor="#ffffff" align="center">
              <td width="20px">'.$i.'</td>
              <td width="40px">'.$row->nip.'</td>
              <td>'.$row->nama.'</td>
               <td>'.$row->divisi.'</td>
                <td width="40px">'.$row->golongan.'</td>
                     <td width="70px">Rp '.number_format($row->gaji_pokok,0,",",",").'</td>
                      <td width="60px">'.$row->ketidakhadiran.'</td>
                       <td width="30px">'.$row->lembur.'</td>
                        <td width="30px">'.$row->bonus.'</td>
                         <td width="70px">Rp '.number_format($row->total,0,",",",").'</td>
                          <td width="30px">'.$row->bulan.'</td>
                           <td width="30px">'.$row->tahun.'</td>

               
             
            </tr>';
        }

         foreach ($total as $row) 
        {
         
          $html.='<tr bgcolor="#ffffff">
              
              <td colspan="9" bgcolor="yellow" align="center"><b>Total</b></td>
              <td  colspan="4" bgcolor="yellow">Rp '.number_format( $row->hasil,2,',','.').'</td>
              
               
             
            </tr>';
        }
       
      $html.='</table>';
      $pdf->writeHTML($html, true, false, true, false, '');
      $pdf->Output('Laporan/'.date("dmy").'-'.date("hm").'.pdf', 'I');
?>