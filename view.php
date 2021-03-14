<?php

include "dbConn.php"; 
$stat=$db->prepare("select * from testfilecomplain");
$stat->execute();
($row=$stat->fetch())
?>