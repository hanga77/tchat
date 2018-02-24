  
  <?php
     
     if(is_logger() == 1){
          header("Location:index.php?page=member");
     }
  
  ?>
  
   <?php
        
        if(isset($_POST['submit'])){
            $name = htmlspecialchars(trim($_POST['name']));
            $pass = sha1(htmlspecialchars(trim($_POST['password'])));
            user_existe($name);
                
        }
   
   ?> 
    <h1 class="header"> se connecter</h1>
    
    <form method="post" id="logForm">
        <div class='field' >
            <label class='field-label' for="name">votre nom</label>
            <input class='field-input' type="texte" placeholder="" id="name" name="name">
        </div>
        
        <div class='field' >
            <label class='field-label' for="pass">votre mot de passe</label>
            <input class='field-input' name="password" id="pass" type="password" placeholder="">
        </div>
        
        <p class="erreur"><?php  echo (isset($_SESSION['error_user_not_found'])) ? $_SESSION['error_user_not_found'] : ''?></p>
        <button type="submit" name="submit">Se connecter</button>
    </form>