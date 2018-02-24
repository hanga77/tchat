


    <?php
        
        function get_member(){
            
            global $dd;
            
            $req=$dd->query("SELECT * FROM users");
            $result= array();
            
            while($res = $req->fetchobject())
            {
                $result[] = $res;
                
            }
            
             return $result;
        }
    ?>