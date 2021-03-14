<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seach data by id</title>
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
        <input type="number" name="cpfno" placeholder="Enter your cpf number">
        <input type="submit" name="submit" value="submit">
    </form>
    <table>
        <tr>
        <th>name</th>
        <th>email</th>
        <th>complain</th>
         </tr><br>

         <?php
         
         include "dbConn.php";
         if(isset($_POST['submit']))
         {
             $cpfno=$_POST['cpfno'];
             $query="SELECT FROM * `testfilecomplain` where cpfno='$cpfno'" ;
             $query_run=mysqli_query($db,$query);
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

             }       
         ?>
    </table>
    </div>
</body>
</html>