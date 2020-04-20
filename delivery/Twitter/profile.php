<?php

session_start();


 ?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="./css/skeleton.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/fontawesome.css" integrity="sha384-vd1e11sR28tEK9YANUtpIOdjGW14pS87bUBuOIoBILVWLFnS+MCX9T6MMf0VdPGq" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e17c4d5997.js" crossorigin="anonymous"></script>
</head>

<body>
    

  <div class="twitter-wrap">
    <div class="side-left">
      <ul class="menu">
            <li class="menu-item">
                <a class="menu-link active">
                    <i class="fas fa-dove"></i>
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-link"href="profile.php">
                        <i class="fas fa-home">Acceuil</i>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link">
                        <i class="fas fa-hashtag">Explore</i>
                </a>
            </li>
            <li class="menu-item">
                    <a class="menu-link">
                        <i class="fas fa-bell">Notifications</i>
                    </a>
            </li>
            <li class="menu-item">
                    <a class="menu-link">
                        <i class="fas fa-envelope">Messages</i>
                    </a>
            </li>
            <li class="menu-item">
                    <a class="menu-link">
                        <i class="fas fa-bookmark">Bookmarkes</i>
                    </a>
            </li>
            <li class="menu-item">
                    <a class="menu-link">
                      <i class="fas fa-list-alt">Lists</i>
                    </a>
            </li>
           
            <li class="menu-item">
            <a class="menu-link"href="test.php">
                
                    <img class="user-img-30" alt="" src="Dlo2DUJXsAQj8yC.png">
                </a>
            
                <div class="box" >
                    <img class="img2" src="Dlo2DUJXsAQj8yC.png" alt="" class="user-img-40">
                    <i class="glyphicon glyphicon-envelope"><?php echo $_SESSION['pseudo']?></i>
                    <br>
                   <i class="glyphicon glyphicon-envelope"><?php echo $_SESSION['nom']?></i>
                   <br>
                   <i class="glyphicon glyphicon-envelope"><?php echo $_SESSION['bio']?></i>
                        <div class="folow">
                            <a href="#"><span>83</span> Following</a>
                            <a href="#"><span>83</span> Followers</a>
                         </div>
                </div>
            </li>


            <li class="menu-item">
                <a class="menu-link" href="index.html">
                    <i class="fas fa-ellipsis-h">More</i>
                </a>
            </li>

            <li class="menu-item ">
                 <a class="menu-link add-twit">
                    <i class="fas fa-feather-alt"></i>
                </a>
            </li>
      </ul>
     </div>
    </div>

    <div class="side-main"> 
      <div class="top-fixed" href="index.html">
          <a href="#" class="link-home">Home</a>
      </div>
      <div class="write-twit">
        <img  class="img2" src="Dlo2DUJXsAQj8yC.png" alt="">
        <textarea name="text" id="#" cols="30" rows="3" placeholder="Quoi de neuf?"></textarea>
      <hr>
      </div>
      
      <div class="gif">
        <hr>
        <i class="far fa-image"></i>
        <i class="far fa-smile"></i>
     
      </div>
    <div class="status">
    <img class="img2" src="Dlo2DUJXsAQj8yC.png" alt="" class="user-img-40">
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quaerat provident deleniti hic ipsa temporibus officiis 
     voluptatem tempora nihil? Placeat, dolor inventore consequatur ratione quibusdam delectus aspernatur error provident perspiciatis.</p>
     <hr>
     p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quaerat provident deleniti hic ipsa temporibus officiis 
     voluptatem tempora nihil? Placeat, dolor inventore consequatur ratione quibusdam delectus aspernatur error provident perspiciatis.</p>
     <hr>
    </div>
    </div>
    

    
    <div class="side-right">
       <div class="search-form">
           <form action="">
               <label for=""><i class="fas fa-search"></i></label>
               <input class="search" type="text" name="" id="" placeholder="Search Twitter">
               
           </form>
           
       </div>
       <br>
       <table>
       <thead>
          <tr>
            <th>Tendances pour vous</th>
            
          </tr>
        </thead>
        <tbody>
         
          <tr>
            <td>#PSG</td>
           
          </tr>
          <tr>
            <td >#FOOT</td>
            
            
          </tr>
          <tr>
            <td>#RAP</td>
            
            
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</body>
</html>