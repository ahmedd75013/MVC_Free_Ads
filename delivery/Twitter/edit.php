<?php
 session_start();

 ?>
 <!DOCTYPE html>

<head>
    <meta charset="utf-8">
     
<link rel="stylesheet" type="text/css" href="style.css">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/fontawesome.css" integrity="sha384-vd1e11sR28tEK9YANUtpIOdjGW14pS87bUBuOIoBILVWLFnS+MCX9T6MMf0VdPGq" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
   <script type="text/javascript" src="script.js"></script>
</head>
<body >
   <header>
   </header>


   <body>
   <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
            <img src="login-user-icon.png" alt="" class="img-rounded img-responsive" />
                <div class="row">
                  
                <div class="col-sm-6 col-md-8">
                       
                    
                       <input type="texte" name="email" id="email" placeholder="Email" value="<?php echo $_SESSION['email'];?>"/>
                       <input type="texte" name="prenom" id="prenom" placeholder="Prenom"  value="<?php echo $_SESSION['prenom'];?>"/>
                       <input type="texte" name="nom" id="nom" placeholder="Nom"  value="<?php echo $_SESSION['nom'];?>"/>
                     
                    
                      <input type="submit" value="Mettre a jour votre profil"/>
                           
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

 </html




 <?php

    
// }  
  ?>



