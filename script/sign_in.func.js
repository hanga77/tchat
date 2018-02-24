$(document).ready(function(){
    
    
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
        
        
        $('#logForm').submit(function(){
            var name = $('#name').val();
            var pass =$('#pass').val();
            
            var result = true;
            
            if(name == '') {
                $('#name').parent().addClass('is-focused erreur');
                result = false;
            }
            
        
            if(pass == '') {
                $('#pass').parent().addClass('is-focused erreur');
                result = false;
            }
            return result;
        });
        
        $('#name').keyup(function(){
            if($('#name').val() == '') {
                $('#name').parent().addClass('is-focused erreur');
            }else{
                $('#name').parent().removeClass('erreur');
            }
        });
        
         $('#pass').keyup(function(){
            if($('#pass').val() == '') {
                $('#pass').parent().addClass('is-focused erreur');
            }else{
                $('#pass').parent().removeClass('erreur');
            }
        });  
});