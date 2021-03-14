<?php
$conn =mysqli_connect("localhost","root","","setu_complain");

if(isset($_REQUEST["eid"]))
{
    $eid=$_REQUEST["eid"];

    $query=mysqli_query($conn,"SELECT * FROM testfilecomplain WHERE cpfno='$eid'");
    $row=mysqli_fetch_array($query);
}


?>


<table border=1 align="center">
    {
        
        <td><iframe src="images/<?php echo $row ["file"]?>"height="500px" width="500px"></td>
    }

</table>

</form>