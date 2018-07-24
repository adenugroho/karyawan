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
      $html='<h3 align="center">Daftar Tunjangan</h3>
          <table border="1">
            <tr bgcolor="aqua">
              
        <td align="center" width="15px" align="center">No</td>
        <td align="center" width="40px" align="center">Nip</td>
        <td align="center">Nama Divisi</td>
        <td align="center">Kode Tunjangan</td>
        <td align="center" width="100px" >Nama Tunjangan</td>
        <td align="center" width="100px">Besar Tunjangan</td>
        <td align="center" width="50px">Bulan</td>
         <td align="center"  width="50px">Tahun</td>
          <td align="center" width="20px">Jenis</td>

          

            </tr>';
      foreach ($results as $row) 
        {
          $i++;
          $html.='<tr bgcolor="#ffffff">
              <td width="15px">'.$i.'</td>
              <td>'.$row->nip.'</td>
              <td>'.$row->divisi.'</td>
               <td>'.$row->kd_tunjangan.'</td>
                <td>'.$row->nama_tunjangan.'</td>
                <td width="100px">Rp '.number_format($row->besar_tunjangan,2,",",",").'</td>
                  <td  width="50px">'.$row->bulan.'</td>
                   <td  width="50px">'.$row->tahun.'</td>
                    <td width="20px">'.$row->jenis.'</td>
               
             
            </tr>';
        }

         foreach ($total as $row) 
        {
         
          $html.='<tr bgcolor="#ffffff">
              
              <td colspan="5" bgcolor="yellow" align="center"><b>Total</b></td>
              <td  colspan="4" bgcolor="yellow">Rp '.number_format( $row->hasil,2,',','.').'</td>
              
               
             
            </tr>';
        }
       
      $html.='</table>';
      $pdf->writeHTML($html, true, false, true, false, '');
      $pdf->Output('Laporan/'.date("dmy").'-'.date("hm").'.pdf', 'I');
?>