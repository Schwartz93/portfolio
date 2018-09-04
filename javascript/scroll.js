$(function(){  // $(document).ready shorthand
    $('.monster').fadeIn('slow');
  });
  
  $(document).ready(function() {

      /* Every time the window is scrolled ... */
      $(window).scroll( function(){
      
// SERVICES SECTION FADE IN
          $('.services').each( function(i){
              
              var bottom_of_object = $('.services-title').position().top + $('.services-title').outerHeight();
              var bottom_of_window = $(window).scrollTop() + $(window).height();
              
              /* If the object is completely visible in the window, fade it it */
              if( bottom_of_window > bottom_of_object ){
                  
                  $(this).animate({'opacity':'1'},2500);
                      
              }
              
          });

// TECHNOLOGIES SECTION FADE IN

          $('.technologies').each( function(i){
              
            var bottom_of_object = $('.technologies-title').position().top + $('.technologies-title').outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},2500);
                    
            }
            
        }); 

// CONTACT SECTION FADE IN
         $('.contact').each( function(i){
              
            var bottom_of_object = $('.contact-title').position().top + $('.contact-title').outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},2500);
                    
            }
            
        }); 
      
      });
      
  });

  

