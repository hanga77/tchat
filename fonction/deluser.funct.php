

<?php
      
        function suppr(){
        
            global $dd;
            
            $sup = $_SESSION['name'];
             $tab = array(
                         'session' => $sup
                         );
            $sql =$dd->prepare("DELETE FROM `users` WHERE name = :session");
            $sql->execute($tab);
        header("Location:index.php?page=log_out");
        
        }
      suppr();  
    ?>