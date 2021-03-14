<?php
session_start();


$con=mysqli_connect('localhost','root','','setu_complain');





$query=mysqli_query($con,"SELECT * FROM testfilecomplain where department='medical' && status='accepted'");

$rowcount=mysqli_num_rows($query);



?>

<table border="1" align="center">
<style>

    
</style>

<tr>
<td>name</td>
<td>email</td>
<td>cpfno</td>
<td>complain</td>
<td>file_name</td>
<td>file_link</td>
<td>department</td>
<td>status</td>
<td>remark</td>
<td>edit</td>
</tr>

<?php
for($i=1;$i<=$rowcount;$i++)
{

    $row=mysqli_fetch_array($query);
?>
<tr>

<td><?php echo $row["name"]?></td>
<td><?php echo $row["email"]?></td>
<td><?php echo $row["cpfno"]?></td>
<td><?php echo $row["complain"]?></td>
<td><?php echo $row["file"]?></td>
<td><a href="file.php?eid=<?php echo $row["cpfno"]?>">User_file</a></td>
<td><?php echo $row["department"]?></td>
<td><?php echo $row["status"]?></td>
<td><?php echo $row["remark"]?></td>
<td><a href="medicaledit.php?eid=<?php echo $row["cpfno"]?>">edit</a></td>

</tr>
<?php
}
?>
</table>