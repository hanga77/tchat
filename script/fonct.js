$(document).ready(function(){
    
        $('#Titre').focus();
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
        var titre  = $('#Titre').val();
        var contenu  = $('#contenu').val();
        
        
        var result = true;
        /*/tout ceci permet de verifier si les champs sont vide
         et colorie en rouge pour montrer qu'il y a une erreur
        */
        if(titre=="") {
            $('#Titre').parent().addClass('is-focused erreur');
            result = false;
        }
        
        if(contenu == "") {
            $('#contenu').parent().addClass('is-focused erreur');
            result = false;
        }
        
        
        return result;
        
    });
    /*enlever la coleur rouge si different de vide*/
    $('#Titre').keyup(function(){
        if ($('#Titre').val() == " ") {
            if (titre==" ") {
                        $('#Titre').parent().addClass('is-focused erreur');
               }else{
                $('#Titre').parent().removeClass('erreur');
                
               }
        }
    });
    
    $('#contenu').keyup(function(){
        if($('#contenu').val() == " ") {
            if(name==" ") {
                        $('#contenu').parent().addClass('is-focused erreur');
               }else{
                $('#contenu').parent().removeClass('erreur');
               }
        }
    });
    
   
    
   
    
});