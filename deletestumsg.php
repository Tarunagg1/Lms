<?php
include"connection.php";
if(isset($_GET["id"]))
{
$id=$_GET["id"];
mysqli_query($link,"delete from message where id=$id");
}
?>

<script type="text/javascript">
 window.location="displaymsgstu.php";
 </script>