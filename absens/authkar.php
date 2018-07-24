<?php 

if( !session_id() )
{
    session_start();
}

	if(isset($_POST['send'])){
		include "koneksi.php";
$nip1 = $_POST['credential']; //password yang di inputkan oleh user lewat form login
$waktu=date("h:i:s");
 $tanggal=date("Y-m-d");


        //query ke database
         $sql = mysqli_query($conn, "SELECT nip, nama FROM karyawan WHERE nip = '$nip1'");
          $pengaturan = mysqli_query($conn, "SELECT status from pengaturan_absen");
          $siswa = mysqli_query($conn, "SELECT tanggal_absen from karyawan  WHERE nip = '$nip1'");
           $cek = mysqli_query($conn, "SELECT count(nip) from absen  WHERE nip = '$nip1' && tanggal='$tanggal'");

           list($nip, $nama) = mysqli_fetch_array($sql);
        list($status) = mysqli_fetch_array($pengaturan);
        list($tanggal_absen) = mysqli_fetch_array($siswa);
        list($cekin) = mysqli_fetch_array($cek);

        $absen = mysqli_query($conn, "SELECT datein from absen  WHERE nip = '$nip1' && tanggal='$tanggal'");
         list($datein) = mysqli_fetch_array($absen);
        $text = $datein;
        $pecah = explode(":", $teks);
 $jam = $pecah[0];
  $menit = $pecah[1];
 
       $jam_start = $jam;
$menit_start = $menit;
$jam_end = date("h");
$menit_end = date("m");
  
$date_awal  = new DateTime($jam_start.":".$menit_start);
$date_akhir = new DateTime($jam_end.":".$menit_end);
$selisih = $date_akhir->diff($date_awal);

$jam = $selisih->format('%h');
$menit = $selisih->format('%i');
 
 if($menit >= 0 && $menit <= 9){
   $menit = "0".$menit;
 }
 
$hasil = $jam.".".$menit;
$hasil = number_format($hasil,2);

 $tanggal=date("Y-m-d");
    $waktu=date("h:i:s");
		$arr= array();

if($status == "ON"){
	if($waktu >= '12:00:00'){

		if($_POST['credential'] == $nip1){
			if($cekin >= 1){

			$_SESSION['logged_in'] = true;
				 
     
 $insert1=mysqli_query($conn, "update absen set dateout='$waktu',total='$hasil' where nip='$nip1' && tanggal='$tanggal'");
       
 $update=mysqli_query($conn, "update karyawan set status='TRUE' where nip='$nip1'");
			$arr['success'] = true;
}else{
		$_SESSION['logged_in'] = true;
$insert1=mysqli_query($conn, "insert into absen (nip,nama,tanggal,datein) values ('$nip','$nama','$tanggal','$waktu')");
       
 $update=mysqli_query($conn, "update karyawan set tanggal_absen='$tanggal',status='FALSE' where nip='$nip1'");
			$arr['success'] = true;
}
		}else{
		$arr['success'] = false;
		} 
		}else{
		$arr['success'] = false;
		} 
		}else{
		$arr['success'] = false;
		} 

		echo json_encode($arr);
	}

?>