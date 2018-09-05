  $(document).ready(function() {

      /* Auf scroll Event warten */
      $(window).scroll( function(){
      
// SERVICES SECTION FADE IN

          $('.services').each( function(i){
              
              var bottom_of_object = $('.services-title').position().top + $('.services-title').outerHeight();
              var bottom_of_window = $(window).scrollTop() + $(window).height();
              
              /* Wenn "object" sichtbar, fade in */
              if( bottom_of_window > bottom_of_object ){
                  
                  $(this).animate({'opacity':'1'},2500);
              }
              
          });

// TECHNOLOGIES SECTION FADE IN

          $('.technologies').each( function(i){
              
            var bottom_of_object = $('.technologies-title').position().top + $('.technologies-title').outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* Wenn "object" sichtbar, fade in */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},2500);
                    
            }
            
        }); 
      
      });
      
  });

  

