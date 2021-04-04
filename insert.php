<?php
session_start();
include "dbConn.php";  





if(isset($_POST['submit']))
{		
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cpfno = $_POST['cpfno'];
    $complain = $_POST['complain'];
    $file_name =$_FILES['file']['name'];
   $file_type=$_FILES['file']['type'];
   $file_size=$_FILES['file']['size'];
   $file_tem_loc=$_FILES['file']['tmp_name'];
   $file_store="images/".$file_name;
   $department_name=$_POST['department'];
   $type=$_POST['type']; 
   $category=$_POST['category'];
   $phoneno=$_POST['phoneno'];
   $address=$_POST['address'];
   $status='pending';
   $to_email ="$email";
  $subject =' complain Registed';
  $body ="ur complain regarding. 
         $category
         $complain 
         is successfully submitted";
  $headers="From : bhrugeshsetu2000@gmail.com\r\nReply-To: bhrugeshsetu2000@gmail.com";
  $mail_sent=mail($to_email,$subject,$body,$headers);






    $insert = mysqli_query($db,"INSERT INTO `testfilecomplain`(`name`,`email`,`cpfno`,`complain`,`file`,`department`,`type`,`category`,`phoneno`,`address`,`status`) VALUES ('$name','$email','$cpfno','$complain','$file_name','$department_name','$type','$category','$phoneno','$address','$status')");
   
    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
        move_uploaded_file($file_tem_loc,$file_store);
        if($mail_sent == true)
        {
           echo "email is successfully sent to $to_email.....";
        }
        else
        {
           echo "email sending failed";
        }
       
    }
}
?>
