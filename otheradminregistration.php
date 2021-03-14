<?php

session_start();


$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'setu_complain');

$department_name=$_POST['department'];
$name =$_POST['admin'];
$pass =$_POST['password'];

$s =" SELECT * FROM `otheradmin` WHERE department='$department_name'  &&  cpfno='$name' && password ='$pass'";

$result = mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num == 1)
{
    $_session['adminname'] = $name;
   header('location:otheradminhome.html');
}

else
{
 header('location:otheradminlogin.html');
}

?>