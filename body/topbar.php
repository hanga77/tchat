
<!--ceci est un menu-->

<div class="topbar">
        <a class="app-name" href="index.php">Tchat</a>
        <span class="menu">
  
  <?php
        if(is_logger() == 1){
   ?>
            <a href="index.php?page=member" class="<?php echo ($page=="member") ? 'active':'' ?>">Membres</a>
            <a href="index.php?page=cree">Creer un projet</a>       
            
            <div class="dropdown">
             <button class="dropbtn <?php echo ($page=="profil") ? 'active':'' ?>"">Profil</button>
                <div class="dropdown-content">
                  <a href="index.php?page=update">Modifier</a>
                  <a href="index.php?page=suppr">Supprimer</a>
                </div>
              </div>
           
            <a href="index.php?page=log_out" class="<?php echo ($page=="log_out") ? 'active':'' ?>">Déconnexion</a>
            
        <?php
        }else{
               ?>
               <a href="index.php?page=registre" class="<?php echo ($page=="registre") ? 'active':'' ?>">Inscription</a>
               <a href="index.php?page=sign_in" class="<?php echo ($page=="sign_in") ? 'active':'' ?>">Se connecter</a>
        <?php
        }
  
  ?>
  
            
            
        </span>
</div>
