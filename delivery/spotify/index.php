<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
  
    <title>spotify</title>
   
</head>
<body>
<header>
        
    </header>
   
<section>
            <h2> spotify</h2>

<form  action ='index.php' method="get">
    <input  type ='hidden' name ='page'>
    <input type="text" name="search">
    <button class="btn1" type="submit"  name= "tracks" > tracks</button>
    <button class="btn1" type= "submit" name= "albums">albums</button>
    <button class="btn1"type="submit" name= "artists">artists</button>
    <button class="btn1"type="submit" name= "genres">genres</button>
</form>
</section>
</body>
</html>


<?php




/********************************** tracks  ************************************************************************************************************/
$pdo = new PDO('mysql:host=localhost;dbname=spotify;charset=utf8','root','');

   
$genreParPage = 100;  
if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0)  
{
    $_GET['page'] = intval($_GET['page']);
    $pageCourante = $_GET['page'];
 
}
else{
    $pageCourante = 1;
}
$depart =($pageCourante -1)*$genreParPage;


if (isset($_GET["tracks"])){
    $str = $_GET ["search"];
    $genreTotalsReq = $pdo->query("SELECT name ,mp3 FROM tracks WHERE name LIKE '%$str%'");
    $genreTotales =$genreTotalsReq ->rowCount();
    $pagesTotales = ceil($genreTotales/$genreParPage);
 
    $abm = $pdo -> query("SELECT name ,mp3 FROM tracks WHERE name LIKE '%$str%' ORDER BY name ASC LIMIT $depart,$genreParPage ");
   
  
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



/****************************** ALbums*****************************************************************************************************************/

$genreParPage = 100;
if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0)  
{
    $_GET['page'] = intval($_GET['page']);
    $pageCourante = $_GET['page'];
 
}
else{
    $pageCourante = 1;
}
$depart =($pageCourante -1)*$genreParPage;


if (isset($_GET["albums"])){
    $str = $_GET ["search"];
    $genreTotalsReq = $pdo->query("SELECT name  FROM albums WHERE name LIKE '%$str%'");
    $genreTotales =$genreTotalsReq ->rowCount();
    $pagesTotales = ceil($genreTotales/$genreParPage);
 
    $sth = $pdo -> query("SELECT * FROM albums WHERE name LIKE '%$str%' ORDER BY name ASC LIMIT $depart,$genreParPage ");
   
     
    while ($tr = $sth -> fetch(PDO::FETCH_OBJ))
    
    { ?>
        <br>

        <table>
                <th>Nom de albums</th>
                <th>Description</th>
                <th>Cover</th>
                <th>Cover_small</th>
                <th>Release_date</th>
                <th>Popularity</th>
             <tr>
             <tr>
            <td>
                <?php echo $tr->name ."<br>";?>
            </td>
            <td>
                <?php echo $tr->description ."<br>";?>
            </td>
            <td>
                <?php echo $tr->cover ."<br>";?>
            </td>
            <td>
                <?php echo $tr->cover_small ."<br>";?>
            </td>
            <td>
                <?php echo $tr->release_date ."<br>";?>
            </td>
            <td>
                <?php echo $tr->popularity."<br>";?>
            </td>
  
        </tr>
    </table>

    <?php
            
    }
    

    for($i=1;$i<=$pagesTotales;$i++)
    {
        if(isset($_GET['search'])) 
        {
            echo '<a class="ahh" href="index.php?page='.$i.'&search='.$str.'&albums=">'.$i.'</a>';
        }
    }
    

}           

/******************************* Non artiste*************************************************************************************************/

    
$genreParPage = 100;  
if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0)  
{
    $_GET['page'] = intval($_GET['page']);
    $pageCourante = $_GET['page'];
 
}
else{
    $pageCourante = 1;
}
$depart =($pageCourante -1)*$genreParPage;


if (isset($_GET["artists"])){
    $str = $_GET ["search"];
    $genreTotalsReq = $pdo->query("SELECT name  FROM artists WHERE name LIKE '%$str%'");
    $genreTotales =$genreTotalsReq ->rowCount();
    $pagesTotales = ceil($genreTotales/$genreParPage);


    $dist = $pdo -> query("SELECT * FROM artists WHERE name LIKE '%$str%' ORDER BY name ASC LIMIT $depart,$genreParPage ");
   

    while ($tr = $dist-> fetch(PDO::FETCH_OBJ))
    
    { ?>
        <br>

        <table>
                <th>Name</th>
                <th>description</th>
                <th>bio</th>
                <th>photo</th>

             <tr>
             <td>
                <?php echo $tr->name ."<br>";?>
            </td>
            <td>
                <?php echo $tr->description ;?>
            </td>
            <td>
                <?php echo $tr->bio ."<br>";?>
            </td>
            <td>
                <?php echo $tr->photo ."<br>";?>
            </td>
        </tr>
    </table>
   
    <?php
             
    }
   

    for($i=1;$i<=$pagesTotales;$i++)
    {
        if(isset($_GET['search'])) 
        {
            echo '<a class="ahh" href="index.php?page='.$i.'&search='.$str.'&artists=">'.$i.'</a>';;
        }
    }
    

}
//**************************************************Genre************************************************************** */
$genreParPage = 100;
if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0)  
{
    $_GET['page'] = intval($_GET['page']);
    $pageCourante = $_GET['page'];
 
}
else{
    $pageCourante = 1;
}
$depart =($pageCourante -1)*$genreParPage;


if (isset($_GET["genres"])){
    $str = $_GET ["search"];
    $genreTotalsReq = $pdo->query("SELECT id FROM `albums` LEFT JOIN `genres` ON genres.id = albums.id WHERE name ='$str'");
    $genreTotales =$genreTotalsReq ->rowCount();
    $pagesTotales = ceil($genreTotales/$genreParPage);
 
    $red = $pdo -> query("SELECT name FROM `albums` LEFT JOIN `genres` ON genres.id = albums.id WHERE name ='$str' LIMIT $depart,$genreParPage");
   
     
    while ($tr = $red -> fetch(PDO::FETCH_OBJ))
    
    { ?>
        <br>

        <table>
                <th>Genre</th>
             <tr>
             <tr>
            <td>
                <?php echo $tr->name ."<br>";?>
            </td>
  
        </tr>
    </table>
  
    <?php
            
    }
    

    for($i=1;$i<=$pagesTotales;$i++)
    {
        if(isset($_GET['search'])) 
        {
            echo '<a class="ahh" href="index.php?page='.$i.'&search='.$str.'&genres=">'.$i.'</a>';
        }
    }
    

}   
   
?>