<?php

    function user_existe($name){
        global $dd,$pass;
        $reponse   = $dd->prepare('SELECT * FROM users WHERE name=?');
    	$reponse -> execute(array($name));
        while ($donnees = $reponse->fetch())
        {
                if(($donnees['name'] == $name) AND ($donnees['password'] == $pass)){
                    $_SESSION['password'] = $donnees['password'];
                    $_SESSION['name'] = $donnees['name'];
					$_SESSION['mail'] = $donnees['mail'];
					
                    header("Location:index.php?page=member");
                    exit();
                }
                //header("Location:index.php?page=sign_in");
        }
       $_SESSION['error_user_not_found']="le nom ou le mot de passe est incorrecte";
    }
?>


