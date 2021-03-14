<html>
<head>
   
    <title>seach data by id</title>
   
</head>
<body>
    <div class="container">
    <form action="" method="post">
        <input type="text" name="status" placeholder="status">
        <input type="submit" name="submit" value="submit">
    </form>
    <table>
        <tr>
        <th>name</th>
        <th>email</th>
        <th>complain</th>
        <th>status</th>
         </tr><br>
       
         </form>  

         <?php
         
         $connection = mysqli_connect("localhost","root","");
         $db=mysqli_select_db($connection,'setu_complain');


         
         if(isset($_POST['submit']))
         {
            
             $status="pending";
             $query ="SELECT name,email,complain,status  from testfilecomplain where status='$status'";
            

             $query_run=mysqli_query($connection,$query);

             while($row = mysqli_fetch_array($query_run))  
             {
                ?>

         <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['complain']; ?></td>
                    <td><?php echo $status; ?></td>
                </tr>
        <?php

             } 
            }          
         ?>
    </table>
    </div>
</body>
</html>