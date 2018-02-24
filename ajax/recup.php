    <?php
    
            //chargement du fichier d'ouverture de la BD
            include "../fonction/mainfunction.php";
            
            //recuperation de l'adresse  du recepteur passer precedemment dans url
            $user   = $_SESSION['user'];
            
            // recuperation du nom l'utilisateur en temps reel
            $member = $_SESSION['name'];
                
            
            $req = $dd->query("SELECT * FROM messages WHERE(sender = '$member' AND receiver = '$user') OR (receiver = '$member' AND sender = '$user')");
            
            $result =array();
            
            while($rows = $req->fetchobject()){
                
                // les differents resultats trouves sont stockes dans le taleau vide
                $result[] = $rows;
            }
            
            //mise a jour de la table messages lorsque le receveur est la personne connecte qui a recu le sms
            
            
         //parcours de tout le tableau
        foreach($result as $message){?>
        
         <div class="message <?php echo ($message->sender == $member)? 'message-member' : 'message-user'?>">
            
            <?=$message->message?>
            <?=$message->file?>
         </div>
         <br/><br/>
        <?php
        }
      // a chercher!!! 
      global $person, $url,$user1;
      

      $req2 = $dd->query("SELECT * FROM messages WHERE receiver = '$member' AND sender = '$user' AND lu = 0 ");
      
      $rslt =  $req2->fetchObject();
      
      foreach($rslt as $rs){
         
         $req2 = $dd->query("UPDATE FROM messages SET lu = 1 WHERE receiver = '$member' AND sender = '$user' AND lu = 0 ");
      
      }
      
        
    ?>