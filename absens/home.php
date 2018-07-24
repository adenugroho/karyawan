<?php 

if( !session_id() )
{
    session_start();
    
}

if(@$_SESSION['logged_in'] != true){
    echo '
    <script>
    	
    	self.location.replace("index.php");
    </script>';
}

?>
<script type="text/javascript">
	var audio = new Audio('Success1.mp3');
	audio.play();
</script>

<script language="javascript">
setTimeout(function () {
   window.location.href= 'logout.php';
},2000); 
</script>
Welcome ! <br />
<a href="logout.php">Logout</a>