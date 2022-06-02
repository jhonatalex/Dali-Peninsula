<?php
/**
 * Template Name: Piloto 360
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


<script src="https://kit.fontawesome.com/85cc333d5c.js" crossorigin="anonymous"></script>

<!-- SECCION 1 HEADER-->
<section class="hero" id="header-piloto-360">
    <div class="hero-body brillo2">
        <div class="container"> 
            <div class="columns has-text-white "  >
                <div class="column is-5 is-offset-1-desktop is-half mt-20 ">
                    <h2 class="f_ml is-size-3 ">PILOTO 360°</h2>

                    <div class="is-flex">
                        <h2 class="f_ml is-size-3 ">DEPTO. A</h2>
                        <img class="arrow-blue is-centered-mobile" src="<?php echo get_template_directory_uri();?>/assets/img/arrow_blue.png">
                   </div>
                  
                </div>
                <div class="column is-6 has-text-right-desktop   has-text-centered-mobile mt-20">
                <img  class="button-play" id="buttom-piloto-virtual" src="<?php echo get_template_directory_uri();?>/assets/img/buttom_play.png" alt="play">
                    <p class="f_bozon_r is-size-14 pt-40 " >No importa dónde estés, ni lo que estés haciendo...<br>
                    Visualiza tu nueva vida, desde la comodidad de tu hogar</p>
                    <a href="beta/Dali/#SeccionContacto">
                        <button class="has-background-white  has-text-black padding-buttom-10 f_neutra is-size-4">Cotizar</button>
                    </a>
                </div>
            </div>  
        </div>
    </div>
</section>

<!-- SECCION 2 DISEÑO-->
<section class="hero has-background-black" id="galeria-piloto-360">
    <div class="hero-body">
       
    <div class="container"> 
            <div class="columns is-centered is-multiline">
                <div class="column is-5   has-text-white ">           
                    <h2 class="f_ml mt-60 is-size-4">VIVE LA VIDA... ¡DESDE LOS MÁS ALTO!</h2>
                    <br>
                    <p class="f_bozon_r is-size-14">¿Quieres descubrir lo que tiene Dalí Península para ti? 
                    Conoce una experiencia única en diseño y arquitectura, con 
                    espacios perfectos para tu vida cerca del mar.
                    </p>
                </div>
            
            </div>  

            <div class="columns ">
                    <div class="column has-text-right-desktop is-hidden-mobile ">   
                     <h2 class="f_mbItalic mt-60 is-size-6 has-text-white">   IMÁGENES PILOTO TIPO A</h2>
                    </div> 
            </div> 
         


            <div class="columns is-centered is-vcentered">
                 <div class="column is-2 has-text-white has-text-centered  ">
                    <img id="zoom-galery" class="button-play" src="<?php echo get_template_directory_uri();?>/assets/img/float-buttom.png" alt="play">
                    <p>Haz un zoom acá y agranda tus expectativas</p>
                </div>
                <div class="column is-10 has-text-white has-text-centered  ">

                    <div id="galeria-piloto-tipo-a" >

                        <div class="slide">
                            <p id="text-ventanas" class="is-hidden text-hover-ventana">Ventanas de PVC*<p>
                            <img  class="url-zoom"  usemap="#image-map" src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Dalí_Dorm_Principal.jpg" alt="Edificio Dalí Loga">
                            <map name="image-map">
                                <area  id="sector-ventanas"  alt="Ventanas de PVC" title="Ventanas de PVC" coords="219,209,22" shape="circle">
                                <area  id="sector-piso"  alt="Piso Porcelanato MK" title="Piso Porcelanato MK"  coords="185,466,23" shape="circle">
                                <area  id="sector-usb"  alt="Puesto USB" title="Puesto USB" coords="859,282,20" shape="circle">
                            </map>
                            <p id="text-piso" class="is-hidden text-hover-piso">Piso porcelanato MK*<p>
                            <p id="text-usb" class="is-hidden text-hover-usb">Puerto USB en dormitorio Principal*<p>
                        
                        </div>

                        <div class="slide" >
                            <p id="text-ventanas-2" class="is-hidden text-hover-ventana-2">Ventanas de PVC*<p>
                            <img  class="url-zoom"  usemap="#image-map-2" src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Dalí_Living_Comedor.jpg" alt="Edificio Dalí Loga">
                        
                            <map name="image-map-2">
                                <area  id="sector-piso-2"  alt="Piso porcelanato MK*" title="Piso porcelanato MK*"  coords="477,449,21" shape="circle">
                                <area  id="sector-ventanas-2" alt="Ventanas de PVC*" title="Ventanas de PVC*"  coords="609,226,21" shape="circle">
                            </map>
                        
                            <p id="text-piso-2" class="is-hidden text-hover-piso-2">Piso porcelanato MK*<p> 
                        </div>
                   
                        <div class="slide">
                                 <p id="text-baranda-terraza" class="is-hidden text-baranda-terraza">Barandas de cristal*<p> 
                                 <p id="text-ventana-terraza" class="is-hidden text-ventana-terraza">Ventanas de PVC*<p>
                                <img  class="url-zoom"   usemap="#image-map-3" src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Dali_Terraza.jpg" alt="Edificio Dalí Loga">
                            
                                <map name="image-map-3">
                                    <area class="baranda-3"  alt="Barandas de Cristal" title="Cristal" href="barandas" coords="202,273,35" shape="circle">
                                    <area class="piso-3" alt="Pisos Porcelanato Mk" title=" Porcelanato Mk" href="piso" coords="371,372,24" shape="circle">
                                    <area class="ventana-3" alt="Ventanas PVC" title=" PVC" href="ventanas" coords="671,234,31" shape="circle">
                                </map>

                                <p id="text-piso-terraza" class="is-hidden text-piso-terraza">Piso porcelanato MK*<p> 
                        </div>


                      <!--
             
                        <div class="slide ">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/CocinaPilotoC.jpg" alt="Edificio Dalí Loga">
                        </div>


                        <div class="slide ">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Cocina.jpg" alt="Edificio Dalí Loga">
                        </div>




                        <div class="slide ">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Baño.jpg" alt="Edificio Dalí Loga">
                        </div>
                            -->

                    </div>


                </div>
            </div> 
            
            
            <div class="columns is-centered">
                <div class="column is-one-fifth has-text-centered-mobile">   
                <a href="beta/Dali/#SeccionContacto">                     
                    <button class="cotizar f_bozon_r">Cotizar</button>  
                </a>    
                </div>
            </div>

       </div>
    </div>
</section>


<div id="zoom-galeria-360" class="modal">
  <div id="closeModalContent" class="modal-background"></div>
    <div class="modal-content">
        <p class="image is-4by3">
        <img id="iframe-image" src="https://bulma.io/images/placeholders/1280x960.png" alt="">
        </p>
      <button width="100px" height="60px" type="button"  class="modal-close"
        aria-label="close">(X)
        cerrar</button>
    </div>
  </div>
</div> 



<?php get_footer(); ?>