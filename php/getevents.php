<?php 

include_once('db.php');

$sql ="SELECT * FROM events ORDER BY date_created DESC";

$stmt= $conn->prepare($sql);

$stmt ->execute();

$events = $stmt->fetchAll();

?>