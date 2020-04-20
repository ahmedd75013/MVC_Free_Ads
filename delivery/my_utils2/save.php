<?php
$dbh = new PDO('mysql:host=localhost;dbname=collejquery', "root", "");

$res = [];

if (isset($_POST["todo"])) {
    for ($i = 0; $i < count($_POST["todo"]); $i++) {
        $result = $dbh->query('INSERT INTO `tasks`(`value`, `list`) VALUES (' . $_POST["todo"][$i] . ', "todo")');
        array_push($res, $result);
    }
}

if (isset($_POST["done"])) {
    for ($i = 0; $i < count($_POST["done"]); $i++) {
        $result = $dbh->query('INSERT INTO `tasks`(`value`, `list`) VALUES (' . $_POST["done"][$i] . ', "done")');
        array_push($res, $result);
    }
}

var_dump($res);