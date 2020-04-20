
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cinema World | Sitemap</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, .link1 span, .link1');</script>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page6">
<!-- START PAGE SOURCE -->
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="#">Cinema <span>World</span></a></div>
          <ul>
            <li><a href="#"><img src="images/icon1.gif" alt="" /></a></li>
            <li><a href="#"><img src="images/icon2.gif" alt="" /></a></li>
            <li><a href="#"><img src="images/icon3-act.gif" alt="" /></a></li>
          </ul>
        </div>
        <div class="row-2">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about-us.html">About</a></li>
            <li><a href="articles.html">Articles</a></li>
            <li><a href="contact-us.html">Contacts</a></li>
            <li class="last"><a href="sitemap.html" class="active">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <div id="content">
        <div class="line-hor"></div>
        <div class="box">
          <div class="border-right">
            <div class="border-left">
              <div class="inner">
                <h3>Site <span>Map</span></h3>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <ul class="sitemap-list">
                  <li><a href="#">Home Page</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Articles</a>
                    <ul>
                      <li><a href="article.html">Article 1</a></li>
                      <li><a href="#">Article 2</a></li>
                      <li><a href="#">Article 3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Site Map</a></li>
                </ul>
                <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="footer">
        <div class="left">
          <div class="right">
            <div class="footerlink">
              <p class="lf">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved</p>
              <p class="rf">Design by <a href="http://www.templatemonster.com/">TemplateMonster</a></p>
              <div style="clear:both;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>

<?php

$pdo = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');

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



if (isset($_GET["submit"])){
 $str = $_GET ["search"];
 $genreTotalsReq = $pdo->query("SELECT id_perso FROM `fiche_personne` WHERE prenom LIKE '%$str%'");
 $genreTotales =$genreTotalsReq ->rowCount();
 $pagesTotales = ceil($genreTotales/$genreParPage);

 $sth = $pdo -> query("SELECT nom, prenom  FROM `fiche_personne` WHERE prenom LIKE '%$str%' OR nom LIKE '%$str%' ORDER BY nom ,prenom LIMIT $depart,$genreParPage");
 



 while ($tr = $sth -> fetch(PDO::FETCH_OBJ))
 {?>
     <br>

     <table>
         <tr>
             <th>Nom</th>
             <th> Prenom</th>
             <button><a  href="abonnement.php" name= "abonnement">ABONNEMENT</a></button>
             <button><a  href="#" name= "historique">HISTORIQUE</a></button>
          </tr>
          <tr>
          <td>
             <?php echo $tr->nom . "<br>";?>
            </td>
            <td>
             <?php echo $tr->prenom . "<br>";?>
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
         echo '<a href="membre.php?page='.$i.'&search='.$str.'&submit=">'.$i.'</a>';
     }
    }
    }


?>
