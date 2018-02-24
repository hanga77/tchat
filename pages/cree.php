        
        <?php
        if(isset($_POST['submit'])){
            
             $titre = htmlspecialchars(trim($_POST['titre']));
             $contenu = htmlspecialchars(trim($_POST['description']));
             $membre = htmlspecialchars(trim($_POST['personne']));
             
           
            
            
            
        }
        
    ?>
<h2 class="header header-form">Création de projet</h2>

    <form method="post" id="logprojet" enctype="multipart/form-data">
        
        <div class='field'>
            <label class='field-label' for="titre">Titre du projet</label>
            <input class='field-input' name='titre' id="titre" type="text" placeholder="">
        </div>
        
     
        <div class='field' >
            <label class='field-label' for="description">description du projet</label>
            <textarea class='field-input' name='description' id="description" placeholder="" rows="6"></textarea>
        </div>
        
        <div class='field' >
            <label class='field-label' for="personne">membres ou participant à la création</label>
            <textarea class='field-input'  placeholder="" id="personne" name="personne"></textarea>
        </div>
        <div class='field'>
            <input type="file" name="fichier" class="field-file" >
        </div>
            <button type="submit" name="submit" style="width: 30%;margin-left: 5%;">Créer le projet</button>
            <a href="index.php?page=profil"><button style="background-color: green;width: 30%;">annuellation</button></a>
            <a href="index.php?page=update_projet"><button style="width: 30%;">Modifie le projet</button></a>
    </form>