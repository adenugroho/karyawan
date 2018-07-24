<?php 

if( !session_id() )
{
    session_start();
}

session_destroy();

?>

<script>
   
    self.location.replace("index.php");
</script>