<?php


$db = mysqli_connect("localhost","root","","setu_complain");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$admin=$_POST['admin'];

if(isset($_POST['submit']))
{
  if($admin == 'it')
  {
      header('location:it.html');
  }
  if($admin == 'electrical')
  {
      header('location:electrical.html');
  }
  if($admin == 'estate')
  {
      header('location:estate.html');
  }
  if($admin == 'civil')
  {
      header('location:civil.html');
  }
}





?>