<!--readfile( String $id [, bool $use_include_path = FALSE [, resource $context ]] );-->
<?php
include"connection.php";
if(isset($_GET["id"]))
$id=$_GET["id"];

$res=mysqli_query($link,"select * from add_book");
while($row=mysqli_fetch_array($res))

{
$path= $row['id'];
header('content-disposition;attachment;filename ='.$path.'');
header('contant-type:application/octent-strem');
header('content-lenght'.filesize($path));
readfile($path);
}


?>

<script type="text/javascript">
 window.location="stubookdisplay.php";
 </script>




<!--$query = "select * from add_book where id='$id'";
$query1 = mysqli_query($query);
while($row= mysqli_fetch_array($query1))

-->

download code




<?php
include"connection.php";
if(isset($_GET["id"]))
$id=$_GET["id"];

$res=mysqli_query($link,"select * from add_book");
while($row=mysqli_fetch_array($res))

{
$path= $row['id'];
header('content-disposition;attachment;filename ='.$path.'');
header('contant-type:application/octent-strem');
header('content-lenght'.filesize($path));
readfile($path);
}


?>

<script type="text/javascript">
 window.location="stubookdisplay.php";
 </script>




<!--$query = "select * from add_book where id='$id'";
$query1 = mysqli_query($query);
while($row= mysqli_fetch_array($query1))

-->

<div class="alert alert-danger col-lg-6 col-lg-push-3">
    <strong style="color:white"></strong> note : plese enter password correct.
</div>	
	                  <div class="alert alert-info">
  <strong>Please Note!</strong> Your Books Will Be Displayed In 24 Hours On Book Buddy.
</div>



 DataRow dr = dt.NewRow();
                dr["product"] = textBox3.Text;
                dr["price"] = textBox4.Text;
                dr["qty"] = textBox5.Text;
                dr["total"] = textBox6.Text;
                dt.Rows.Add(dr);
                dataGridView1.DataSource = dt;

                tot = tot + Convert.ToInt32(dr["total"].ToString());

                label11.Text = tot.ToString();




