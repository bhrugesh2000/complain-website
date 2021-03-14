<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seach data by id</title>
</head>
<body>
    <div class="container">
    <form action="" method="post">
        <input type="number" name="cpfno" placeholder="Enter your cpf number">
        <input type="button" name="search" value="search by cpf no">
    </form>
    <table>
        <tr>
        <th>name</th>
        <th>email</th>
        <th>complain</th>
         </tr><br>

         <?php
         
         $connection = mysqli_connect("localhost","root","");
         $db = mysqli_select_db($connection,'setu_complain');
         if(isset($_POST['search']))
         {
             $cpfno=$_POST['cpfno'];
             $query="SELECT FROM * `testfile` where cpfno='$cpfno'" ;
             
             while($row = mysqli_fetch_array($query_run))  
             {
                ?>

                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['complain']; ?></td>
                </tr>
                <?php

             }       
         ?>
    </table>
    </div>
</body>
</html>