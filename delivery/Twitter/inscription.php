<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tweet_academie";


class Personnage
{
  private $_nom;
  private $_pseudo;
  private $_email;
  private $_mdp;


  // Liste des getters

  public function nom()
  {
    return $this->_nom;
  }

  public function pseudo()
  {
    return $this->_pseudo;
  }

  public function email()
  {
    return $this->_email;
  }

  public function mdp()
  {
    return $this->_mdp;
  }
}

try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $nom = $_POST["nom"];
        $pseudo = $_POST["pseudo"];
        $email = $_POST ["email"];
        $mdp = $_POST ["mdp"];

        // $mdp = hash("sha512",$_POST ["mdp"]);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO user(fullname, username, email, pwd) VALUES ('$nom', '$pseudo', '$email','$mdp')";

        $conn->exec($sql);

        echo json_encode("Profile created successfuly");
    }

catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


?>

