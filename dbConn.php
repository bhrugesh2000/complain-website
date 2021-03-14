<?php

$db = mysqli_connect("localhost","root","","setu_complain");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>