    <?php
    
            //chargement du fichier d'ouverture de la BD
            include "../fonction/mainfunction.php";
            
            //recuperation de l'adresse  du recepteur passer precedemment dans url
            $user   = $_SESSION['user'];
            
            // recuperation du nom l'utilisateur en temps reel
            $member = $_SESSION['name'];
            
            //evitons les espaces le message et les balises html
            $message = htmlspecialchars(trim($_POST['message']));
            
            //chargement des infos dans un tableau pour etre mis plutard dans la BD
            $tableau = array(
                             'sender'   => $member,
                             'receiver' => $user,
                             'message'  =>$message
                            );
            
            $sql = "INSERT INTO messages(sender,receiver,message,date) VALUES(:sender,:receiver,:message,NOW())";
            $req = $dd->prepare($sql);
            $req->execute($tableau); 
            
            // selection de la colonne lu

    ?>