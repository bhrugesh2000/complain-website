<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seach data by department</title>
    <style>
table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
</head>
<body>
    <div class="container">
    <form action="" method="post">
        <input type="text" name="department" placeholder="Enter your department">
        <input type="submit" name="submit" value="submit">
    </form>
    <table>
        <tr>
        <th>name</th>
        <th>email</th>
        <th>complain</th>
        <th>status</th>
         </tr><br>
     


         <?php
        
         include "dbConn.php";
         if (!$db)
           {
           die('Could not connect: ' . mysql_error());
           }
         
           if(isset($_POST['submit']))

            {
            $department=$_POST['department'];
            $data=mysqli_query($db,"SELECT * FROM testfilecomplain where department='$department'");
        
            while($row=mysqli_fetch_array($data)){
                ?>

                     <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['complain']; ?></td>
                    <td><?php echo $row['status'];?></td>
                </tr>
                <?php
             }

             }       
         ?>

            </table>
     </body>
</html>
           
       
        

                
   












