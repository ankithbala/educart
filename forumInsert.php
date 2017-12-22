<?php
require "conn.php";
$name=$_POST["name"];
$email=$_POST["email"];
$query=$_POST["query"];
$qry1="select id from forumtable";

$myQry="insert into forumtable (Date,Name,Email,Query) values(now(),'$name','$email','$query')";

if($conn->query($myQry)===TRUE)
{
$last_id=$conn->insert_id;
	echo "Query sent.Our team will reply you in T-48 hours";
}
else
{
	echo "Connection failed.Please try again.";
	
}
$conn->close();
?>
