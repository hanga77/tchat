<div class="topbar">
        <a class="app-name" href="index.php">Creer un projet</a>
        <span class="menu">
  
  <?php
        if(is_logger() == 1){
   ?>
                
            <a href="index.php?page=update_projet">Modifie le projet</a>
            <a href="index.php?page=home" class="<?php echo ($page=="home") ? 'active':'' ?>">Accueil</a>
        <?php
        }
  
  ?>