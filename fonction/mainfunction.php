    
    
    <?php
        // demarrage de la session
        session_start();
        
        $dbhost = "localhost";
        $dbname = "tchat";
        $dbuser = "root";
        $dbpswd = '';
        
        try{
            //connection a la BD
            $dd = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        
        } catch(PDOException $e)
        {
            die("probleme de connection a la base de donnée");
        }
      /*
      cette fonction permet de verifier
      si un utilisateur est connecter ou la session est demarrée
      */
      function is_logger(){
      
            if(isset($_SESSION['name']))
            {
                $logger= 1;
            }else{
                $logger=0;
            }
        return $logger;
      }
    ?>