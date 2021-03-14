<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seach data by department</title>
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
         if(isset($_POST['submit']))
         {
             $department=$_POST['department'];
             $query="SELECT FROM * `testfilecomplain` where department='$department'" ;
             $query_run=mysqli_query($db,$query);
             while($row = mysqli_fetch_array($query_run))  
             {
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
    </div>
</body>
</html>