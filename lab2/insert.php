<?php
$con = msql_connect("localhost","peter","abc123");
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_select_db("jw76577", $:con);
$sql="INSERT INTO Persons (FirstName, LastName, Age)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
 }
echo "1 record added";
mysql_close($con);
?> 
