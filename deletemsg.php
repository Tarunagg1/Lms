<?php
include"connection.php";
if(isset($_GET["id"]))
{
$id=$_GET["id"];
mysqli_query($link,"delete from help where id=$id");
}
?>

<script type="text/javascript">
 window.location="history.php";
 </script>