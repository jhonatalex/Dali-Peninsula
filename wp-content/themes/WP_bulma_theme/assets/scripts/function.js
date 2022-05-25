$(document).ready(function () {

    // galeria de plantas
    $('#plantas').slick({
       infinite: true,
       slidesToShow: 1,
       slidesToScroll: 1,
       arrows: true,
       nextArrow:
          '<a ><img width="20px" class="slick-next" src="../../assets/img/flecha-derecha.png"></img></a>',
       prevArrow:
          '<a ><img width="20px" class="slick-prev" src="../../assets/img/flecha-izquierda.png"></img></a>'
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
 
    $('.z').zoom({
       magnify: 1.3
    });
 
 
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
             $("#esquicio").attr("src", "assets/img/planta-c/PLANO-PLANTA-TIPO-C.png");
             break;
          case 1:
             textoPlanta("B", "2D - 2B", "86,60", "12,38", "98,98", "Piso 2 al 13");
             $("#esquicio").attr("src", "assets/img/planta-b/esq-TIPO-B.png");
             break;
          case 2:
             textoPlanta("A", "3D - 3B", "99,71", "13,54", "113,25", "Piso 2 al 13");
             $("#esquicio").attr("src", "assets/img/planta-a/esq-TIPO-A.png");
             break;
          // piso 14
          case 3:
             textoPlanta("A1", "3D - 3B", "120,44", "31,27", "151,71", "Piso 14");
             $("#esquicio").attr("src", "assets/img/planta-a/esq-A2-1.png");
             break;
          case 4:
             textoPlanta("B1", "3D - 3B", "96,39", "25,30", "121,69", "Piso 14");
             $("#esquicio").attr("src", "assets/img/planta-b/esq-B2-1.png");
             break;
          // piso 15
          case 5:
             textoPlanta("A1", "3D - 3B", "120,44", "24,23", "144,67", "Piso 15");
             $("#esquicio").attr("src", "assets/img/planta-a/esq-A2-2.png");
             break;
          case 6:
             textoPlanta("B1", "3D - 3B", "96,39", "15,11", "111,50", "Piso 15");
             $("#esquicio").attr("src", "assets/img/planta-b/esq-B2-2.png");
             break;
          // piso 16
          case 7:
             textoPlanta("A2", "4D - 4B", "120,44", "24,23", "144,67", "Primer Nivel - Piso 16");
             $("#esquicio").attr("src", "assets/img/planta-a/esq-A2-3.png");
             break;
          // piso 17
          case 8:
             textoPlanta("A2", "TERRAZA PRIVADA", "15,90", "38,02", "53,92", "Segundo Nivel - Piso 17");
             $("#esquicio").attr("src", "assets/img/planta-a/esq-A2-3-TP.png");
             break;
          // piso 16
          case 9:
             textoPlanta("B2", "4D - 3B", "96,39", "15,11", "111,50", "Primer Nivel - Piso 16");
             $("#esquicio").attr("src", "assets/img/planta-b/esq-B2-3.png");
             break;
          // piso 17
          case 10:
             textoPlanta("B2", "TERRAZA PRIVADA", "18,41", "49,04", "67,45", "Segundo Nivel - Piso 17");
             $("#esquicio").attr("src", "assets/img/planta-b/esq-B2-3-TP.png");
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
 
   

 
 
 }); //final documento ready
 
 
 
 //  Methods
 $.validator.addMethod("validateRut", function () {
    if (validateR($("#rut")
       .val())) {
       let rutFormateado = format($("#rut")
          .val());
       $("#rut")
          .val(rutFormateado);
       return true;
    } else {
       return false;
    }
 });
 
 
 //Función para Rut
 function clean(elrut) {
    return typeof elrut === "string" ? elrut.replace(/^0+|[^0-9kK]+/g, "")
       .toUpperCase() : "";
 }
 
 function validateR(elrut) {
    if (typeof elrut !== "string") {
       return false;
    }
    if (!/^0*(\d{1,3}(\.?\d{3})*)-?([\dkK])$/.test(elrut)) {
       return false;
    }
 
    elrut = clean(elrut);
 
    var t = parseInt(elrut.slice(0, -1), 10);
    var m = 0;
    var s = 1;
 
    while (t > 0) {
       s = (s + (t % 10) * (9 - (m++ % 6))) % 11;
       t = Math.floor(t / 10);
    }
 
    var v = s > 0 ? "" + (s - 1) : "K";
    return v === elrut.slice(-1);
 }
 
 function format(elrut) {
    elrut = clean(elrut);
 
    var result = elrut.slice(-4, -1) + "-" + elrut.substr(elrut.length - 1);
    for (var i = 4; i < elrut.length; i += 3) {
       result = elrut.slice(-3 - i, -i) + "." + result;
    }
 
    return result;
 }
 
 //Navbar fixed
 let distance = $("#nav").offset().top;
 
 $(window).scroll(function () {
    if ($(this).scrollTop() >= distance) {
       $("#nav").addClass("is-fixed-top");
    } else {
       $("#nav").removeClass("is-fixed-top");
    }
 });
 
 
 