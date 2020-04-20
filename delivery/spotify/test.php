<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>My_cinema</title>
   
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light blue">
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <a href="index.html"> <h1> MY_CINEMA</h1></a>
                   

                        <a class="nav-link" href="membre.php">MEMBRE</a>
    
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">FILM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="abonnement.php">ABONNEMENT</a>
                    </li>
                   
    
                    
                </ul>
            </div>
    
           
        </nav>
    </header>
    <img class="hh"src="hh.jpg">
<section>
            <h2> FILM</h2>

<form  action ='index.php' method="get">
    <input  type ='hidden' name ='page'>
    <input type="text" name="search">
    <button class="btn1" type="submit"  name= "tracks"> tracks</button>
    <button class="btn1" type= "submit" name= "albums">albums</button>
    <button class="btn1"type="submit" name= "artists">artists</button>
    <button class="btn1"type="submit" name= "genres">genres</button>
</form>
</section>
</body>
</html>


<?php
$pdo = new PDO('mysql:host=localhost;dbname=spotify;charset=utf8','root','');

   
$genreParPage = 10;  
if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0)  
{
    $_GET['page'] = intval($_GET['page']);
    $pageCourante = $_GET['page'];
 
}
else{
    $pageCourante = 1;
}
$depart =($pageCourante -1)*$genreParPage;


if ((isset($_GET["tracks"])) || (isset($_GET["albums"])){
    $str = $_GET ["search"];
    $genreTotalsReq = $pdo->query("SELECT name ,mp3 FROM tracks WHERE name LIKE '%$str%'");
    $genreTotales =$genreTotalsReq ->rowCount();
    $pagesTotales = ceil($genreTotales/$genreParPage);
 
    $abm = $pdo -> query("SELECT name ,mp3 FROM tracks WHERE name LIKE '%$str%' ORDER BY name ASC LIMIT $depart,$genreParPage ");
   
    (isset($_GET["albums"])){
        (isset($_GET["albums"]))
        $genreTotalsReq = $pdo->query("SELECT name  FROM albums WHERE name LIKE '%$str%'");
        $genreTotales =$genreTotalsReq ->rowCount();
        $pagesTotales = ceil($genreTotales/$genreParPage);
     
        $sth = $pdo -> query("SELECT name  FROM albums WHERE name LIKE '%$str%' ORDER BY name ASC LIMIT $depart,$genreParPage ");
       
while ($tr = $abm-> fetch(PDO::FETCH_OBJ))
{
?>

    <br>

    <table>
         <tr>
             <th>Name </th>
        
             <th>Mp3 </th>
          
             
          </tr>
          <tr>
          <td>
             <?php echo $tr->name . "<br>";?>
            </td>
         
            <td>
             <?php echo $tr->mp3 . "<br>";?>
            </td> 
           
         </tr>
         
        </table>
<br><br>
<?php

}

for($i=1;$i<=$pagesTotales;$i++)
{
    if(isset($_GET['search'])) 
    {
        echo '<a class="ahh" href="index.php?page='.$i.'&search='.$str.'&tracks=">'.$i.'</a>';
    }
}
}





?>