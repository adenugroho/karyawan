<?php
 
session_start();
 
function login_validasi(){
 
$timeout=5;
 
$_SESSION['expires_by']=time()+$timeout;
 
}
 
&nbsp;
 
function cek_login(){
 
$exp_time=$_SESSION['expires_by'];
 
if(time()<$exp_time){
 
login_validasi();
 
return true;
 
}else{
 
unset($_SESSION['expires_by']);
 
return false;
 
}
 
}
 
?>