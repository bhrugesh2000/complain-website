<html>
<head>
   
    <title>seach data by id</title>
    <link rel="stylesheet" type="text/css" href="./css/recordstyle.css">
</head>
<body>
    <div class="container">
    <form action="" method="post">
        <input type="number" name="cpfno" placeholder="Enter your cpf number">
        <input type="submit" name="submit" value="submit">
    </form>
    <table>
        <tr>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>COMPLAIN</th>
        <th>STATUS</th>
        <th>REMARK</th>
         </tr><br>

         <?php
         
         $connection = mysqli_connect("localhost","root","");
         $db=mysqli_select_db($connection,'setu_complain');
         if(isset($_POST['submit']))
         {
             $cpfno=$_POST['cpfno'];
             
             $query ="SELECT name,email,complain,status,remark  from testfilecomplain where cpfno='$cpfno'";
            

             $query_run=mysqli_query($connection,$query);

             while($row = mysqli_fetch_array($query_run))  
             {
                ?>

         <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['complain']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['remark']; ?></td>
                </tr>
        <?php

             } 
            }          
         ?>
    </table>
    </div>
</body>
</html>