
<h2 class="header header-form">Modification de projet</h2>

    <form method="post" id="logprojet" enctype="multipart/form-data">
        
        <div class='field'>
            <label class='field-label' for="titre">Titre du projet</label>
            <input class='field-input' name='titre' id="titre" type="text" placeholder="" readonly>
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
            <button type="submit" name="submit" >Modification du projet</button>
            <a href="index.php?page=profil"><button style="background-color: green;">annuellation</button></a>
            
    
    </form>