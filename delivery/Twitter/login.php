<?php

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $mdp = $_POST ["mdp"];
  
    if ($email && $mdp)
    {   
        $query = "SELECT * FROM user WHERE email='$email'&& pwd='$mdp'";
        $connect = mysqli_connect("localhost","root","", "tweet_academie");
       // mysql_select_db('my_meetic');
    
        $table = mysqli_query($connect, $query);
        $rows = mysqli_num_rows($table);
        $result = mysqli_fetch_array($table, MYSQLI_ASSOC);

        if($rows > 0)
        {  
            session_start();
            $_SESSION['nom']=$result['fullname'];
            $_SESSION['pseudo']=$result['username'];
            $_SESSION['email']=$result['email'];
            // $_SESSION['mdp']=$result['pwd'];

            echo "connexion reussie";
            
        }
        else
        {
            echo "Email ou password incorect!";
        }
    }
    else echo "veulliez saisir tous les champs";

}
?>