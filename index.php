<?php
//Access Database Class 
include('dbclass.php');
$config = new DbConfig();
$connect=$config->openGate();

 function getData($connect)
{
$sql=$connect->prepare("SELECT * FROM table");
$sql->execute();	
$row=$sql->fetchAll();
return $row;	
}

$dataRows = getData($connect);
foreach($dataRows  as $row)
{
echo $row['tablename'].'<br/>'; 	
}





?>