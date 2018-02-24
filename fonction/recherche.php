

    <?php
        function rechercher($search){
            //champs vide
            global $dd;
            $champ = "";
            
            //permet d'enlever les espaces dans une phrase
            
            $search = preg_split('/[\s\-]/',$search);
            
            //compte les mots
            $count_keyswork = count($search);
            
            foreach($search as $keys => $search){
                
                $champ = "Titre LIKE '%$search%'";
                
                if($keys != ($count_keyswork -1)){
                    
                    $champ .= " AND ";
                    
                }
            }
            
                $query = $dd->query("SELECT * FROM article WHERE $champ");
                $req = $dd->query("SELECT * FROM article WHERE $champ");
                $rows  = $query->fetch();
                 
                if($rows){
                    
    
                    while($article = $req->fetch())
                    {
                        echo "<strong>".$article['Titre']."</strong><br><u>Description:</u> ".$article['contenu']."<br><u>Date et heure de mise en ligne:</u>  ".$article['date']."<br>";
                    }
                }else{
                    echo "pas de résultat trouvé.....";
                }
        }
    ?>