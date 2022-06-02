<?php
/**
 * Template Name: Proyecto
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

<!-- SECCION  -->
<section id="header-proyecto">
    <div class="hero-body" >
        <div class="container">
            <div class="columns">
                <div class="column mr-30 is-4 is-offset-8-tablet pt-full-20 has-text-white">
                    <div class="columns is-multiline">
                        <div class="column is-full">
                            <p class="f_bozon_r pt-full-50 has-text-justified interlineado-1">Hemos creado una experiencia diferente en el
                            mejor sector de Cavancha. Porque Dalí Península
                            es lo nuevo en diseño y arquitectura, ideal para las
                            personas que buscan lo mejor para su día a día.<p>
                        </div>
                        <div class="column interlineado-3 is-full has-text-right">
                            <h2 class="f_ml is-size-3">EXCLUSIVIDAD</h2>
                            <h3 class="f_ml is-size-3">DISEÑO</h3>
                            <h3 class="f_ml is-size-3">MODERNIDAD</h3>                
                            <h3 class="f_mmI is-size-5">_______ TODO A TUS PIES</h3>
                        </div>                        
                    </div>                      
                </div>         
            </div>
        </div>
    </div>
</section>


<!-- SECCION 2 PENHOUSE-->
<section class="hero has-background-black">
    <div class="hero-body ">
        <div class="container">
            <div class="columns">
                <div class="column is-10 is-offset-1">
                    <div class="columns has-text-white is-8">

                        <div class="column  pt-40 ">
                            <h2 class="f_neutra is-size-5">2, 3 & 4 <br>  Dormitorios.</h2>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/line_blue.png" alt="line">

                            <h2 class="f_neutra is-size-5">Penthouses</h2><br>
                            <br>
                            <h2 class="f_mmI is-size-5 p"> AZOTEAS PRIVADAS EN PISO 17</h2>
                            <h2 class="f_mmI is-size-5"> 52 ESTACIONAMIENTOS</h2>

                        
                            <h2 class="f_mmI is-size-5 pt-full-34"> 3 DEPTOS. POR PISO DEL 2 AL 13</h2>
                            <h2 class="f_mmI is-size-5"> 2 DEPTOS. POR PISO DEL 14 AL 16</h2>


                        </div>


                        <div class="column ">
                            <img  src="<?php echo get_template_directory_uri();?>/assets/img/walkin_beach.png" alt="line">
                        </div>

                    </div>

                    <div class="columns has-text-white">
                        <div class="column pt-40 ">
                            <img  src="<?php echo get_template_directory_uri();?>/assets/img/people_back.png" alt="line">
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</section>





<!-- SECCION 4 MAPA -->
<section id="pisos"  class="has-background-black">
    <div class="hero-body" >
        <div class="container">

            <div class="colums">
                <div class="column is-10 is-offset-1">

                    <div class="columns is-vcentered  ">
                        <div class="column has-text-white">

                                <div class="columns">
                                    <div class="column is-7">
                                        <p class="f_mmI is-size-5">DEPTOS. DEL PISO 16 CON AZOTEA PRIVADA <br class="is-hidden-mobile">
                                            /QUINCHO + HOT TUB EN PISO 17</p>
                                    </div>
                                    <div class="column is-5">
                                        <p class="is-size-6 f_bozon_r has-text-right">Todos nuestros departamentos cuentan con visa <br class="is-hidden-mobile"> privilegiada al mar.
                                            Y queremos que pronto <br class="is-hidden-mobile"> la puedas ver con tus propios ojos.</p>
                                    </div>

                                </div>

                                <div class="columns pt-60">
                                    <div class="column is-7 is-size-5">
                                        <div class="is-flex">
                                            <i style="color:#005d75" class="fa-solid fa-location-dot pr-10"></i>
                                            <p class="f_ml">CAPITÁN ROBERTO PÉREZ 0704</p>
                                        </div>
                                    </div>
                                    <div class="column is-5">
                                        <div class="is-flex is-justify-content-right">
                                            <img class="arrow-blue alinea-t-i" src="<?php echo get_template_directory_uri();?>/assets/img/arrow_blue_right.png">
                                            <h4 class="is-size-2 is-size-5-mobile f_ml espacio2">LUGARES</h4>                                            
                                        </div>
                                        <h4 class="is-size-2 is-size-5-mobile f_ml has-text-right espacio2">DE INTERÉS</h4>

                                        <p class="is-size-6 f_bozon_r has-text-right">Todo lo que necesitas… a pasos de tu hogar <br class="is-hidden-mobile">
                                            ¿Quieres pasar una tarde en la playa o comer en <br class="is-hidden-mobile">los mejores restaurantes? Conoce tus nuevos <br class="is-hidden-mobile">
                                            lugares favoritos de Iquique.</p>
                                    </div>

                                </div>


                                <div class="columns is-vcentered has-text-centered">
                                    <div class="column has-text-white  ">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/mapa.png" alt="play">
                                    </div>

                                </div>


                                <div class="columns has-text-left"> 
                                    <div class="column has-text-white  f_ml fs-14">
                                        <p class="interlineado-2 has-text-success">Puntos Urbanos</p>
                                        <ul>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">1 &nbsp Caleta Cavancha</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">2 &nbsp Playa Cavancha</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">3 &nbsp Dreams Iquique</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">4 &nbsp Estadio Municipal</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">5 &nbsp Jumbo</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">6 &nbsp Lider</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">7 &nbsp Mall PLaza</li>
                                        </ul>                                     
                                    </div>
                                    <div class="column has-text-white  f_ml fs-14">
                                        <p class="interlineado-2 has-text-success">Hoteles</p>
                                        <ul>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">8 &nbsp Hotel Cavancha</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">9 &nbsp Palm Hostal</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">10 &nbsp Terrado</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">11 &nbsp Hilton Garden</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">12 &nbsp Holiday Inn</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">13 &nbsp Terrado Club</li>
                                        </ul> 
                                    </div> 
                                    <div class="column has-text-white f_ml fs-14">
                                        <p class="interlineado-2 has-text-success">Restaurantes</p>
                                        <ul>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">14 &nbsp Club Nautico</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">15 &nbsp Otaku Lounge</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">16 &nbsp Cantaba La Rana</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">17 &nbsp El Viejo y El Mar</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">18 &nbsp Sidharta Lounge</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">19 &nbsp Restaurante Arirang</li>
                                        </ul>                          
                                    </div>
                                    <div class="column  has-text-white  f_ml fs-14">
                                        <p class="interlineado-2 has-text-success">Puntos Urbanos</p>
                                        <ul>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">20 &nbsp La Picá</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">21 &nbsp Santorini Restobar</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">22 &nbsp Check Point Restobar</li>
                                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/BULLETS.svg" class="alinea-t-i" width="25px" alt="play">23 &nbsp Heladería El Pingüino</li>
                                        </ul>                                    
                                    </div>
                                </div>


                                <div class="columns va-bottom">
                                    <div class="column is-11-mobile has-text-white ">
                                        <div class="is-flex c-ver">
                                            <h2 class="orientacion f_mh is-size-2">MASTERPLAN</h2>
                                            <img  class="master-plan"src="<?php echo get_template_directory_uri();?>/assets/img/master_plan.png" alt="play">
                                        </div>
                                    </div>
                                    <div class="column has-text-centered pb-10"> 
                                        
                                    <a href="beta/Dali/#SeccionContacto">
                                       <button class="cotizar f_bozon_r">Cotizar</button>  
                                    </a> 

                                    </div>
                                </div>

                            

                        </div>
                    </div>





                </div>
            </div>



        </div>
    </div>
</section>



<?php get_footer(); ?>
