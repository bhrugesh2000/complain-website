<?php
$conn =mysqli_connect("localhost","root","","setu_complain");

if(isset($_REQUEST["eid"]))
{
    $eid=$_REQUEST["eid"];

    $query=mysqli_query($conn,"SELECT * FROM testfilecomplain WHERE cpfno='$eid'");
    $row=mysqli_fetch_array($query);
}

if(isset($_REQUEST['submit']))
{
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $complain=$_REQUEST["complain"];
    $department=$_REQUEST["department"];
    $status=$_REQUEST["status"];
    $remark=$_REQUEST["remark"];
    $to_email ="$email";
    $subject =' complain Registed';
    $body ="ur complain regarding. 
           $complain 
           is successfully accepted and solved";
    $headers="From : bhrugeshsetu2000@gmail.com\r\nReply-To: bhrugeshsetu2000@gmail.com";
    $mail_sent=mail($to_email,$subject,$body,$headers);

 
$insert = mysqli_query($conn,"UPDATE testfilecomplain set name='$name',email='$email',complain='$complain',department='$department',status='$status',remark='$remark' WHERE cpfno='$eid'");
header('location:civil.html');
if(!$insert)
{
    echo mysqli_error();
}
else
{
    echo "Records added successfully.";
    move_uploaded_file($adminfile_tem_loc,$adminfile_store);
    header('location:civil.html');
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
<?php

?>

<form action="" name="s-form" method="post" enctype="multipart/form-data">
<table align="center">

<link rel="stylesheet" href="./css/adminedit.css">

   
    <tr>
        <td> NAME:</td>
        <td><input type="text" name="name" value="<?PHP echo $row["name"]?>"></td>
    </tr>
   
    <tr>
        <td> EMAIL:</td>
        <td><input type="text" name="email" value="<?PHP echo $row["email"]?>"></td>
    </tr>
    
   
    <tr>
        <td> COMPLAIN:</td>
        <td><input type="text" name="complain" value="<?PHP echo $row["complain"]?>"></td>
    </tr>
    
    <tr>
        <td> DEPARTMENT:</td>
        <td><input type="text" name="department" value="<?PHP echo $row["department"]?>"></td>
    </tr>
   
    <tr>
        <td>STATUS:</td>
        <td><input type="text" name="status" value="<?PHP echo $row["status"]?>"></td>       
     </tr>


  <tr>
         <td>REMARK:</td>
         <td><textarea name="remark"  cols="30" rows="10" id="<?php echo $row["remark"]?>"></textarea></td>
         
         </tr>

         <br>

    
    <tr>
        <td><button><input type="submit" value="submit" name="submit"></button></td>
    </tr>



</table>
</form>    