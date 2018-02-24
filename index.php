      <?php
                  include"fonction/mainfunction.php";
                   // include "fonction/mainfunction.php";
                    $d="pages/";
                    //permet de faire un scan dans un dossier dans l'ordre deccroissant
                    $pages = scandir($d);
                    
                    //in_array permet de verifier si l'url passer existe dans le dossier pages
                    // le 1er parametre c'est la valeur a recherche et le 2sd c'est l'endroit ou chercher
                    
                    
                    if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php',$pages))
                    {
                            //recuperer l'URL passer  et met de $pages 
                            $page = $_GET['page'];
                    }else{
                          $page="home";  
                    }
                     
                     $page_functions= scandir("fonction/");
                      
                      if(in_array($page.".funct.php",$page_functions))
                      {
                            include "fonction/".$page.".funct.php";
                      }
      ?>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Espace membre</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="script/jQuery.js"></script>
        
    </head>
    <body id="body">
        <!--insert du menu-->
        <?php
                include"body/topbar.php";
        ?>
        
        <div class="container">
                
                 <?php
                        // redirection
                        include'pages/'.$page.'.php';
                 ?>
        </div>
       
       
       
       <?php
                $pages_js = scandir("script/");
                if(isset($_GET['page']) && !empty($_GET['page']))
               { //recuperation de la valeur passe dans l'URl
                $page=$_GET['page'];
                
                //verifie si la valeur passer est bel et bien là
                        if(in_array($page.'.func.js',$pages_js))
                        {?> 
                            <!--chargement du fichier js .-->                
                           <script src="script/<?php echo $page ?>.func.js"></script>
                           <?php
                        }
               }
        ?>
        
        
     
    </body>
</html>