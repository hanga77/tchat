
<?php
        if(isset($_POST['submit'])){
            
             $name = htmlspecialchars(trim($_POST['name']));
             $pass = sha1(htmlspecialchars(trim($_POST['pass'])));
            update($name,$pass);
        }
        
    ?>
<h2 class="header header-form">Modifier ces informations personnelles</h2>

<form method="post" id="regform" enctype="multipart/form-data">
        
        <div class='field' >
            <label class='field-label' for="name">votre nom</label>
            <input class='field-input' name='name' id="name" type="text" placeholder="" value="<?=$donnee['name']?>">
        </div>
        
        <div class='field' >
            <label class='field-label' for="pass">votre mot de passe</label>
            <input class='field-input' name="pass" id="pass" type="password" value="<?=$donnee['password']?>">
        </div>
        
        
        <button type="submit" name="submit">Enrégistrer</button>
        <a href="index.php?page=profil"><button style="background-color: green;">annuellation</button></a>
        </form>