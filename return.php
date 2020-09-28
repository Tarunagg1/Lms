<?php
include"connection.php";
$id=$_GET["id"];
$a=date("d-m-y ");
$res=mysqli_query($link,"update issue_book set book_return_date='$a' where id=$id");
?>
<script type="text/javascript">
window.location="returnbook.php";
</script>