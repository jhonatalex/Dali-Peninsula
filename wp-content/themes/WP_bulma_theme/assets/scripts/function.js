$(document).ready(function () {

    var URLactual = window.location;



   // galeria Depto tipo a
   $('#galeria-piloto-tipo-a').slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    nextArrow:
       '<button class="cotizar-1 f_bozon_r slick-next">></button> ',
    prevArrow:
       '<button class="cotizar-1 f_bozon_r slick-prev""><</button>'
    });

   

   



     function changeTextPisos(text1,text2){
        $('#text-pisos').text(text1)
        $('#text-pisos-deptos').text(text2)
     }
  


  
    $('#id-sun').on('click', function () {

        $('#id-moon').removeClass('active')
        $('#perspectiva').removeClass('perspectiva-noche')
        $('#perspectiva').addClass('perspectiva-dia')
        $(this).addClass('active')

    });   

    $('#id-moon').on('click', function () {
        $('#id-sun').removeClass('active')
        $('#perspectiva').removeClass('perspectiva-dia')
        $('#perspectiva').addClass('perspectiva-noche')
        $(this).addClass('active')
    });



   

    $('#zoom-galery').on('click', function () {
        $('.z').toggleClass('zoom');

    });







    // galeria de plantas
    $('#plantas').slick({
       infinite: true,
       slidesToShow: 1,
       slidesToScroll: 1,
       arrows: true,
       nextArrow:
          `<a ><img width="20px" class="slick-next" src= "${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/flecha-derecha.png"></img></a>`,
       prevArrow:
          `<a ><img width="20px" class="slick-prev" src="${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/flecha-izquierda.png"></img></a>`
    });
 


 
    // cambiamos datos, según slider
    $("#plantas").on("afterChange", function (
       event,
       slick,
       currentSlide,
       nextSlide
    ) {
       UdateText(currentSlide);
    });
 
    var filtro = false;
 
    $(".btncase").on('click', function () {
 
       // control de botones
       $('.btncase').addClass("is-warning");
       $('.btncase').removeClass("is-success");
       $('.disponibilidad').addClass('is-hidden');
 
       var id_tag = $(this).data('attribute');
       $('#dis-' + id_tag).removeClass('is-hidden');
 
 
       switch (id_tag) {
          case "2dorm":
             accionesCase('.2dorm');
             UdateText(0);
             break;
          case "3dorm":
             accionesCase('.3dorm');
             UdateText(2);
             break;
          case "4dorm":
             accionesCase('.4dorm');
             UdateText(6);
             break;
 
       }
 
       $(this).removeClass("is-warning");
       $(this).addClass("is-success");
 
    });
 
    // funcion ocultar slider
    function accionesCase(tipo) {
 
 
       $('#plantas').slick('slickUnfilter').slick('slickFilter', tipo).on("afterChange", function (
          event,
          slick,
          currentSlide,
          nextSlide
       ) {
 
 
          switch (currentSlide) {
             case 0:
                if (tipo == '.2dorm') { currentSlide = 0; }
                if (tipo == '.3dorm') { currentSlide = 2; }
                if (tipo == '.4dorm') { currentSlide = 7; }
                break;
 
             case 1:
                if (tipo == '.2dorm') { currentSlide = 1; }
                if (tipo == '.3dorm') { currentSlide = 3; }
                if (tipo == '.4dorm') { currentSlide = 8; }
                break;
 
             case 2:
                if (tipo == '.3dorm') { currentSlide = 4; }
                if (tipo == '.4dorm') { currentSlide = 9; }
                break;
 
             case 3:
                if (tipo == '.3dorm') { currentSlide = 5; }
                if (tipo == '.4dorm') { currentSlide = 10; }
                break;
 
             case 4:
                if (tipo == '.3dorm') { currentSlide = 6; }
                break;
 
          }
 
          UdateText(currentSlide);
 
       });
 
 
 
       switch (tipo) {
          case '.2dorm':
             $('#plantas').slick('slickGoTo', 0); break;
 
          case '.3dorm':
             $('#plantas').slick('slickGoTo', 2); break;
 
          case '.4dorm':
             $('#plantas').slick('slickGoTo', 6); break;
 
       }
 
 
 
 
    }
 
    /*
    $('.z').zoom({
       magnify: 1.3
    });
 */
 

    // cargar texto
    function textoPlanta(planta, tipologia, interior, terraza, total, piso) {
       $("#t_depto").text(planta);
       $("#t_tipologia").text(tipologia);
       $("#t_terrazas").text(terraza);
       $("#t_mutil").text(interior);
       $("#t_m2").text(total);
       $("#t_piso").text(piso);
    }
 
    // funcion actualiza texto
    function UdateText(currentS) {
       switch (currentS) {
          // piso 2 a 13
          case 0:
             textoPlanta("C", "2D - 2B", "67,72", "17,00", "84,72", "Piso 2 al 13");
             $("#esquicio").attr("src", `${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/planta-c/PLANO-PLANTA-TIPO-C.png`);
             break;
          case 1:
             textoPlanta("B", "2D - 2B", "86,60", "12,38", "98,98", "Piso 2 al 13");
             $("#esquicio").attr("src", `${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/planta-b/esq-TIPO-B.png`);
             break;
          case 2:
             textoPlanta("A", "3D - 3B", "99,71", "13,54", "113,25", "Piso 2 al 13");
             $("#esquicio").attr("src", `${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/planta-a/esq-TIPO-A.png`);
             break;
          // piso 14
          case 3:
             textoPlanta("A1", "3D - 3B", "120,44", "31,27", "151,71", "Piso 14");
             $("#esquicio").attr("src", `${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/planta-a/esq-A2-1.png`);
             break;
          case 4:
             textoPlanta("B1", "3D - 3B", "96,39", "25,30", "121,69", "Piso 14");
             $("#esquicio").attr("src", `${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/planta-b/esq-B2-1.png`);
             break;
          // piso 15
          case 5:
             textoPlanta("A1", "3D - 3B", "120,44", "24,23", "144,67", "Piso 15");
             $("#esquicio").attr("src", `${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/planta-a/esq-A2-2.png`);
             break;
          case 6:
             textoPlanta("B1", "3D - 3B", "96,39", "15,11", "111,50", "Piso 15");
             $("#esquicio").attr("src", `${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/planta-b/esq-B2-2.png`);
             break;
          // piso 16
          case 7:
             textoPlanta("A2", "4D - 4B", "120,44", "24,23", "144,67", "Primer Nivel - Piso 16");
             $("#esquicio").attr("src", `${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/planta-a/esq-A2-3.png`);
             break;
          // piso 17
          case 8:
             textoPlanta("A2", "TERRAZA PRIVADA", "15,90", "38,02", "53,92", "Segundo Nivel - Piso 17");
             $("#esquicio").attr("src", `${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/planta-a/esq-A2-3-TP.png`);
             break;
          // piso 16
          case 9:
             textoPlanta("B2", "4D - 3B", "96,39", "15,11", "111,50", "Primer Nivel - Piso 16");
             $("#esquicio").attr("src", `${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/planta-b/esq-B2-3.png`);
             break;
          // piso 17
          case 10:
             textoPlanta("B2", "TERRAZA PRIVADA", "18,41", "49,04", "67,45", "Segundo Nivel - Piso 17");
             $("#esquicio").attr("src", `${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/planta-b/esq-B2-3-TP.png`);
             break;
          default:
             break;
       }
    }
 
    // te llamamos
    $("#tellamamos").validate({
       rules: {
          llamada: {
             required: true,
          }
       },
       messages: {
          llamada: "Por favor ingrese un teléfono.",
       },
 
       submitHandler: function (form) {
          let datosFormulario = new FormData(form);
 
          $.ajax({
             url: "assets/php/contacto.php",
             method: "POST",
             data: datosFormulario,
             cache: false,
             contentType: false,
             processData: false,
             beforeSend: function () { },
             success: function (response) {
                if (response == "success") {
                   window.dataLayer = window.dataLayer || [];
                   window.dataLayer.push({
                      event: "envioTelefono"
                   });
 
                   $.fancybox.open({
                      src: '<div class="mensaje-form" style="background: rgba(0,0,0,0);color: #FFF"><h2 class="has-text-centered">Envío Exitoso</h2><p>Pronto estaremos en contacto</p></div>',
                      type: "html",
                      opts: {
                         afterClose: function () {
                            $("#form-cotizar").trigger("reset");
                         },
                         smallBtn: false
                      }
                   });
                   $("#tellamamos").trigger("reset");
                   // window.dataLayer = window.dataLayer || [];
                   // dataLayer.push ({
                   //     'event' : 'formulario',
                   //     'Origen' : 'Huantajaya'
                   // })
                } else {
                   $.fancybox.open({
                      src: '<div class="mensaje-form" style="background: rgba(0,0,0,0);color: #FFF"><h2 class="has-text-centered">Error</h2><p>Lo sentimos, por favor intentalo nuevamente.</p></div>',
                      type: "html",
                      opts: {
                         afterClose: function () {
                            $("#tellamamos").trigger("reset");
                         },
                         smallBtn: false
                      }
                   });
                   $("#tellamamos").trigger("reset");
                }
             }
          });
       }
    });
 
    // inscripcion
   // $("#inscripcion")
 
    $('#inscripcion').validate({
 
       rules: {
          nombre: "required",
          rut: {
             validateRut: true,
             required: true
          },
          telefono: "required",
          email: {
             email: true,
             required: true
          },
          sector: "required",
          canal: "required",
 
       },
       messages: {
          nombre: "Por favor ingrese su nombre",
          rut: {
             validateRut: "Por favor ingrese un rut válido",
             required: "Por favor ingrese un rut"
          },
          telefono: "Por favor ingrese un teléfono",
          email: {
             email: "Por favor ingrese un email válido",
             required: "Por favor ingrese un email"
          },
          sector: "Seleccione como llego a la pagina ",
          canal: "Seleccione  por donde  quiere ser contactado",
 
       },
       submitHandler: function (form) {
          let datosFormulario = new FormData(form);
          $.ajax({
             url: "assets/php/contacto1.php",
             method: "POST",
             data: datosFormulario,
             cache: false,
             contentType: false,
             processData: false,
             beforeSend: function () {
                $.fancybox.open({
                   src: '<div class="mensaje-form" style="background: rgba(0,0,0,0);color: #FFF"><h2 class="has-text-centered">Enviando...</h2></div>',
                   type: "html",
                   opts: {
                      modal: true,
                      smallBtn: false,
                      afterClose: function () {
                         setTimeout(() => {
                            $.fancybox.close();
                         }, 2000);
                      }
                   }
                });
             },
             success: function (response) {
                console.log(response[1])
                if (response[0]) {
 
                   window.dataLayer = window.dataLayer || [];
                   window.dataLayer.push({
                      event: "envioFormulario"
                   });
 
                   $.fancybox.open({
                      src: '<div class="mensaje-form" style="background: rgba(0,0,0,0);color: #FFF"><h2 class="has-text-centered">Mensaje enviado.</h2><p>Pronto estaremos en contacto</p></div>',
                      type: "html",
                      opts: {
                         closeExisting: true,
                         modal: true,
                         afterLoad: function () {
                            console.log('cerrar fancy')
                            setTimeout(() => {
                               $.fancybox.close();
 
                            }, 2000);
                         }
                      }
                   });
                  $("#inscripcion").trigger("reset");
                } else {
                   $.fancybox.open({
                      src: '<div class="mensaje-form" style="background: rgba(0,0,0,0);color: #FFF"><h2 class="has-text-centered">Error</h2><p>Lo sentimos, por favor intentalo nuevamente.</p></div>',
                      type: "html",
                      opts: {
                         closeExisting: true,
                         modal: true,
                         afterLoad: function () {
                            setTimeout(() => {
                               $.fancybox.close();
                            }, 3000);
                         }
                      }
                   });
                   $("#inscripcion").trigger("reset");
                }
             },
             error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("some error " - errorThrown);
             }
          });
       }
    });
 
   
    var $navbarBurgers = Array.prototype.slice.call(
        document.querySelectorAll(".navbar-burger"),
        0
      );
    
      // Check if there are any navbar burgers
      if ($navbarBurgers.length > 0) {
        // Add a click event on each of them
        $navbarBurgers.forEach(function ($el) {
          $el.addEventListener("click", function () {
            // Get the target from the "data-target" attribute
            var target = $el.dataset.target;
            var $target = document.getElementById(target);
    
            // Toggle the class on both the "navbar-burger" and the "navbar-menu"
            $el.classList.toggle("is-active");
            $target.classList.toggle("is-active");
          });
        });
      }
    




jQuery('#buttom-piloto-virtual').click(function() {
    jQuery('#video-piloto-virtual').addClass('is-active');
});
 
jQuery('.modal-close').click(function() {
    jQuery('#video-piloto-virtual').removeClass('is-active');
});
 
jQuery('#buttom-cinemagrah').click(function() {
    jQuery('#video-cinema').addClass('is-active');
});
 
jQuery('.modal-close').click(function() {
    jQuery('#video-cinema').removeClass('is-active');
});



var urls=[];

$(".url-zoom").each(function(index) {
    urls.push($(this).attr('src'))
});

var result = urls.filter((item,index)=>{
  return urls.indexOf(item) === index;
})




$('#zoom-galery').on('click', function () {
    jQuery('#zoom-galeria-360').addClass('is-active');

    var currentSlide = $('#galeria-piloto-tipo-a').slick('slickCurrentSlide');

    
    jQuery('#iframe-image').attr('src',`${result[currentSlide]}`);


});
 
jQuery('.modal-close').click(function() {
    jQuery('#zoom-galeria-360').removeClass('is-active');
});


//SENCIBILITY GALERIA


$('#sector-ventanas').hover(function() {
    $('#text-ventanas').toggleClass('is-hidden');
})

$('#sector-piso').hover(function() {
    $('#text-piso').toggleClass('is-hidden');
})

$('#sector-usb').hover(function() {
    $('#text-usb').toggleClass('is-hidden');
})



$('#sector-ventanas-2').hover(function() {
    $('#text-ventanas-2').toggleClass('is-hidden');
})

$('#sector-piso-2').hover(function() {
    $('#text-piso-2').toggleClass('is-hidden');
    
})



$('.ventana-3').hover(function() {
    $('#text-ventana-terraza').toggleClass('is-hidden');
});

$('.piso-3').hover(function() {
    $('#text-piso-terraza').toggleClass('is-hidden');
});

$('.baranda-3').hover(function() {
    $('#text-baranda-terraza').toggleClass('is-hidden');

});


$(".hover-cocina").hover(function () {
 
   let index = $(this).attr("id");
 
    switch (index) {
       case "0": $("#text-cocina-refri").toggleClass('is-hidden')
                                        .css("margin-top", " -2.1%")
                                        .css("margin-left", "182px");
          
       break;
       case "1":$("#text-cocina-grifo").toggleClass('is-hidden')
                                        .css("margin-top", " -2.0%")
                                        .css("margin-left", "353px");
       break;
       case "2":$("#text-cocina-tope").toggleClass('is-hidden')
                                        .css("margin-top", " -2.0%")
                                        .css("margin-left", "191px");
           
       break;
       case "3":$("#text-cocina-lava").toggleClass('is-hidden')
                                        .css("margin-top", " -2%")
                                        .css("margin-left", "248px");
         
          
       break;
       case "4":$("#text-cocina-mueble").toggleClass('is-hidden')
                                        .css("margin-top", " -2.55%")
                                        .css("margin-left", "288px");
 
       break;
       case "5":$("#text-cocina-campana").toggleClass('is-hidden')
                                        .css("margin-top", " -2.1%")
                                        .css("margin-left", "391px");
                        
        break;
       case "6":$("#text-cocina-horno").toggleClass('is-hidden')
                                        .css("margin-top", " -2.05%")
                                        .css("margin-left", "218px");
                                                 
       break;
 
 
       case "7":$("#text-cocina-encimera").toggleClass('is-hidden')
                                        .css("margin-top", " -2.05%")
                                        .css("margin-left", "274px");
 
 
       break;
       case "8":$("#text-cocina-mueble2").toggleClass('is-hidden')
                                        .css("margin-top", " -1.5%")
                                        .css("margin-left", "299px");
 
       break;
       case "9":$("#text-cocina-cubierto").toggleClass('is-hidden')
                                           .css("margin-top", " -1.68%")
                                           .css("margin-left", "322px");
 
 
       break;
       case "10":$("#text-cocina-olla").toggleClass('is-hidden')
                                     .css("margin-top", " -1.28%")
                                     .css("margin-left", "519px");
                      
 
       break;
       default:
          break;
    }
 
   // $(this).removeClass("his-hidden");
 });
 
 $(".hover-cocina-piloto").hover(function () {
 
   let index = $(this).attr("id");
 
    switch (index) {
       case "11": $("#text-cocina-mIta").toggleClass('is-hidden')
                                        .css("margin-top", " -2.15%")
                                        .css("margin-left", "197px");    
       break;
       case "12":$("#text-cocina-campTeka").toggleClass('is-hidden')
                                        .css("margin-top", " -1.8%")
                                        .css("margin-left", "229px");
       break;
       case "13":$("#text-cocina-salTop").toggleClass('is-hidden')
                                        .css("margin-top", " -1.75%")
                                        .css("margin-left", "212px");
           
       break;
       case "14":$("#text-cocina-cubCoc").toggleClass('is-hidden')
                                        .css("margin-top", " -1.5%")
                                        .css("margin-left", "203px");
         
          
       break;
       case "15":$("#text-cocina-encVitro").toggleClass('is-hidden')
                                        .css("margin-top", " -1.75%")
                                        .css("margin-left", "223px");
 
       break;
       case "16":$("#text-cocina-cajonCub").toggleClass('is-hidden')
                                        .css("margin-top", " -1.1%")
                                        .css("margin-left", "327px");
                        
        break;
       case "17":$("#text-cocina-mIta2").toggleClass('is-hidden')
                                        .css("margin-top", " -0.95%")
                                        .css("margin-left", "179px");
                                                 
       break;
 
 
       case "18":$("#text-cocina-condimentero").toggleClass('is-hidden')
                                        .css("margin-top", " -0.58%")
                                        .css("margin-left", "195px");
 
 
       break;
       case "19":$("#text-cocina-cajonOlla").toggleClass('is-hidden')
                                        .css("margin-top", " -0.6%")
                                        .css("margin-left", "281px");
 
       break;
       case "20":$("#text-cocina-espLava").toggleClass('is-hidden')
                                           .css("margin-top", " -1.1%")
                                           .css("margin-left", "382px");
 
 
       break;
       case "21":$("#text-cocina-griferia").toggleClass('is-hidden')
                                     .css("margin-top", " -1.9%")
                                     .css("margin-left", "514px");
                      
 
       break;

       case "22":$("#text-cocina-espRefri").toggleClass('is-hidden')
                                     .css("margin-top", " -2.4%")
                                     .css("margin-left", "449px");
                      
 
       break;

       case "23":$("#text-cocina-hornoMicro").toggleClass('is-hidden')
                                     .css("margin-top", " -2.2%")
                                     .css("margin-left", "372px");
                      
 
       break;
       default:
          break;
    }
 
 
   // $(this).removeClass("his-hidden");
 
 });




$('.area-living-puerta').hover(function() {
   $('#text-living-puerta').toggleClass('is-hidden');
});

$('.area-living-separador').hover(function() {
   $('#text-living-separador').toggleClass('is-hidden');

});




$('.area-banop-lavamanos').hover(function() {
   $('#text-banop-lavamanos').toggleClass('is-hidden');
});

$('.area-banop-puerta').hover(function() {
   $('#text-banop-puerta').toggleClass('is-hidden');

});
$('.area-banop-ducha').hover(function() {
   $('#text-banop-ducha').toggleClass('is-hidden');
});



$('.area-bano-lavamanos').hover(function() {
   $('#text-bano-lavamanos').toggleClass('is-hidden');
});

$('.area-bano-puerta').hover(function() {
   $('#text-bano-puerta').toggleClass('is-hidden');

});
$('.area-bano-ducha').hover(function() {
   $('#text-bano-ducha').toggleClass('is-hidden');
});



//Navbar fixed
let distance = $("#site-navigation").offset().top;

$(window).scroll(function () {
   if ($(this).scrollTop() >= distance) {
      $("#site-navigation").addClass("is-fixed-top");
   } else {
      $("#site-navigatione").removeClass("is-fixed-top");
   }
});



// Seleccion del menude navegacion

$(".navbar-item").on('click', function () {
 
    // control de botones
    $('.navbar-item').addClass("menu-desactivado");
    $('.navbar-item').removeClass("menu-activado");
    //$('.disponibilidad').addClass('is-hidden');

  

    $(this).removeClass("menu-desactivado");
    $(this).addClass("menu-activado");

});



$(".btn-piso").on('click', function () {
 
    // control de botones
    $('.btn-piso').addClass("button-gray");
    $('.btn-piso').removeClass("button-blue");
    //$('.disponibilidad').addClass('is-hidden');

    var id_tag = $(this).data('attribute');
    //$('#dis-' + id_tag).removeClass('is-hidden');


    switch (id_tag) {
       case "2-13":
            changeTextPisos("PLANTAS PISOS 2 AL 13","SOLO 3 DEPTOS. POR PISO");
            $('#imagen-piso').attr("src",`${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/piso_2_13.png`)
            $('.imagen-bottom-pisos').attr("src",`${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/text_bottom.png`)
          break;
       case "14-15":
            changeTextPisos("PLANTAS PISO 14","SOLO 2 DEPTOS. POR PISO");
            
            console.log(URLactual);
            $('#imagen-piso').attr("src",`${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/piso_14.png`)
            $('.imagen-bottom-pisos').attr("src",`${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/text_bottom2.png`)
          break;
       case "pent":
            changeTextPisos("PENTHOUSES","");
            $('#imagen-piso').attr("src",`${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/piso_14.png`)
            $('.imagen-bottom-pisos').attr("src",`${URLactual.pathname}/wp-content/themes/WP_bulma_theme/assets/img/text_bottom2.png`)
          break;

    }

    $(this).removeClass("button-gray");
    $(this).addClass("button-blue");

});






 }); //final documento ready
 
 

 