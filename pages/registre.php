
 <?php
     
     if(is_logger() == 1){
        header("Location:index.php?page=member");
     }
  
  ?>

<h2 class="header header-form">S'inscrire</h2>
    
    
    <?php
        if(isset($_POST['submit'])){
            
             $name = htmlspecialchars(trim($_POST['name']));
             $mail = htmlspecialchars(trim($_POST['mail']));
             $pass = sha1(htmlspecialchars(trim($_POST['pass'])));
             $pass2 = sha1(htmlspecialchars(trim($_POST['pass2'])));
            
           
            mail_taken($mail);
            
            
        }
    ?>
    <form method="post" id="regform">
        
        <div class='field' >
            <label class='field-label' for="name">votre nom</label>
            <input class='field-input' name='name' id="name" type="text" placeholder="">
        </div>
        
        <div class='field' >
            <label class='field-label' for="mail">votre mail</label>
            <input class='field-input' type="email" placeholder="" id="mail" name="mail">
        </div>
        
        <div class='field' >
            <label class='field-label' for="pass">votre mot de passe</label>
            <input class='field-input' name="pass" id="pass" type="password" placeholder="">
        </div>
        
        <div class='field' >
            <label class='field-label' for="pass2">confirme mot de passe</label>
            <input class='field-input' name="pass2" id="pass2" type="password" placeholder="">
        </div>
        
        <p class="erreur"><?php  echo(isset($_SESSION['error_mail'])) ? $_SESSION['erreur_mail'] : '' ?></p>
        <button type="submit" name="submit" >s'inscrire</button>
    </form>