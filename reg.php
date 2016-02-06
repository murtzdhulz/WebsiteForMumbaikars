<html>
<body>
<?php
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$area=$_POST["area"];
$cno=$_POST["cno"];
$email=$_POST["email"];

$con=mysql_connect("localhost","root","");   //database connection
mysql_select_db("mumwe",$con);
$order = "INSERT INTO register
			(fname, lname, area, contact_num, email)
			VALUES
			('$firstname',
			 '$lastname',
			 '$area',
			 '$cno',
			 '$email')";

mysql_query($order);	//order executes
?>
Successful ! !
<br/>
<table>
<tr>
<td><a href="homepg.html">Home</a></td>
<td><a href="">Blog</a></td>
<td><a href="About us.html">About us</a></td>
</tr>
</body>
</html>
