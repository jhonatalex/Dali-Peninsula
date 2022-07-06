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
                            <img  class="url-zoom"  usemap="#image-map" src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Dali_Dorm_Principal.jpg" alt="Edificio Dalí Loga">
                            <map name="image-map">
                                <area  id="sector-ventanas"  alt="Ventanas de PVC" title="Ventanas de PVC" coords="219,209,22" shape="circle">
                                <area  id="sector-piso" alt="Piso Porcelanato MK" title="Piso Porcelanato MK"  coords="185,466,23" shape="circle">
                                <area  id="sector-usb"  alt="Puesto USB" title="Puesto USB" coords="859,282,20" shape="circle">
                            </map>
                            <p id="text-piso" class="is-hidden text-hover-piso">Piso porcelanato MK*<p>
                            <p id="text-usb" class="is-hidden text-hover-usb">Puerto USB en dormitorio Principal*<p>
                        
                        </div>

                        <div class="slide" >
                            <p id="text-ventanas-2" class="is-hidden text-hover-ventana-2">Ventanas de PVC*<p>
                            <img  class="url-zoom"  usemap="#image-map-2" src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Dali_Living_Comedor.jpg" alt="Edificio Dalí Loga">
                        
                            <map name="image-map-2">
                                <area  id="sector-piso-2" alt="Piso porcelanato MK*" title="Piso porcelanato MK*"  coords="477,449,21" shape="circle">
                                <area  id="sector-ventanas-2" alt="Ventanas de PVC*" title="Ventanas de PVC*"  coords="609,226,21" shape="circle">
                            </map>
                        
                            <p id="text-piso-2" class="is-hidden text-hover-piso-2">Piso porcelanato MK*<p> 
                        </div>
                   
                        <div class="slide">
                                 <p id="text-baranda-terraza" class="is-hidden text-baranda-terraza">Barandas de cristal*<p> 
                                 <p id="text-ventana-terraza" class="is-hidden text-ventana-terraza">Ventanas de PVC*<p>
                                <img  class="url-zoom"   usemap="#image-map-3" src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Dali_Terraza.jpg" alt="Edificio Dalí Loga">
                            
                                <map name="image-map-3">
                                    <area class="baranda-3" alt="Barandas de Cristal" title="Cristal" href="barandas" coords="202,273,35" shape="circle">
                                    <area class="piso-3" alt="Pisos Porcelanato Mk" title="Piso Porcelanato Mk" href="cocina=" coords="371,372,24" shape="circle">
                                    <area class="ventana-3" alt="Ventanas PVC" title=" PVC" href="ventanas" coords="671,234,31" shape="circle">
                                </map>

                                <p id="text-piso-terraza" class="is-hidden text-piso-terraza">Piso porcelanato MK*<p> 
                        </div>

                     
             
                        <div class="slide ">
                            <img  usemap="#image-map-4" src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/CocinaPilotoC.jpg" alt="Edificio Dalí Loga">
                        

                            <map name="image-map-4">
                                <area id="0" class="hover-cocina" alt="Espacio para refrigerador  side by side*" title="Espacio para refrigerador  side by side*" href="Refrigerador" coords="198,137,22" shape="circle">
                                <area id="1" class="hover-cocina" alt="Grifería MK*" title="Grifería MK*" href="Geiferia" coords="328,209,17" shape="circle">
                                <area id="2" class="hover-cocina" alt="Cubiertas de cocina TOP porcelanato*" title="Cubiertas de cocina TOP porcelanato*" href="Tope" coords="296,225,17" shape="circle">
                                <area id="3" class="hover-cocina" alt="Espacio para  Lavavajillas*" title="Espacio para  Lavavajillas*" href="Lavavajillas" coords="289,263,18" shape="circle">
                                
                                <area id="4" class="hover-cocina" alt="Muebles italianos con cierre suave*" title="Muebles italianos con cierre suave*" href="Mueble" coords="537,114,19" shape="circle">
                                <area id="5" class="hover-cocina" alt="Campana TEKA*" title="Campana TEKA*" href="Campana" coords="514,176,15" shape="circle">
                                <area id="6" class="hover-cocina" alt="Tower con horno y microondas TEKA apanelables*" title="Tower con horno y microondas TEKA apanelables*" href="Horno" coords="583,203,21" shape="circle">
                                <area id="7" class="hover-cocina" alt="Encimera vitrocerámica de 4 platos TEKA*" title="Encimera vitrocerámica de 4 platos TEKA*" href="Encimera" coords="479,230,16" shape="circle">
                                <area id="8" class="hover-cocina" alt="Muebles italianos con cierre suave*" title="Muebles italianos con cierre suave*" href="Mueble" coords="552,271,16" shape="circle">
                                <area id="9" class="hover-cocina" alt="Cajones para cubiertos*" title="Cajones para cubiertos*" href="Cubiertos" coords="495,263,18" shape="circle">
                               
                                <area id="10" class="hover-cocina" alt="Cajón para ollas*" title="Cajón para ollas*" href="Ollas" coords="493,296,12" shape="circle">
                            </map>
                        
                            <p id="text-cocina-refri" class="is-hidden text-cocina">Espacio para refrigerador side by side*<p> 
                            <p id="text-cocina-grifo" class="is-hidden text-cocina">Grifería MK*<p> 
                            <p id="text-cocina-tope" class="is-hidden text-cocina">Cubiertas de cocina TOP porcelanato*<p> 
                            <p id="text-cocina-lava" class="is-hidden text-cocina">Espacio para Lavavajillas*<p> 
                            <p id="text-cocina-mueble" class="is-hidden text-cocina">Muebles italianos con cierre suave*<p> 
                            <p id="text-cocina-campana" class="is-hidden text-cocina">Campana TEKA*<p> 
                            <p id="text-cocina-horno" class="is-hidden text-cocina">Tower con horno y microondas TEKA apanelables*<p> 
                            <p id="text-cocina-encimera" class="is-hidden text-cocina">Encimera vitrocerámica de 4 platos TEKA*<p> 
                            <p id="text-cocina-mueble2" class="is-hidden text-cocina">Muebles italianos con cierre suave*<p> 
                            <p id="text-cocina-cubierto" class="is-hidden text-cocina">Cajones para cubiertos*<p> 
                            <p id="text-cocina-olla" class="is-hidden text-cocina">Cajón para ollas*<p> 


                        
                        </div>

                        <div class="slide ">
                            <img usemap="#image-map-5" src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Cocina.jpg" alt="Edificio DalÌ Loga">

                            <map name="image-map-5">
                                <area id="11" class="hover-cocina-piloto" alt="Muebles italianos con  cierre suave*" title="Muebles italianos con  cierre suave*" href="#" coords="180,152,10" shape="circle">
                                <area id="12" class="hover-cocina-piloto" alt="Campana TEKA*" title="Campana TEKA*" href="#" coords="265,212,10" shape="circle">
                                <area id="13" class="hover-cocina-piloto" alt="Salpicadero con TOP porcelanato*" title="Salpicadero con TOP porcelanato*" href="#" coords="194,236,10" shape="circle">
                                <area id="14" class="hover-cocina-piloto" alt="Cubiertas de cocina TOP porcelanato*" title="Cubiertas de cocina TOP porcelanato*" href="#" coords="180,314,10" shape="circle">
                                <area id="15" class="hover-cocina-piloto" alt="Encimera vitrocer·mica de 4 platos TEKA*" title="Encimera vitrocer·mica de 4 platos TEKA*" href="#" coords="300,293,10" shape="circle">
                                <area id="16" class="hover-cocina-piloto" alt="Cajones para cubiertos*" title="Cajones para cubiertos*" href="#" coords="306,341,10" shape="circle">
                                <area id="17" class="hover-cocina-piloto" alt="Muebles italianos con cierre suave*" title="Muebles italianos con cierre suave*" href="#" coords="188,390,10" shape="circle">
                                <area id="18" class="hover-cocina-piloto" alt="Condimenteros*" title="Condimenteros*" href="#" coords="246,405,10" shape="circle">
                                <area id="19" class="hover-cocina-piloto" alt="CajÛn para ollas*" title="CajÛn para ollas*" href="#" coords="337,390,10" shape="circle">
                                <area id="20" class="hover-cocina-piloto" alt="Espacio para lavavajillas*" title="Espacio para lavavajillas*" href="#" coords="443,322,10" shape="circle">
                                <area id="21" class="hover-cocina-piloto" alt="GriferÌa MK*" title="GriferÌa MK*" href="#" coords="540,255,10" shape="circle">
                                <area id="22" class="hover-cocina-piloto" alt="Espacio para refrigerador side by side*" title="Espacio para refrigerador side by side*" href="#" coords="707,105,9" shape="circle">
                                <area id="23" class="hover-cocina-piloto" alt="Tower con horno y microondas TEKA apanelables*" title="Tower con horno y microondas TEKA apanelables*" href="#" coords="736,146,10" shape="circle">
                            </map>

                            <p id="text-cocina-mIta" class="is-hidden text-cocina-piloto">Muebles italianos con  cierre suave*<p> 
                            <p id="text-cocina-campTeka" class="is-hidden text-cocina-piloto">Campana TEKA*<p> 
                            <p id="text-cocina-salTop" class="is-hidden text-cocina-piloto">Salpicadero con TOP porcelanato*<p> 
                            <p id="text-cocina-cubCoc" class="is-hidden text-cocina-piloto">Cubiertas de cocina TOP porcelanato*<p> 
                            <p id="text-cocina-encVitro" class="is-hidden text-cocina-piloto">Encimera vitrocer·mica de 4 platos TEKA<p> 
                            <p id="text-cocina-cajonCub" class="is-hidden text-cocina-piloto">Cajones para cubiertos*<p> 
                            <p id="text-cocina-mIta2" class="is-hidden text-cocina-piloto">Muebles italianos con cierre suave*<p> 
                            <p id="text-cocina-condimentero" class="is-hidden text-cocina-piloto">Condimenteros*<p> 
                            <p id="text-cocina-cajonOlla" class="is-hidden text-cocina-piloto">CajÛn para ollas*<p> 
                            <p id="text-cocina-espLava" class="is-hidden text-cocina-piloto">Espacio para lavavajillas*<p> 
                            <p id="text-cocina-griferia" class="is-hidden text-cocina-piloto">GriferÌa MK<p>
                            <p id="text-cocina-espRefri" class="is-hidden text-cocina-piloto">Espacio para refrigerador side by side*<p>
                            <p id="text-cocina-hornoMicro" class="is-hidden text-cocina-piloto">Tower con horno y microondas TEKA apanelables*<p>

                        </div>


                 

                        <div class="slide ">

                            <p id="text-living-puerta" class="is-hidden text-living-puerta">Puerta corredera en acceso a cocina*<p> 
                            <p id="text-living-separador" class="is-hidden text-living-separador">Separador con pilares de madera*<p>

                            <img  usemap="#image-map-6" src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Living_Cocina.jpg" alt="Edificio Dalí Loga">
                        
            
                            <map name="image-map-6">
                                <area class="area-living-puerta" alt="Puerta corredera en acceso a cocina*" title="Puerta corredera en acceso a cocina*" href="" coords="164,241,13" shape="circle">
                                <area class="area-living-separador" alt="Separador con pilares de madera*" title="Separador con pilares de madera*" href="" coords="282,144,14" shape="circle">
                            </map>
                                                
                        
                        </div>




                        <div class="slide ">

                            <p id="text-banop-lavamanos" class="is-hidden text-banop-lavamanos">2 Muebles lavamos Individuales MK*<p> 
                            <p id="text-banop-puerta" class="is-hidden text-banop-puerta">Shower door*<p>
                            <p id="text-banop-ducha" class="is-hidden text-banop-ducha">Ducha superior y columna de Ducha*<p>
                            
                            <img  usemap="#image-map-7" src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Bano_principal.jpg" alt="Edificio Dalí Loga">
                        
                            <map name="image-map-7">
                                <area class="area-banop-lavamanos"alt="2 Muebles lavamos  Individuales MK*" title="2 Muebles lavamos  Individuales MK*" href="" coords="270,309,21" shape="circle">
                                <area class="area-banop-puerta" alt="Shower door" title="Shower door" href="" coords="574,295,12" shape="circle">
                                <area class="area-banop-ducha" alt="Ducha superior y columna de  Ducha*" title="Ducha superior y columna de  Ducha*" href="" coords="495,196,16" shape="circle">
                            </map>


                        
                        </div>
                            

                        <div class="slide ">
                            <p id="text-bano-lavamanos" class="is-hidden text-bano-lavamanos">Lavamanos MK*<p> 
                            <p id="text-bano-puerta" class="is-hidden text-bano-puerta">Shower door*<p>
                            <p id="text-bano-ducha" class="is-hidden text-bano-ducha">Ducha superior y columna de Ducha*<p>
                            <img usemap="#image-map-8" src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Bano.jpg" alt="Edificio Dalí Loga">
                        
                            <map name="image-map-8">
                                <area class="area-bano-ducha " alt="Columna de ducha" title="Columna de ducha" href="" coords="394,160,13" shape="circle">
                                <area class="area-bano-puerta" alt="Shower door*" title="Shower door*" href="" coords="395,267,14" shape="circle">
                                <area class="area-bano-lavamanos" alt="Lavamanos MK*" title="Lavamanos MK*" href="" coords="631,313,14" shape="circle">
                            </map>
                        
                        </div>


  


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