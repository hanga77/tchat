    
    
    
    <?php
      /*
       evite de faire planter le programme
      pour se fait on verifie si l'utiliseur est connecté ou
      on verifie si l'utilisateur choisir existe parmis les propositions
      faites
      */
      
        if(isset($_GET['user'])||is_logger()== 0||user_exist() ==0 )
        {
            /*comme il n'est pas connecté on le renvoie sur Home*/
            
            header("Location:index.php?page=home");
        }
       
        //recupere le nom du receiver dans l'url qu'on stocke dans une variable session
       
        $_SESSION['user'] = $_GET['name'];
        
        //$person = $_GET['name'];
        //$url = $_GET['page'];
       
        
        foreach(get_user() as $user){
           
            ?>
            <h2 class="header"><?=$user->name?></h2>
        <div id="chatbox">
            <div class="messages-box" id="messages-box">
                <div class="message message-member"></div>
                <div class="message message-user"></div>
            </div>
        </div>
            <div class="button">
                <div class="field field-area">
                    <form method="post" enctype="multipart/form-data">
                            <label for="message" class="field-label">Votre message</label>
                            <textarea name="message" id="message" rows="2" class="field-input field-textarea"></textarea>
                            <input type="file" name="file" id="file" class="file">
                    </form>
                </div>
                <button type="submit" id="send" class="send">
                    <span class="i-send">en</span>
                </button>
            </div>
       <?php }
       
    ?>