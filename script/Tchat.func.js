$(document).ready(function(){
    //chargment de la musique d'envoie du message
        $('<audio id="beepAudio"><source type="audio/mpeg" src="bip.mp3">').appendTo("#body");
    recup_message();
    
        $('.field-input').focus(function(){
        
                //on definit un objet qui va appliquer le style
        
            $(this).parent().addClass('is-focused has-label');
           
        });
        
        $('.field-input').blur(function(){
            $parent = $(this).parent();
            if ($(this).val()==''){
                $parent.removeClass('has-label');
                
            }
            $parent.removeClass('is-focused');
            
        });
        
        $('.field-input').each(function(){
                if ($(this).val() != '') {
                    $(this).parent().addClass('has-label');
                }
            
        });
        
        
        
         
        $('#send').click(function(){
            var message = $('#message').val();
            
            var file    = $('#file').val();
            //plus les messages sont bcp alors faire une descente automatique du curseur
            
             $("#messages-box").animate({"scrollTop":$("#messages-box").height()},"slow");
              $("#body").animate({"scrollTop":$("#body").height()},"slow");
                   
            if (message != '') {
                $.post('ajax/post.php',{message :message},function(){
                    
                    //charge d'abord les messages precedent 
                    recup_message();
                   
                    // permet de vider le champ apres la saisir
                    $('#message').val('');
                    
                    //on fait un focus sur la zone de saisir
                    $("#message").focus();
                    
                   //jouer la musique d'envoi
                    $("#beepAudio")[0].play();
                    
                    });
                
                
            }
            
            if (file != '') {
                    //un fichier a transfere 
                $.post('ajax/post.php',{file :file},function(){
                    
                    //charge d'abord les messages precedent 
                    recup_message();
                   
                    // permet de vider le champ apres la saisir
                    $('#message').val('');
                    
                    //on fait un focus sur la zone de saisir
                    $("#message").focus();
                    
                   //jouer la musique d'envoi
                    $("#beepAudio")[0].play();
                    
                    });
            }
            
        });
        
        // function qui permet d'appuyer sur entrer pour une publication
                $("#message").keypress(function(event){
                        if (event.which == 13) {
                            
                            // ceci permet de ne rien faire du tout lorsqu'on appuie sur entrer
                            //event.preventDefault();
                            
                            // appele du button publier
                            $("#send").click();
                        }
                });
        
        $("#message").focus();
        //recuperer les sms toutes les secondes
        function recup_message() {
            $.post('ajax/recup.php',function(data){
                // affiche les messages dans le box des messages
                $('.messages-box').html(data);
                
                
                });
        }
        setInterval(recup_message,1000); 
    });