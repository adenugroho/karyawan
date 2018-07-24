     <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDashboard extends CI_Model
{

 function statistik_absen()
 {
  $date=date('Y');
  $sql= $this->db->query("
  
  select
  ifnull((SELECT count(nip) FROM (absen)WHERE((Month(tanggal)=1)AND (YEAR(tanggal)= $date))),0) AS `Januari`,
  ifnull((SELECT count(nip) FROM (absen)WHERE((Month(tanggal)=2)AND (YEAR(tanggal)= $date))),0) AS `Februari`,
  ifnull((SELECT count(nip) FROM (absen)WHERE((Month(tanggal)=3)AND (YEAR(tanggal)= $date))),0) AS `Maret`,
  ifnull((SELECT count(nip) FROM (absen)WHERE((Month(tanggal)=4)AND (YEAR(tanggal)= $date))),0) AS `April`,
  ifnull((SELECT count(nip) FROM (absen)WHERE((Month(tanggal)=5)AND (YEAR(tanggal)= $date))),0) AS `Mei`,
  ifnull((SELECT count(nip) FROM (absen)WHERE((Month(tanggal)=6)AND (YEAR(tanggal)= $date))),0) AS `Juni`,
  ifnull((SELECT count(nip) FROM (absen)WHERE((Month(tanggal)=7)AND (YEAR(tanggal)= $date))),0) AS `Juli`,
  ifnull((SELECT count(nip) FROM (absen)WHERE((Month(tanggal)=8)AND (YEAR(tanggal)= $date))),0) AS `Agustus`,
  ifnull((SELECT count(nip) FROM (absen)WHERE((Month(tanggal)=9)AND (YEAR(tanggal)= $date))),0) AS `September`,
  ifnull((SELECT count(nip) FROM (absen)WHERE((Month(tanggal)=10)AND (YEAR(tanggal)= $date))),0) AS `Oktober`,
  ifnull((SELECT count(nip) FROM (absen)WHERE((Month(tanggal)=11)AND (YEAR(tanggal)= $date))),0) AS `November`,
  ifnull((SELECT count(nip) FROM (absen)WHERE((Month(tanggal)=12)AND (YEAR(tanggal)= $date))),0) AS `Desember`
 from absen GROUP BY YEAR($date) 
  
  ");
  
  return $sql;
  
 } 

  function statistik_ketidakhadiran()
 {
  $date=date('Y');
  $sql= $this->db->query("
  
  select
  ifnull((SELECT count(nip) FROM (absen_false)WHERE((Month(tanggal)=1)AND (YEAR(tanggal)= $date))),0) AS `Januari`,
  ifnull((SELECT count(nip) FROM (absen_false)WHERE((Month(tanggal)=2)AND (YEAR(tanggal)= $date))),0) AS `Februari`,
  ifnull((SELECT count(nip) FROM (absen_false)WHERE((Month(tanggal)=3)AND (YEAR(tanggal)= $date))),0) AS `Maret`,
  ifnull((SELECT count(nip) FROM (absen_false)WHERE((Month(tanggal)=4)AND (YEAR(tanggal)= $date))),0) AS `April`,
  ifnull((SELECT count(nip) FROM (absen_false)WHERE((Month(tanggal)=5)AND (YEAR(tanggal)= $date))),0) AS `Mei`,
  ifnull((SELECT count(nip) FROM (absen_false)WHERE((Month(tanggal)=6)AND (YEAR(tanggal)= $date))),0) AS `Juni`,
  ifnull((SELECT count(nip) FROM (absen_false)WHERE((Month(tanggal)=7)AND (YEAR(tanggal)= $date))),0) AS `Juli`,
  ifnull((SELECT count(nip) FROM (absen_false)WHERE((Month(tanggal)=8)AND (YEAR(tanggal)= $date))),0) AS `Agustus`,
  ifnull((SELECT count(nip) FROM (absen_false)WHERE((Month(tanggal)=9)AND (YEAR(tanggal)= $date))),0) AS `September`,
  ifnull((SELECT count(nip) FROM (absen_false)WHERE((Month(tanggal)=10)AND (YEAR(tanggal)= $date))),0) AS `Oktober`,
  ifnull((SELECT count(nip) FROM (absen_false)WHERE((Month(tanggal)=11)AND (YEAR(tanggal)= $date))),0) AS `November`,
  ifnull((SELECT count(nip) FROM (absen_false)WHERE((Month(tanggal)=12)AND (YEAR(tanggal)= $date))),0) AS `Desember`
 from absen GROUP BY YEAR($date) 
  
  ");
  
  return $sql;
  
 } 


 function statistik_cuti()
 {
   $date=date('Y');
  $sql= $this->db->query("
  
  select
   ifnull((SELECT count(*) FROM (cuti)WHERE((Month(tanggal)=1)&& (YEAR(tanggal)=$date))),0) AS `Januari`,
  ifnull((SELECT count(*) FROM (cuti)WHERE((Month(tanggal)=2)&&(YEAR(tanggal)=$date))),0)  AS `Februari`,
  ifnull((SELECT count(*) FROM (cuti)WHERE((Month(tanggal)=3)AND (YEAR(tanggal)=$date))),0) AS `Maret`,
  ifnull((SELECT count(*) FROM (cuti)WHERE((Month(tanggal)=4)AND (YEAR(tanggal)=$date))),0) AS `April`,
  ifnull((SELECT count(*) FROM (cuti)WHERE((Month(tanggal)=5)AND (YEAR(tanggal)=$date))),0) AS `Mei`,
  ifnull((SELECT count(*) FROM (cuti)WHERE((Month(tanggal)=6)AND (YEAR(tanggal)=$date))),0) AS `Juni`,
  ifnull((SELECT count(*) FROM (cuti)WHERE((Month(tanggal)=7)AND (YEAR(tanggal)=$date))),0) AS `Juli`,
  ifnull((SELECT count(*) FROM (cuti)WHERE((Month(tanggal)=8)AND (YEAR(tanggal)=$date))),0)AS `Agustus`,
  ifnull((SELECT count(*) FROM (cuti)WHERE((Month(tanggal)=9)AND (YEAR(tanggal)=$date))),0) AS `September`,
  ifnull((SELECT count(*) FROM (cuti)WHERE((Month(tanggal)=10)AND (YEAR(tanggal)=$date))),0) AS `Oktober`,
  ifnull((SELECT count(*) FROM (cuti)WHERE((Month(tanggal)=11)AND (YEAR(tanggal)=$date))),0) AS `November`,
  ifnull((SELECT count(*) FROM (cuti)WHERE((Month(tanggal)=12)AND (YEAR(tanggal)=$date))),0) AS `Desember`
 from cuti GROUP BY YEAR($date) 
  
  ");
  
  return $sql;
  
 } 

}