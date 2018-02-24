<?php
     
     if(is_logger() == 0){
        header("Location:index.php?page=sign_in");
     }
  
  ?>

        <h2 class="header"> tous les membres </h2>
        <?=$_SESSION['name']; ?>
        
        <?php
        // affiche la liste des membres du site
            foreach( get_member() as $membre){
                if($membre->name != $_SESSION['name'])
                {?>
                        <div class="membre">
                            <strong><?=$membre->name ?></strong><br>
                            <!--<span><?=$membre->mail ?></span>-->
                            <a class="select" href="index.php?page=Tchat&name=<?=$membre->name?>">o</a>
                        </div><br><br>
                <?php
                }
            }
        
        ?>