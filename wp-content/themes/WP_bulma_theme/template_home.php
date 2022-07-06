<?php
/**
 * Template Name: Home
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bulma
 */
?>
 
<?php get_header(); ?>

<!-- SECCION 1 HEADER-->
<section class="hero" id="header">
    <div class="hero-body brillo1">
        <div class="container"> 
            <div class="columns is-centered " id="header_title" >
                <div class="column  title_header has-text-centered  ">
                    <h3 class="is-size-6-mobile "><span>DESCUBRE</span> UNA<h2> 
                    <h2 class="is-size-6-mobile" >NUEVA MIRADA A LA</h2>
                    <h1 class="is-size-4-mobile ">EXCLUSIVIDAD</h1>
                </div>
            </div>  
        </div>
    </div>
</section>

<!-- SECCION 2 DISEÑO-->
<section class="hero has-background-black">
    <div class="hero-body ">
        <div class="container">

            <div class="columns has-text-white">

                <div class="column is-5-desktop is-offset-2-desktop ">
                    <h2 class="f_ml is-size-4 espacio3">DISEÑO Y VANGUARDIA EN UN SOLO LUGAR</h2>
                    <img  src="<?php echo get_template_directory_uri();?>/assets/img/line_white.png" alt="line">
                    <p class="has-text-justified">Respira, siente la desconexión y disfruta del relajo que solo te pueden dar las olas. <br> <br>
                          Edificio Dalí Península es un proyecto boutique que cuenta con 16 pisos y tan sólo
                          42 departamentos. Ubicado en la Península de Cavancha, vas a experimentar la tranquilidad
                           y desconexión a otro nivel.</p>
                </div>
                <div class="column is-5-desktop is-offset-1-desktop pt-40 ">
                    <h2 class="f_neutra">2 & 3 <br>  DORMITORIOS </h2>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/line_blue.png" alt="line">

                    <h2 class="f_neutra">4 DORMS. & PENTHOUSES</h2>
                </div>
            </div>

           
        </div>
    </div>
</section>

<!-- SECCION 3 PILOTO VIRTUAL -->

<section id="piloto-virtual">
    <div class="hero-body brillo2" >
        <div class="container ">
            <div class="columns is-vcentered pt-15">
                <div class="column is-5 is-offset-1-desktop pt-full-10 has-text-centered-mobile">
                     <img  class="button-play" id="buttom-piloto-virtual" src="<?php echo get_template_directory_uri();?>/assets/img/buttom_play.png" alt="play">
                </div>

                <div class="column is-5  has-text-white has-text-right ">
                    <div class=" is-flex is-justify-content-right">
                        <button class=" f_mm  button-transparent">NUEVO</button>
                        <h2 class="f_ml is-size-3  ">VIDEO</h2>
                    </div>
                    <h2 class="f_ml is-size-3">PILOTO VIRTUAL</h2>
                    <p>Una nueva forma de recorrer los amplios <br>
                    espacios y sentir que ya vives en Dalí<p>
                    
                        <br>
                    <h4 class="f_mbItalic">  DEPTO. TIPO A <br> 3 DORMS. + 3 BAÑOS</h4>

                    <a href="#SeccionContacto">
                        <button class="has-background-white  has-text-black padding-buttom-10 f_neutra is-size-4">Cotizar</button>
                    </a>
                  
                </div>
            </div>




        </div>
    </div>
</section>


<!-- SECCION 4 PISOS -->
<section id="pisos"  class="has-background-white">
    <div class="hero-body" >
        <div class="container">
            <div class="columns is-vcentered has-text-centered ">
                <div class="column is-three-fifths-desktop is-offset-one-fifth-desktop has-text-white  has-text-centered ">

                    <div class="columns  has-text-centered">
                        <div class="column is-3-desktop  is-offset-2-desktop  is-2-mobile has-text-white  ">
                            <button class="button-blue btn-piso"  data-attribute="2-13">Pisos 2 al 13</button>
                        </div>
                        <div class="column is-3-desktop has-text-white is-2-mobile   ">
                            <button class="button-gray btn-piso"  data-attribute="14-15">Pisos 14 y 15*</button>
                        </div>
                        <div class="column is-3-desktop has-text-white is-2-mobile   ">
                            <button class="button-gray btn-piso"  data-attribute="pent">Penthouses</button>
                        </div>

                    </div>


                    <div class="columns is-vcentered has-text-centered">
                        <div class="column">
                            <div class="column is-5-desktop is-offset-6-tablet mt-40-plantas">
                                <div class="is-flex">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/arrow_small.png" alt="play">
                                    <p id="text-pisos" class="f_sinm has-text-black">PLANTAS PISOS 2 AL 13 </p>
                                </div>
                                <p id="text-pisos-deptos" class="has-text-white has-background-black f_sinl">SOLO 3 DEPTOS. POR PISO<p>
                            </div>
                            
                            <img id="imagen-piso" class="mt-60-negativo"src="<?php echo get_template_directory_uri();?>/assets/img/piso_2_13.png" alt="play">
                            <div class="columns">
                                <div class="column is-9  ">
                                    <img  class="imagen-bottom-pisos"src="<?php echo get_template_directory_uri();?>/assets/img/text_bottom.png" alt="play">
                                </div>
                            </div>
                           
                        </div>

                    </div>


                   

                    <div class="columns is-vcentered has-text-centered">
                        <div class="column  has-text-white  ">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brand_pisos.png" alt="play">
                        </div>

                    </div>




                </div>
            </div>

        </div>
    </div>
</section>



<!-- SECCION 5 PLANTAS -->
<section class="hero has-background-black">
    <div class="hero-body">
        <div class="container">
        <div class="columns is-centered">
        
            <div class="column is-4-desktop is-offset-1-desktop has-text-white">
                   <div class="is-flex">
                        <h4 class="is-size-3 is-size-5-mobile f_mh  espacio2">UN LUGAR</h4>
                        <img class="arrow-blue is-centered-mobile" src="<?php echo get_template_directory_uri();?>/assets/img/arrow_blue.png">
                   </div>
                   <h4 class="is-size-3 is-size-5-mobile  f_mh  espacio2">SOLO PARA TI</h4>

                   <p class="is-size-13" >Encuentra ese espacio que entiende cómo se mueve tu vida.</p>
            </div>


            <div class="column is-4 has-text-centered has-text-white">
                <button class="button btncase f_gpm is-size-7 is-warning has-text-white" data-attribute="2dorm">2
                    DORMS.</button>
                <button class="button btncase f_gpm is-size-7 is-warning has-text-white" data-attribute="3dorm">3
                    DORMS.</button>
                <button class="button btncase f_gpm is-size-7 is-warning has-text-white" data-attribute="4dorm">4
                    DORMS.</button>
            </div>

        </div>
        <div class="columns is-centered is-vcentered  ">
            <div class="column is-6-desktop  has-text-white has-text-centered ">
               
                <div id="dis-2dorm" class="disponibilidad has-text-centered ">
                    <p class="f_ml is-size-4 espacio3">DESDE UF 5.899*</p>
                </div>
    
                <div id="dis-3dorm" class="disponibilidad is-hidden has-text-centered ">
                    <p class="f_ml is-size-4 espacio3">DESDE UF 6.466*</p>
                </div>
                <div id="dis-4dorm" class="disponibilidad  is-hidden has-text-centered ">
                    <p class="f_ml is-size-4 espacio3">DESDE UF 7.800*</p>
                </div>
                <br>
                <p class="is-size-10 f_bozon_r"> *Precio con descuento incluido por venta en blanco. No incluye estacionamiento ni bodega.</p>

            </div>
        </div>
        <div class="columns is-centered is-vcentered has-text-white">
            <!-- esquicio -->
            <div class="column is-2 is-6-mobile is-offset-3-mobile has-text-centered-mobile is-centered-mobile">
                <figure>
                    <img id="esquicio" src="<?php echo get_template_directory_uri();?>/assets/img/planta-c/PLANO-PLANTA-TIPO-C.png"
                    alt="Edificio Dalí Loga Iquique">
                </figure>
            </div>

            <div class="column is-hidden-mobile"></div>

            <!-- galeria plantas -->
            <div id="plantas" class="column is-5 is-10-mobile is-offset-1-mobile is-centered has-text-centered">

                <!-- piso 2 al 13 -->
                <!-- plantas c -->
                <div class="slide 2dorm has-text-centered z ">
                    <p class="is-size-6 f_ml">Plantas preliminares</p>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/planta-c/PLANTA-TIPO-C.png" alt="Edificio Dalí Loga"
                    data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/planta-c/PLANTA-TIPO-C.png">
                </div>

                <!-- plantas b generico -->
                <div class="slide 2dorm has-text-centered z ">
                    <p class="is-size-6 f_ml">Plantas preliminares</p>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/planta-b/planta-TIPO-B.png" alt="Edificio Dalí Loga"
                    data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/planta-b/planta-TIPO-B.png">
                </div>

                <!-- plantas A generico -->
                <div class="slide 3dorm has-text-centered z ">
                    <p class="is-size-6 f_ml">Plantas preliminares</p>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/planta-a/TIPO-A.png" alt="Edificio Dalí Loga"
                    data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/planta-a/TIPO-A.png">
                </div>

                <!-- piso 14 -->
                <!-- plantas -->
                <div class="slide 3dorm has-text-centered z ">
                    <p class="is-size-6 f_ml">Plantas preliminares</p>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/planta-a/planta-A2-1.png" alt="Edificio Dalí Loga"
                    data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/planta-a/planta-A2-1.png" al>
                </div>

                <div class="slide 3dorm has-text-centered z ">
                    <p class="is-size-6 f_ml">Plantas preliminares</p>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/planta-b/planta-B2-1.png" alt="Edificio Dalí Loga"
                    data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/planta-b/planta-B2-1.png">
                </div>

                <!-- piso 15 -->
                <!-- plantas -->
                <div class="slide 3dorm has-text-centered z ">
                    <p class="is-size-6 f_ml">Plantas preliminares</p>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/planta-a/PISO15_Dpto A1.png" alt="Edificio Dalí Loga"
                    data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/planta-a/PISO15_Dpto A1.png">
                </div>
                <div class="slide 3dorm has-text-centered z ">
                    <p class="is-size-6 f_ml">Plantas preliminares</p>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/planta-b/PISO15_Dpto B1.png" alt="Edificio Dalí Loga"
                    data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/planta-b/PISO15_Dpto B1.png">
                </div>

                <!-- piso 16 -->
                <div class="slide 4dorm has-text-centered z ">
                    <p class="is-size-6 f_ml">Plantas preliminares</p>
                    <span class="has-text-white is-size-6 f_gpbol" style = "
                    padding: 5px 10px 5px 10px;
                    background-color:#005d75 ;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);" >RESERVADO</span>  
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/planta-a/PISO16_Dpto A2.png" alt="Edificio Dalí Loga"
                    data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/planta-a/PISO16_Dpto A2.png">
                    <div class="is-centered">
                    <p class="linea1 has-text-centered has-text-success">
                        <span class="f_gpbol is-size-5">> PLANTA A2</span>&nbsp;&nbsp;&nbsp;
                        <span class="has-text-white f_gpl is-size-6">TERRAZA A2</span>
                    </p>
                    </div>
                </div>

                <!-- piso 17 -->
                <div class="slide 4dorm has-text-centered z ">
                    <p class="is-size-6 f_ml">Plantas preliminares</p>
                    <span class="has-text-white is-size-6 f_gpbol" style = "
                    padding: 5px 10px 5px 10px;
                    background-color:#005d75 ;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);" >RESERVADO</span>  
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/planta-a/planta-A2-3-TP.png" alt="Edificio Dalí Loga"
                    data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/planta-a/planta-A2-3-TP.png">
                    <div class="is-centered">
                    <p class="linea1 has-text-centered has-text-success">
                        <span class="has-text-white f_gpl is-size-6">PLANTA A2</span>&nbsp;&nbsp;&nbsp;
                        <span class="f_gpbol is-size-5">> TERRAZA A2</span>
                    </p>
                    </div>
                </div>

                <!-- piso 16 -->
                <div class="slide 4dorm has-text-centered z ">
                    <p class="is-size-6 f_ml">Plantas preliminares</p>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/planta-b/PISO16_DptoB2.png" alt="Edificio Dalí Loga"
                    data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/planta-b/PISO16_DptoB2.png">
                    <div class="is-centered">
                    <p class="linea1 has-text-centered has-text-success">
                        <span class="f_gpbol is-size-5">> PLANTA B2</span>&nbsp;&nbsp;&nbsp;
                        <span class="has-text-white f_gpl is-size-6">TERRAZA B2</span>
                    </p>
                    </div>
                </div>

                <!-- piso 17 -->
                <div class="slide 4dorm has-text-centered z ">
                    <p class="is-size-6 f_ml">Plantas preliminares</p>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/planta-b/planta-B2-3-TP.png" alt="Edificio Dalí Loga"
                    data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/planta-b/planta-B2-3-TP.png">
                    <div class="is-centered">
                    <p class="linea1 has-text-centered has-text-success">
                        <span class="has-text-white f_gpl is-size-6">PLANTA B2</span>&nbsp;&nbsp;&nbsp;
                        <span class="f_gpbol is-size-5">> TERRAZA B2</span>
                    </p>
                    </div>
                </div>

            </div>

            <div class="column is-hidden-mobile"></div>

            <!-- tipología -->
            <div class="column is-3">
                <h3 class="is-size-3 f_gpbol espacio4px">DPTO.&nbsp;<span id="t_depto">C</span></h3>
                <p id="t_piso" class="is-size-6 f_gpl">Piso 2 al 13</p>
                <p id="t_tipologia" class="is-size-6 f_gpl">2D - 2B </p>
                <br>
                <h4 class="is-size-6 f_gpbol">SUPERFICIE TOTAL: <span id="t_m2">84,72</span> m<sup>2</sup></h4>
                <p class="is-size-6 f_gpl">Sup. Útil: <span id="t_mutil">67,72</span> m<sup>2</sup></p>
                <p class="is-size-6 f_gpl">Terrazas: <span id="t_terrazas">17,00</span> m<sup>2</sup></p>
                <br>
                <br>
                <br>
                <p class="has-text-left">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/ZOOM.svg" alt="Edificio Dalí" width="50px">
                </p>
            </div>
        </div>
        </div>
    </div>
</section>


<!-- SECCION 6 PERSPECTVA -->
<section id="perspectiva" class="perspectiva-dia">
    <div class="hero-body" >
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-11 has-text-white has-text-right title_box_perspectiva ">
                    <h2 class="f_mb is-size-3 mt-100 ">PERSPECTIVA</h2>
                    <h3 class="f_ml">DÍA & NOCHE</h3>
                    <br>
                    <div class="container-btn-mode">
                        <div id="id-sun" class="btn-mode sun active has-text-centered">
                            <i class="fas fa-sun"></i>
                        </div>
                        <div id="id-moon" class="btn-mode moon  has-text-centered">
                            <i class="fas fa-moon"></i>
                        </div>
                    </div>


                    <p class="f_bozon_r">Hay un antes y un después de sentir la exclusividad<br>
                    de Dalí Península. Disfruta de las mejores vistas del <br>norte.
                    ¡Sí, las mejores!<p>

                    <a href="beta/Dali/proyecto">
                        <button class="button-blue">Conoce más</button>
                    </a>
                </div>

         
            </div>
        </div>
    </div>
</section>


<!-- SECCION 7 CINEMAGRAPH -->
<section id="cinemagraph">
    <div class="hero-body" >
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-5 is-offset-1-desktop has-text-white has-has-text-left  ">
                    <h2 class="f_mm  is-size-3 mt-150">CINEMAGRAPH</h2>

                    <div class="is-flex">
                        <h3 class="f_ml">EDIFICIO</h3> 
                        <img class="arrow-blue is-centered-mobile" src="<?php echo get_template_directory_uri();?>/assets/img/arrow_blue.png">
                   </div>

                    <p class="is-size-14  f_bozon_r">Una pausa mirando el infinito mar de Iquique.<br>
                        Con Edificio Dalí Península los atardeceres serán<br>
                        parte de tu vida.<p>

                    <a href="#SeccionContacto">
                        <button class="has-background-white  has-text-black padding-buttom-10 f_neutra is-size-4">Cotizar</button>
                    </a>
                </div>

                <div class="column is-5 is-offset-1-desktop pt-full-50 has-text-centered-mobile">
                <img id="buttom-cinemagrah" class="button-play" src="<?php echo get_template_directory_uri();?>/assets/img/buttom_play.png" alt="play">
                
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECCION 8 EDIFICIO 360 -->
<section class="hero has-background-black" id="edificio360">
    <div class="hero-body ">
        <div class="container">

            <div class="columns has-text-white is-vcentered">
                <div class="column is-8-desktop ">
                <iframe loading="lazy" 
                    src="<?php echo get_template_directory_uri();?>/assets/panorama-360/"
                    width="100%" height="520px" frameborder="0">
                </iframe>

                </div>

                <div class="column is-4-desktop pt-40 f_ml d has-text-centered-mobile">
                    <h2 class="is-size-3">EDIFICIO</h2>
                    <h2 class="is-size-3">TOUR 360º</h2>

                    <br class="is-hidden-mobile">
                    <br class="is-hidden-mobile">

                    <p class="has-text-justified is-size-12  ">Elegimos el mejor sector de Cavancha para que puedas vivir, disfrutar y descansar. 
                        Recorre desde la comodidad de tu hogar tu nuevo depto. y descubre los detalles que hacen a Dalí Península diferente.
                    </p>
                </div>
            </div>

            <br>
            <br>

            <div class="columns is-centered">
               <div class="column is-6 has-text-white">
                   <div class="is-flex">
                        <h4 class="is-size-4 is-size-5-mobile f_mh   espacio4">GRANDES MARCAS </h4>
                        <img class="arrow-blue is-centered-mobile" src="<?php echo get_template_directory_uri();?>/assets/img/arrow_blue.png">
                   </div>
                   <h4 class="is-size-4 is-size-5-mobile  f_mh  espacio4">EN DALÍ PENÍNSULA </h4>
               </div>
            </div>


            <div class="columns is-centered is-vcentered">
               <div class="column is-4 f_ml has-text-justified">
                  <img style="margin-left: -7px;" src="<?php echo get_template_directory_uri();?>/assets/img/LOGO-darraidou-Arq.png">
               </div>
               <div class="column is-2 f_ml has-text-justified has-text-centered-mobile">
                  <img class=" is-centered-mobile" width="180px " src="<?php echo get_template_directory_uri();?>/assets/img/LOGOTIPOSMARCAS_new.png">
               </div>
            </div>


           
        </div>
    </div>
</section>



<!-- formulario -->
<section id="SeccionContacto" class="hero is-fullheight has-background-black has-text-white fondo-formulario">
      <div class="hero-body">
         <div class="container">
            <form id="inscripcion" name="inscripcion">
               <div class="columns  is-centered ">
                  <div class="column is-10 has-text-centered  is-12-mobile">
                     <h2 class="f_ml is-size-3">INSCRÍBETE AQUÍ</h2>
                     <h2 class="f_mmI is-size-5">PARA SER PARTE DE ESTA EXCLUSIVA PREVENTA</h2>
                  </div>
               </div>
               <!-- título -->
               <div class="columns is-10 is-centered pt-40 ">
                  <div class="column is-8 is-centered is-12-mobile">
                     <div class="field is-horizontal">
                        <div class="field-body">
                           <!-- nombre -->
                           <div class="field">
                              <p class="control">
                              <p class="is-size-7 f_gpm">TU NOMBRE</p>
                              <input class="inputs" type="text" name="nombre" id="nombre" />
                              </p>
                           </div>
                           <!-- email -->
                           <div class="field">
                              <p class="control">
                              <p class="is-size-7 f_gpm">TU EMAIL</p>
                              <input class="inputs" type="email" name="email" id="email" />
                              </p>
                           </div>
                        </div>
                     </div>

                     <div class="field is-horizontal">
                        <div class="field-body">
                           <!-- nombre -->
                           <div class="field">
                              <p class="control">
                              <p class="is-size-7 f_gpm">TU RUT</p>
                              <input id="rut" type="text" name="rut" class="inputs" />
                              </p>
                           </div>
                           <!-- email -->
                           <div class="field">
                              <p class="control">
                              <p class="is-size-7 f_gpm">TU TELÉFONO</p>
                              <input class="inputs is-success" type="text" name="telefono" id="telefono" />
                              </p>
                           </div>
                        </div>
                     </div>

                     <div class="field is-horizontal">
                        <div class="field-body">
                           <!-- Como llegaste -->
                           <div class="field">
                              <p class="control">
                              <p class="is-size-7 f_gpm llegaste">Cómo llegaste a Dalí Península</p>
                              <select name="sector">
                                 <option value="">Seleccione</option>
                                 <option value=" Publicidad en terreno">Publicidad en terreno</option>
                                 <option value=" Publicidad en RRSS">Publicidad en RRSS</option>
                                 <option value=" Publicidad en google">Publicidad en google</option>
                                 <option value=" Correo electrónico">Correo electrónico</option>
                              </select>
                              </p>
                           </div>

                           <div class="field">
                              <p class="control">
                              <p class="is-size-7 f_gpm llegaste">Cómo quieres que te contactemos?</p>
                              <select name="canal">
                                 <option value="">Seleccione</option>
                                 <option value="Por WhatsApp">Por WhatsApp</option>
                                 <option value="Por teléfono">Por teléfono</option>
                              </select>
                              </p>
                           </div>
                           <!--reloj para capturar hora actual y enviar a db -->
                           <input class="is-hidden" type="text" name="reloj" size="35">
                        </div>
                     </div>
                  </div>

               </div>
               <!-- campos -->
               <div class="columns  is-centered">
                  <div class="column is-10 has-text-centered is-12-mobile">
                     <p class="is-size-7">¿TE INTERESA?</p>
                     <button class="button is-success is-size-5 f_gpbol is-size-6 bform" type="submit">Quiero ser parte
                        <br class="is-hidden-desktop"> de este exclusivo proyecto</button>
                  </div>
               </div>
            </form>


            <form id="tellamamos">
               <div class="columns  is-centered has-text-centered pt-40">
                  <p class="control is-expanded">
                  <div class="column is-5 has-text-centered is-11-mobile">
                     <p class="is-size-7">TE LLAMAMOS EN UN MOMENTO</p>
                     <div class="field is-grouped">
                        <input class="inputs" maxlength="11" type="text" id="llamada" name="llamada"
                           placeholder="Teléfono 56943214321">
                        <p class="control">
                           <button type="submit" class="button is-success is-size-5 f_gpbol is-size-6">ENVIAR</button>
                        </p>
                     </div>
                     <label id="llamada-error" class="error" for="llamada"></label>
                     <div class="disclaimer">
                        <span class="is-size-7">Atención: Lunes a Jueves de 9:00 a 18:30 hrs. y Viernes de 9:00 a 15:00
                           hrs.</span>
                     </div>
                  </div>

               </div>
            </form>


            <div class="columns  is-centered pt-40 is-vcentered">
               <div class="column has-text-centered is-6 has-text-right has-text-centered-mobile is-12-mobile">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/webpay.png" alt="Webpay Loga Dalí Inmobiliaria">
               </div>
               <div class="column has-text-centered is-6 has-text-left has-text-centered-mobile is-12-mobile">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/texto-pagar.png" alt="Webpay Loga Dalí Inmobiliaria">
                  <br>
                  <a href="https://www.webpay.cl/portalpagodirecto/pages/institucion.jsf?idEstablecimiento=92382932"
                     target="_blank">
                     <img src="<?php echo get_template_directory_uri();?>/assets/img/click-pagar.png" alt="Webpay Loga Dalí Inmobiliaria">
                  </a>
               </div>
            </div>
         </div>
      </div>

</section>


<div id="video-piloto-virtual" class="modal">
  <div id="closeModalContent" class="modal-background"></div>
    <div class="modal-content">
      <iframe loading="lazy"
        src="<?php echo get_template_directory_uri();?>/assets/video/LOGA_DALI_VIDEO_PILOTO_VIRTUAL.mp4"
        width="100%" height="520px" frameborder="0"></iframe>
      <button width="100px" height="60px" type="button"  class="modal-close"
        aria-label="close">(X)
        cerrar</button>
    </div>
  </div>
</div>


<div id="video-cinema" class="modal">
  <div id="closeModalContent" class="modal-background"></div>
    <div class="modal-content">
      <iframe loading="lazy"
        src="<?php echo get_template_directory_uri();?>/assets/video/LogaDali_Cinema.mp4"
        width="100%" height="510px" frameborder="0"></iframe>
      <button width="100px" height="60px" type="button"  class="modal-close"
        aria-label="close">(X)
        cerrar</button>
    </div>
  </div>
</div>



<?php get_footer(); ?>
