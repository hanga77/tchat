
 
 

 <?php
   
   include"fonction/recherche.php";
   if(!empty($_POST)){
    
    //global $dd;
    
    $error = array();
    
      if(empty($_POST['Titre'])){
    
        $error['Titre'] = "merci de mettre un titre !";
        
      }
      
      if(empty($_POST['contenu']))
      {
        $error['contenu'] = "merci de mettre un contenu !";
      }
      
      if(empty($error)){
        $titre = htmlspecialchars(trim($_POST['Titre']));
        $contenu = htmlspecialchars(trim($_POST['contenu']));
        
        
        
        $req = $dd->prepare("INSERT INTO `article`(`Titre`, `contenu`, `date`)
                            VALUES (:Titre, :Contenu ,NOW() )");
       
        $req->execute(array(
          'Titre' => $titre,
          'Contenu' => $contenu
        ));
        
      echo "<div style='background-color: rgb(0,255,4);text-align: center;padding:1.3%; border-radius:5px;font-size:15px;'>news bien ajouté</div>";
      }
   }
 ?>



<?php
      if(is_logger() == 1){
    ?>
     
                    <h3>Ajout de news</h3>
                    
                    <form method="post">
                      <div class='field' >
                            <label class='field-label' for="Titre">Titre de la news</label>
                            <textarea class='field-input' name='Titre' id="Titre" placeholder="" ></textarea>
                        </div>
                        
                        <div class='field' >
                            <label class='field-label' for="contenu">Contenu de la news</label>
                            <textarea class='field-input'  placeholder="" id="contenu" name="contenu"></textarea>
                        </div>
                      
                        <button type="submit" class="nick">Envoyer la news</button>
                    </form>
         <?php
      }
      ?>
      <a href="index.php?page=home">retour</a>