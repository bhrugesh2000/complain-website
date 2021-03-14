<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
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
     <form action="setutest.php" method="post">
    <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>cpfno</th>
            <th>complain</th>
            <th>file</th>
            <th>department</th>
            <th>details</th>
            <th>Edit
            <td><a href="">Edit</a></td>
            </th>
        </tr>
        <?php
        $conn =mysqli_connect("localhost","root","","setu_complain");
        if($conn->connect_error)
        {
            die("Connection failed".$conn->connect_error);
        }
        $status="pending";

        $mlink = "setutest.php";

        $details="<a href=" . $mlink . ">Details</a>";

        $sql ="SELECT name,email,cpfno,complain,file,department  from testfilecomplain";

        $result = $conn -> query($sql);
        if($result -> num_rows>0)
        {
            while($row =$result ->fetch_assoc())
            {
                echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["cpfno"]."</td><td>".$row["complain"]."</td><td>".$row["file"]."</td><td>".$row["department"]."</td><td>".$details."</td></tr>";
               
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
</body>
</html>