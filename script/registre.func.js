//chargement du fichier jQuery charger dans l'index
$(document).ready(function(){
    
        $('#name').focus();
        //met le curseur sur le premier focus et applique le style de la feuille de style.css     
        
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
        //le block de dessus permet de bouger les input
        
        //evaluation du formulaire
    $('#regform').submit(function(){
        // recuperation des input
        var name  = $('#name').val();
        var mail  = $('#mail').val();
        var pass  = $('#pass').val();
        var pass2 = $('#pass2').val();
        
        var result = true;
        /*/tout ceci permet de verifier si les champs sont vide
         et colorie en rouge pour montrer qu'il y a une erreur
        */
        if(name=="") {
            $('#name').parent().addClass('is-focused erreur');
            result = false;
        }
        
        if(mail == "") {
            $('#mail').parent().addClass('is-focused erreur');
            result = false;
        }
        
        if(pass2 == "") {
            $('#pass2').parent().addClass('is-focused erreur');
            result = false;
        }
        
        
         if(pass == "") {
            $('#pass').parent().addClass('is-focused erreur');
            result = false;
        }
        
        return result;
        
    });
    /*enlever la coleur rouge si different de vide*/
    $('#name').keyup(function(){
        if ($('#name').val() == " ") {
            if (name==" ") {
                        $('#name').parent().addClass('is-focused erreur');
               }else{
                $('#name').parent().removeClass('erreur');
                
               }
        }
    });
    
    $('#mail').keyup(function(){
        if($('#mail').val() == " ") {
            if(name==" ") {
                        $('#mail').parent().addClass('is-focused erreur');
               }else{
                $('#mail').parent().removeClass('erreur');
               }
        }
    });
    
    $('#pass').keyup(function(){
        if($('#pass').val()== " ") {
            if (name=="") {
                        $('#name').parent().addClass('is-focused erreur');
               }else{
                $('#pass').parent().removeClass('erreur');
               }
        }
    });
    
    $('#pass2').keyup(function(){
        if($('#pass2').val()==" ") {
            if(name=="") {
                        $('#pass2').parent().addClass('is-focused erreur');
               }else{
                $('#pass2').parent().removeClass('erreur');
               }
        }
    });

    
})