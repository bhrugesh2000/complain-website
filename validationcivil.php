<?php

session_start();


$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'setu_complain');

$name =$_POST['user'];
$pass =$_POST['password'];

$s ="select * from usertable where name='$name' && password ='$pass'";

$result = mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num == 1)
{
    $_session['username'] = $name;
   header('location:homecivil.html');
}

else
{
 header('location:logincivil.php');
}

?>