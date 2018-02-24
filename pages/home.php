
         
         <h1 class="header">Accueil</h1>    
   
    <form method="post">
        
        
        <input type="text" name="search" placeholder="recherche....." class="recherche">
        <input type="submit" value="recherche" name="submit">
    </form>
    <script src="script/fonct.js"></script>
    <?php
    
        if(isset($_POST['submit'])){
            
            $search = htmlspecialchars(trim($_POST['search']));
            
            if(empty($search)){
                
                echo "<span class='error'>veuillez remplir ces champs</span>";
            }else{
                
                rechercher($search); 
            }
            
            
        }
        
    ?>
    <?php
      if(is_logger() == 1){
        
        ?>
          
          <a href="index.php?page=article">créer une publication</a>
    
    <?php
        }
    ?>
        <h2 style="text-align: center; margin-left: 0%;"> Affichage des news</h2>
                              <?php
                                        $req = $dd->query("SELECT * FROM article ORDER BY date DESC");
                                        
                                        while($reponse = $req->fetch()){
                               ?>
                                              <div style="float: left; width: 30%; padding-left: 1%;margin-left: 2%;">
                                                   <div class="brin">
                                                            <center><?=$reponse['Titre']?></center>
                                                   </div>
                                                   <div class="forn">
                                                            <center><?php echo $reponse['contenu'];?></center>
                                                            <?php
                                                                
                                                                if(is_logger() == 1){
                                                              
                                                              ?>
                                                            
                                                            <a href="#"><p style="margin-top: 14%; font-size:16px;"><em>éditer</em></p></a>
                                                            
                                                            <?php
                                                                
                                                                }
                                                            
                                                            ?>
                                                   </div>
                                                
                                              </div>  
                                                 
                      <?php
                                    }

        
                              
                   $reponse = $req->fetch();
                   
                   
                   if(!empty($reponse)){
              
                           echo '<div style="font-size: 40px;
                                      border: 2px solid blue;
                                      color: red;
                                      padding:1%;
                                      background-color:green;
                                      outline:1%;
                                      text-align:center;
                                      ">
                           OOuups, ya pas d\'article publié</div>';       
            }
            
    
    ?>