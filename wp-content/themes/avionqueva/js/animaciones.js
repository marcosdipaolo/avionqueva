jQuery(document).ready(function () {

   // Variables fuera de la función scroll

   var scrollTop = jQuery(window).scrollTop();
   var windowHeight = jQuery(window).height();
   var scrollBottom = scrollTop + windowHeight;
   var objectOffset;

   // funciones 

   ////////////   FADE IN     ///////////////////////

   jQuery.fn.scrollFadeIn = function (speed) {
      speed = typeof speed !== 'undefined' ? speed : 1000;
      return this.each(function () {
         objectOffset = jQuery(this).offset();
         if (!jQuery(this).hasClass('hiddenFade')) {
            jQuery(this).css('opacity', 0).addClass('hiddenFade');
         }
         if (objectOffset.top < scrollBottom) {
            if (!jQuery(this).hasClass('listoFade')) {
               jQuery(this).animate({
                  'opacity': 1
               }, speed, function () {
                  jQuery(this).addClass('listoFade');
               });
            }
         }
      });
   };
   ///////////////// FIN FADE IN    ///////////////////

   ///////////////   SLIDE IN RIGHT ///////////////////

   jQuery.fn.scrollSlideIn = function (speed, direction, margin, easing) { // direction = 'right' or 'left'
      speed = typeof speed !== 'undefined' ? speed : 1000;
      direction = typeof direction !== 'undefined' ? direction : 'right';
      margin = typeof margin !== 'undefined' ? margin : 2000;
      easing = typeof easing !== 'undefined' ? easing : 'jswing';
      return this.each(function () {
         objectOffset = jQuery(this).offset();
         if (!jQuery(this).hasClass('hiddenSlide')) {
            if (direction === 'left') {
               jQuery(this).css({
                  position: 'relative',
                  right: margin + 'px'
               });
            } else {
               jQuery(this).css({
                  position: 'relative',
                  right: (margin * -1) + 'px'
               });
            }
            jQuery(this).addClass('hiddenSlide');
         }
         if (objectOffset.top < scrollBottom) {
            if (!jQuery(this).hasClass('listoSlide')) {
               jQuery(this).animate({
                  right: 0
               }, speed, easing, function () {
                  jQuery(this).addClass('listoSlide');
               });
            }
         }
      });
   };
   ////////////////// FIN  SLIDE IN RIGHT ////////////////

   //////// La portada no puede estar sujeta a scroll porque aparece "above the fold" 
   jQuery('section.post-portada').animate({
      'right': 0
   }, 500);

    /////////// llamados a las funciones FUERA DE SCROLL///////////////

      // scrollFadeIn(velocidad)
      // scrollSlideIn(velocidad, dirección, margen, easing)

   var animaciones = function(){      
      // jQuery('.footer').scrollFadeIn();
      // jQuery('article.post').scrollSlideIn(500, 'left', 1000, 'easeOutQuad');
      // jQuery('div.sidebar-widget-area').scrollSlideIn(500, 'right', 500);
      // jQuery('div.un-evento').scrollFadeIn();
      // jQuery('div.main-banner').scrollFadeIn();
    //  jQuery('div.uk-card-media-left, div.uk-card-media-top').scrollFadeIn(1500);
   };
   animaciones(); // llamamos las animaciones fuera de la fn scroll

    ///////////////  SCROLL FUNCTION    ////////////////


   jQuery(window).scroll(function () {

      // variables dentro de la fn scroll

      scrollTop = jQuery(window).scrollTop();
      windowHeight = jQuery(window).height();
      scrollBottom = scrollTop + windowHeight;

      /////////// llamados a las funciones DENTRO DE SCROLL ///////////////

   animaciones(); // y dentro de la fn scroll
      

   }); // FIN DE SCROLL 


   ///// scrollReveal js //////////
  window.sr = ScrollReveal();
  sr.reveal('div.todo article.post', { duration: 500, origin: 'left', scale: 0.8, easing: 'ease-in-out' });
  sr.reveal('div.relacionados', { duration: 500, origin: 'left', scale: 0.8, easing: 'ease-in-out' });
  sr.reveal('div.sidebar-widget-area', { duration: 500, origin: 'right', scale: 0.8, easing: 'ease-in-out' });
  // sr.reveal('div.main-banner' , {easing: 'ease-in-out'});
  // sr.reveal('div.un-evento' , {easing: 'ease-in-out'}); 
  // sr.reveal('.footer-widget-area' , {easing: 'ease-in-out'}); 
  // sr.reveal('.image-full-post' , {easing: 'ease-in-out'}); 
  sr.reveal('div.contenedor-nosotros>.uk-card' , {easing: 'ease-in-out'}); 
  ////////////////////////////////

});