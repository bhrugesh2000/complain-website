<?php
include "dbConn.php";

if(isset($_REQUEST("cpfno")))
{

  $cpfno=$_REQUEST("cpfno");
  $query=mysqli_query("SELECT * FROM testfilecomplain where cpfno='$cpfno'");
  $row=mysql_fetch_array($query);
}

if(isset($_REQUEST('submit')))
{
  $name=$_REQUEST["name"];
  $email=$_REQUEST["email"];
  $complain=$_REQUEST["complain"];

 mysqli_query("UPDATE testfilecomplain SET name='$name',email='$email',complain='$complain' WHERE cpfno='$cpfno'");
 header('location:select.php');
}


?>

<form action="" method="post">
<table border="1" align="center">
<tr>
  <td>name:</td>
  <td><input type="text" name="name" value=""><?php echo $row["name"]?></td>
</tr>
<tr>
  <td>email:</td>
  <td><input type="text" name="email" value=""><?php echo $row["email"]?></td>
</tr>
<tr>
  <td>complain:</td>
  <td><input type="text" name="complain" value=""><?php echo $row["complain"]?></td>
</tr>

<tr>
  <td><input type="submit" name="submit" value="submit"></td>
</tr>


</table>



</form>