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


<!-- SECCION 6 PERSPECTVA -->
<section id="header-proyecto">
    <div class="hero-body" >
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-5 is-offset-6-desktop has-text-white has-text-right title_box_perspectiva ">
                    <p class="f_bozon_r pt-full-50 interlineado-1">Hemos creado una experiencia diferente en el mejor sector de Cavancha. 
                        Porque Dalí Península es lo nuevo en diseño y arquitectura, ideal para
                         las personas que buscan lo mejor para su día a día.<p>

                    <h2 class="f_mb is-size-3 ">EXCLUSIVIDAD</h2>
                    <h3 class="f_ml">DISEÑO</h3>
                    <h3 class="f_ml">MODERNIDAD</h3>
            
                    <h3 class="f_mmI">TODO A TUS PIES</h3>
                </div>

         
            </div>
        </div>
    </div>
</section>


<!-- SECCION 2 PENHOUSE-->
<section class="hero has-background-black">
    <div class="hero-body ">
        <div class="container">

            <div class="columns has-text-white">

                 <div class="column is-5-desktop is-offset-1-desktop pt-40 ">
                    <h2 class="f_neutra">2, 3 & 4 <br>  Dormitorios.</h2>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/line_blue.png" alt="line">

                    <h2 class="f_neutra">Penthouses</h2>
                    <h2 class="f_neutra"> AZOTEAS PRIVADAS EN PISO 17</h2>
                    <h2 class="f_neutra"> 52 ESTACIONAMIENTOS</h2>

                    <br>
                    <br>
                    <br>
                    <h2 class="f_neutra"> 3 DEPTOS. POR PISO DEL 2 AL 13</h2>
                    <h2 class="f_neutra"> 2 DEPTOS. POR PISO DEL 14 AL 16</h2>
           

                </div>


                <div class="column is-5-desktop is-offset-1-desktop ">
                    <img  src="<?php echo get_template_directory_uri();?>/assets/img/walkin_beach.png" alt="line">
                </div>
             
            </div>

            <div class="columns has-text-white">
                <div class="column is0-11-desktop is-offset-1-desktop pt-40 ">
                <img  src="<?php echo get_template_directory_uri();?>/assets/img/people_back.png" alt="line">
                </div>
            </div>



        </div>
    </div>
</section>





<!-- SECCION 4 MAPA -->
<section id="pisos"  class="has-background-black">
    <div class="hero-body" >
        <div class="container">
            <div class="columns is-vcentered  ">
                <div class="column is-three-fifths is-offset-one-fifth has-text-white  ">

                    <div class="columns">
                        <div class="column is-5  is-offset-1 has-text-white  ">
                            <p>pCAPITÁN ROBERTO PÉREZ 0704</p>
                        </div>
                        <div class="column is-6 has-text-white  ">
                            <div class="is-flex">
                                <h4 class="is-size-3 is-size-5-mobile f_mh  espacio2">LUGARES</h4>
                                <img class="arrow-blue is-centered-mobile" src="<?php echo get_template_directory_uri();?>/assets/img/arrow_blue.png">
                            </div>
                            <h4 class="is-size-3 is-size-5-mobile  f_mh  espacio2">DE INTERÉS</h4>

                            <p class="is-size-13" >Todo lo que necesitas… a pasos de tu hogar
                                ¿Quieres pasar una tarde en la playa o comer en los mejores restaurantes? Conoce tus nuevos
                                lugares favoritos de Iquique.</p>
                        </div>

                    </div>


                    <div class="columns is-vcentered has-text-centered">
                        <div class="column has-text-white  ">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/mapa.png" alt="play">
                        </div>

                    </div>


                    <div class="columns is-vcentered has-text-centered">
                        <div class="column has-text-white  ">
                        Caleta Cavancha
                        Playa Cavancha
                        Dreams Iquique
                        Estadio Municipal
                        Jumbo
                        Lider
                        Mall PLaza
                        </div>
                        <div class="column has-text-white  ">
                        Hotel Cavancha
                        Palm Hostal
                        Terrado
                        Hilton Garden
                        Holiday Inn
                        Terrado Club
                        </div>

                        <div class="column has-text-white  ">
                        Club Nautico
                        Otaku Lounge
                        Cantaba La Rana
                        El Viejo y El Mar
                        Sidharta Lounge
                        Restaurante Arirang
                        </div>
                        <div class="column has-text-white  ">
                        La Picá
                        Santorini Restobar
                        Check Point Restobar
                        Heladería El Pingüino
                        </div>



                    </div>


                    <div class="columns is-vcentered has-text-centered">
                        <div class="column has-text-white  ">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/master_plan.png" alt="play">
                        </div>
                        <div class="column has-text-white  ">
                        <button class="cotizar"><a class="enlace-cotizar f_bozon_r" href="#">Cotizar</a></button>  
                        </div>
                    </div>

                    

                </div>
            </div>

        </div>
    </div>
</section>



<?php get_footer(); ?>
