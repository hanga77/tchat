//chargement du fichier jQuery charger dans l'index
$(document).ready(function(){
    

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

    $('#logprojet').submit(function(){
        // recuperation des input
        var titre  = $('#titre').val();
        var desc  = $('#description').val();
        var person  = $('#personne').val();
        
        
        var result = true;
        /*/tout ceci permet de verifier si les champs sont vide
         et colorie en rouge pour montrer qu'il y a une erreur
        */
        if(titre=="") {
            $('#titre').parent().addClass('is-focused erreur');
            result = false;
        }
        
        if(desc == "") {
            $('#description').parent().addClass('is-focused erreur');
            result = false;
        }
        
        if(person == "") {
            $('#personne').parent().addClass('is-focused erreur');
            result = false;
        }
        
        
        return result;
        
    });
    
    /*enlever la coleur rouge si different de vide*/
    $('#titre').keyup(function(){
        if ($('#titre').val() == " ") {
            if (titre==" ") {
                        $('#titre').parent().addClass('is-focused erreur');
               }else{
                $('#titre').parent().removeClass('erreur');
                
               }
        }
    });
    
    $('#description').keyup(function(){
        if($('#description').val() == " ") {
            if(desc==" ") {
                        $('#description').parent().addClass('is-focused erreur');
               }else{
                $('#description').parent().removeClass('erreur');
               }
        }
    });
    
    $('#personne').keyup(function(){
        if($('#personne').val()== " ") {
            if (person=="") {
                        $('#personne').parent().addClass('is-focused erreur');
               }else{
                $('#personne').parent().removeClass('erreur');
               }
        }
        
    });
    
    
    
    
});