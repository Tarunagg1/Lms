<?php
include("connection.php");

function getuserdata($id)
{
	$array = array();
	$query = mysqli_query("select * from registration where 'id'=".$id);
while($r = mysqli_fetch_assoc($query))
{
         $array['id'] = $r['id'];
		 $array['firstname'] = $r['firstname'];
		 $array['lastname'] = $r['lasttname'];
		 $array['username'] = $r['username'];
		 $array['email'] = $r['email'];
		 $array['image'] = $r['image'];
		 $array['contactno'] = $r['contactno'];
		 $array['sem'] = $r['sem'];
		 $array['branch'] = $r['branch'];
		 $array['rollno'] = $r['rollno'];
}	
             return $array;  
        	
}
function getid($username)
{
	
$query = mysqli_query("select * from registration where 'username'=".$username."'");
while($r = mysqli_fetch_assoc($query))
{
	return $r['id'];
}
}

?>