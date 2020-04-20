<?php
$dbh = new PDO('mysql:host=localhost;dbname=collejquery', "root", "");

$sth = $dbh->query("SELECT * FROM tasks");
$result = $sth->fetchall();
echo json_encode($result);