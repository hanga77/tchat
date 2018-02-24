

        <?php
            global $dd;
            $user = $_SESSION['name'];
            
            $tab =array('session' => $user);
            $req = $dd->prepare("SELECT * FROM users WHERE name = :session");
            $req->execute($tab);
            $donnee=$req->fetch();
            
            
            function update($name,$pass){
                
                global $dd;
                
                $red2 = $dd->query("UPDATE `users` SET `password`= '".$pass."'pass WHERE name = '".$_SESSION['name']."'");
                $red1 = $dd->query("UPDATE `users` SET `name`= '".$name."' WHERE name = '".$_SESSION['name']."'");
                $red3 = $dd->query("UPDATE `messages` SET `sender`='".$name."' WHERE sender = '".$_SESSION['name']."'");
                
                $_SESSION['name'] = $name;
                header("Location:index.php?page=member");
            }
        ?>