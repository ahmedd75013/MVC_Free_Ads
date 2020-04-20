<?php

$json = file_get_contents("recipes.json");

var_dump(json_decode($json));
?>

