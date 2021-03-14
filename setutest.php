<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Album example · Bootstrap v5.0</title>

    

    


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
    </style>
</head>
<header>
  
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Hi,Admin</strong>
      </a>
      <div class="pull-right">
      <a href="adminlogin.php" class="btn btn-danger my-2">logout</a>
      </div>

    </div>
  </div>
</header>
  
<body>
     <form action="response.php" method="post">
    <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>cpfno</th>
            <th>complain</th>
            <th>file</th>
            <th>department</th>
            
            <th>accept</th>
            <th>reject</th>
            <th>status</th>
 
        </tr>
        
        <?php
        $conn =mysqli_connect("localhost","root","","setu_complain");
        if($conn->connect_error)
        {
            die("Connection failed".$conn->connect_error);
        }
        

       
        $accept="responseaccept.php";

        $details_accept="<a href=" . $accept . ">accept</a>";

        $reject="responsereject.php";

        $details_reject="<a href=" . $reject . ">reject</a>";
       

        $sql ="SELECT name,email,cpfno,complain,file,department  from testfilecomplain ";

        $result = $conn -> query($sql);
        if($result -> num_rows>0)
        {
            while($row =$result ->fetch_assoc())
            {
                echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["cpfno"]."</td><td>".$row["complain"]."</td><td>".$row["file"]."</td><td>".$row["department"]."</td><td>".$details_accept."</td><td>"."$details_reject"."</td></tr>";
               
            }
            echo"</table>";
        }
        else{
            echo "0 result";
        }

        $conn->close();
        ?>
    </table>

    </form>
   

  </form>





  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

      
</body>
</html>