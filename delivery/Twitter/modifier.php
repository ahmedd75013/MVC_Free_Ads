<?php

$connect = mysqli_connect("localhost","root","", "tweet_academie");

$query = ('update user set fullname = "nom", tel = "0777777777", birthday = "1998-06-09", bio = "ceci est une bio", location = "ici" where email = "a@a.aa"');




$_SESSION['nom']=$result['fullname'];
$_SESSION['pseudo']=$result['username'];
$_SESSION['email']=$result['email'];
?>