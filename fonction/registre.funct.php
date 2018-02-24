<?php
    
    function mail_taken($mail){
        // declaration de la variable de la db
        global $dd;
        global $name,$pass,$pass2;
        
        $stmt = $dd->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();
        $PassResult = $stmt->fetch();
        if($PassResult['mail'] == $mail)
        {
           $_SESSION['erreur_mail'] = "l'adresse est deja utilise";
           
            header("Location:index.php?page=registre");
        }else{
            
            verif($pass,$pass2);
              $_SESSION['password'] = $pass;
              $_SESSION['name']  = $name;
              $_SESSION['mail']  = $mail;
           
              header("Location:index.php?page=member");
        }
        
    }
    
    function registre($name,$mail,$val)
    {
        global $dd;
        
        
        $req = $dd->prepare('INSERT INTO  `users` (  `name` ,  ` mail` ,  `password` ) VALUES (?,?,?)');
        $req->execute(
                      array(
             $name,
             $mail,
             $val,
        ));
    
    }
    
    function verif($val,$val2)
    {
        global $name,$mail;
        if($val == $val2)
        {
            registre($name,$mail,$val);
            
        }else{
            die('mot de passe non identique');
        }
    };
?>