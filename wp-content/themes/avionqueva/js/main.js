jQuery(document).ready(function () {

    var winWidth = jQuery(window).width();
    var winHeight = jQuery(window).height();

    // HACIENDO EL SLIDER RESPONSIVE
    var slider = jQuery('div#carouselExampleIndicators');
    function sliderResponsive() {
        
        if (winWidth > 890) {
            slider.css({
               'height': ((winWidth - 20) * 9 / 16) - 60 - 100,
                'display': 'block'
            });
        } else {
            slider.css('display', 'none');
        }
            // console.log(`alto ventana (menos 60): ${winHeight - 60}, ancho ventana: ${winWidth}`);
            // console.log(`alto slider: ${jQuery('div#carouselExampleIndicators').height()}, ancho slider: ${jQuery('div#carouselExampleIndicators').width()}`);
    //     } else if (winWidth > 1150 && winWidth < 1249) {
    //         jQuery('div#carouselExampleIndicators').css({
    //             'height': '600px',
    //             'display': 'block'
    //         });
    //     } else if (winWidth > 900 && winWidth < 1249) {
    //         jQuery('div#carouselExampleIndicators').css({
    //             'height': '500px',
    //             'display': 'block'
    //         });
    //     } else if (winWidth > 750 && winWidth < 899) {
    //         jQuery('div#carouselExampleIndicators').css({
    //             'height': '400px',
    //             'display': 'block'
    //         });
    //     } else if (winWidth > 550 && winWidth < 749) {
    //         jQuery('div#carouselExampleIndicators').css({
    //             'height': '300px',
    //             'display': 'block'
    //         });
    //     } else if (winWidth < 549) {
    //         jQuery('div#carouselExampleIndicators').css('display', 'none');
    //     }
    }
    sliderResponsive();

    // ALTURA ARTICLE BLOG

    function articleHeigth() {
        if (winWidth > 1300) {
            jQuery('article.post div.uk-card').css('height', 545);
            jQuery('article.post div.uk-card-media-top').css('height', 320); 
        }
        else if (winWidth > 1048 && winWidth <= 1300 ) {
            jQuery('article.post div.uk-card').css('height', 297 + (winWidth * 19 / 100));
            jQuery('article.post div.uk-card-media-top').css('height', winWidth * 19 / 100 + 72);
        } else if (winWidth > 625 && winWidth <= 1048) {
            jQuery('article.post div.uk-card').css('height', 160 + (winWidth * 40 / 100));
            jQuery('article.post div.uk-card-media-top').css('height', -60 + (winWidth * 40 / 100));
        } else if (winWidth > 480 && winWidth <= 625) {
            jQuery('article.post div.uk-card').css('height', 220 + (winWidth * 45 / 100));
            jQuery('article.post div.uk-card-media-top').css('height', 20 + (winWidth * 45 / 100));
        } else if (winWidth <= 480) {
            jQuery('article.post div.uk-card').css('height', 430);
            jQuery('article.post div.uk-card-media-top').css('height', 220);
        }
    }
    articleHeigth();

    // TEMAS DEL MENU RESPONSIVE

    // function menuResp() {
    //     if (winWidth < 1019) {
    //         jQuery('ul#menu-menu-primario').css('display', 'none');
    //         jQuery('ul#menu-menu-primario').addClass('menu2');
    //         jQuery(document).click(function () {
    //             jQuery('ul#menu-menu-primario.menu2').slideUp();
    //         });
    //     } else {
    //         jQuery('ul#menu-menu-primario').css('display', 'inline-block');
    //         jQuery('ul#menu-menu-primario').removeClass('menu2');
    //     }
    // }
    // menuResp();

    // about page
    function aboutPageFirstScreenAndLogo() {
        // first screen

        jQuery('#first-screen').css('height', winHeight);

        // center logo about page
        if (winHeight > 650) {
            jQuery('#logo-about-us').css('margin', (-100 + winHeight * 20 / 100) + 'px auto 0');
        } else {
            jQuery('#logo-about-us').css('margin', '30px auto 0');
        }
    }
    aboutPageFirstScreenAndLogo();

    // animation about page
    // jQuery('#logo-about-us').delay(200).animate({
    //     'right': 0
    // }, 2000);
    // jQuery('#first-screen h1').delay(200).animate({
    //     'left': 0
    // }, 2000);

    // var losotro = ['div.santiago', 'div.karina', 'div.roman', 'div.marcos'];
    // var cvs = ['div#cv0 p', 'div#cv1 p', 'div#cv2 p', 'div#cv3 p'];

    // // animation editors and cv

    // if (winHeight <= 992) {
    //     for (var i = 0; i < losotro.length; i++) {
    //         jQuery(losotro[i]).mouseover(
    //             function () {
    //                 jQuery('div#nosotros .losotro').not(this).stop().animate({
    //                     'opacity': '.5'
    //                 }, 100);
    //             }
    //         );
    //         jQuery(losotro[i]).mouseout(
    //             function () {
    //                 jQuery('div#nosotros .losotro').not(this).stop().animate({
    //                     'opacity': '1'
    //                 }, 100);
    //             }
    //         );
    //         var clickFunction = (function (i) {
    //             return function () {
    //                 jQuery('div.cvs div p').addClass('fired');
    //                 jQuery(cvs[i]).removeClass('fired');
    //                 jQuery('.fired').slideUp(800);
    //                 jQuery(cvs[i]).slideToggle(800);
    //             };
    //         })(i);
    //         jQuery(losotro[i]).click(clickFunction);

    //     }

    // }
    // dimension imagenes single
    function anchoCompleto() {
        var anchoArticulo = jQuery('article.single-post').width();
        jQuery('article.single-post img.ancho_completo')
            .removeAttr('width height')
            .css({
                'margin-left' : -((winWidth - anchoArticulo) / 2),
                'width' : winWidth,
                'max-width' : '100vw' // (por si acaso)
            });
    }
    anchoCompleto();
    // termina imagenes single



    // COMIENZA FUNCION RESIZE

    jQuery(window).resize(function () {
        winHeight = jQuery(window).height();
        winWidth = jQuery(window).width();

        sliderResponsive();
        articleHeigth();
        // menuResp();
        anchoCompleto();
        aboutPageFirstScreenAndLogo();

    }); // TERMINA FUNCION RESIZE


    // jQuery('div#icono').click(function (e) {
    //     jQuery('ul#menu-menu-primario').slideToggle(500, function () {
    //         // jQuery(this).toggleClass('nav-expanded').css('display', '');
    //     });
    //     e.stopPropagation();
    // });

    jQuery('div.gallery').addClass('clearfix');


    // videos
    jQuery('article.single-post p iframe')
        .removeAttr('width height')
        .attr('width', jQuery('article.single-post').width())
        .attr('height', jQuery('article.single-post').width() / 3 * 2)
        .css('margin', '0 auto');

    // animated anchor links

    // jQuery(document).on('click', 'a[href^="#"]', function (event) {
    //     event.preventDefault();
    //     jQuery('html, body').animate({
    //         scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
    //     }, 1000);
    // });

    // inicializo el select y datepicker de materialize
    // jQuery('select').material_select();
    // jQuery('.datepicker').pickadate({
    //     selectMonths: true, // Creates a dropdown to control month
    //     selectYears: 15, // Creates a dropdown of 15 years to control year,
    //     today: 'Today',
    //     clear: 'Clear',
    //     close: 'Ok',
    //     closeOnSelect: false // Close upon selecting a date,
    // });

    // le damos medida al mapa de la página de eventos

    // if (jQuery('div.em-location-map-container')) {
    //     jQuery('div.em-location-map-container').removeAttr('style');
    //     jQuery('div.em-location-map-container').css({
    //         'position' : 'relative',
    //         'height': '300px',
    //         // 'right' : '15px'
    //     });
    // }

    // Seteamos la clase ACTIVE y el aria-expanded TRUE/FALSE a la lista de categorías y ponemos TODO  al principio
    jQuery('ul.em-categories-list li').first().removeAttr('class').attr('aria-expanded', 'false');
    jQuery('ul.em-categories-list').prepend(jQuery('ul.em-categories-list li:contains("Todo")'));
    jQuery('ul.em-categories-list li').first().addClass('uk-active').attr('aria-expanded', 'true');
    jQuery('ul.em-categories-list').append(jQuery('ul.em-categories-list li:contains("Otro")'));
    jQuery('section.uk-switcher').append(jQuery('div.no-todo.otros'));


    // SACAMOS TODO DE LAS CAEGORIAS 

    // jQuery('div.contenido-evento > div > ul > li.Todo').remove();




    // hamburgers
    // Look for .hamburger
    var hamburger = document.querySelector(".hamburger");
    // On click
    hamburger.addEventListener("click", function () {
        // Toggle class "is-active"
        hamburger.classList.toggle("is-active");
        // Do something else, like open/close menu
    });

    //*armamos desplegable en el menu
    jQuery('div.menu-menu-primario-container>ul#menu-menu-primario>li>ul.sub-menu').wrap('<div class="uk-navbar-dropdown"></div>').addClass('uk-nav uk-navbar-dropdown-nav');
    jQuery('div.menu-menu-primario-container>ul#menu-menu-primario').addClass('uk-navbar-nav');
    
}); //termina función jQuery(document).ready()
