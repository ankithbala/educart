<?php
require "conn.php";
$forumRetireve=array();

$sql2="SELECT Id,Name,Email,Query,Date FROM forumtable";

$stmt=$conn->prepare($sql2);

$stmt->execute();

$stmt->bind_result($id,$name,$email,$query,$date);
while($stmt->fetch()){
	$temp = [
	'id'=>$id%10,
	'name'=>$name,
	'email'=>$email,
	'query'=>$query,
      'date'=>$date
	];
	
	array_push($forumRetireve,$temp);
}
echo json_encode($forumRetireve);


?>