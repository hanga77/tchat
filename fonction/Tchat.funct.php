


    <?php
        function user_exist(){
            global $dd;
            
            $tab = array('user' => $_GET['name'],
                         'session' => $_SESSION['name']
                         );
            
            /*recuperer dans la tables users le nom passe dans l'url et doit
            etre different de celui qui connecter a l'instant*/
            
            $sql = "SELECT * FROM users WHERE name = :user AND name != :session";
            
            $req = $dd->prepare($sql);
            
            $req->execute($tab);
            
            $exit = $req->rowCount($sql);
            
            return $exit;
        }
        
        /*recuperer le nom de l'utilisateur dans la BD avec qui on veut causer */
        function get_user(){
            global $dd;
            $user = array();
            $e =array('user' => $_SESSION['user']);
            $req = $dd->prepare("SELECT * FROM users WHERE name=:user");
            $req->execute($e);
            while($rows = $req->fetchobject()){
                $user[] = $rows;
            }
            return $user;
        }
        $user1 = $_GET['name'];
    ?>