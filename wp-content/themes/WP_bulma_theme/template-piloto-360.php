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
    <div class="hero-body">
        <div class="container"> 
            <div class="columns has-text-white "  >
                <div class="column is-5 is-offset-1-desktop is-half mt-20">
                    <h2 class="f_ml is-size-3 ">PILOTO 360°</h2>

                    <div class="is-flex">
                        <h2 class="f_ml is-size-3 ">DEPTO. A</h2>
                        <img class="arrow-blue is-centered-mobile" src="<?php echo get_template_directory_uri();?>/assets/img/arrow_blue.png">
                   </div>
                  
                </div>
                <div class="column is-6 has-text-right-desktop   has-text-centered-mobile mt-20">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/buttom_play.png" alt="play">
                    <p class="f_bozon_r is-size-14 pt-40 " >No importa dónde estés, ni lo que estés haciendo...<br>
                    Visualiza tu nueva vida, desde la comodidad de tu hogar</p>
                    <button class="cotizar-1 f_bozon_r">Cotizar</button>
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
                    <h2 class="f_ml mt-60 is-size-4">VIVE LA VIDA... ¡DESDE LOS MÁS ALTO</h2>
                    <br>
                    <p class="f_bozon_r is-size-14">¿Quieres descubrir lo que tiene Dalí Península para ti? 
                    Conoce una experiencia única en diseño y arquitectura, con 
                    espacios perfectos para tu vida cerca del mar.
                    </p>
                </div>
             

            </div>    

            <div class="columns is-centered is-vcentered">
                 <div class="column is-2 has-text-white has-text-centered  ">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/float-buttom.png" alt="play">
                    <p>Haz un zoom acá y agranda tus expectativas</p>
                </div>
                <div class="column is-10 has-text-white has-text-centered  ">

                    <div id="galeria-piloto-tipo-a" >

                        <div class="slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Dalí_Dorm_Principal.jpg" alt="Edificio Dalí Loga"
                            data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Dalí_Dorm_Principal.jpg">
                        </div>

                        <div class="slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Dalí_Living_Comedor.jpg" alt="Edificio Dalí Loga"
                            data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Dalí_Living_Comedor.jpg">
                        </div>
                   
                        <div class="slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Dali_Terraza.jpg" alt="Edificio Dalí Loga"
                            data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/galeria_depto_tipo_A/Dali_Terraza.jpg">
                        </div>
                      
                      

                    <!--
                        <div class="slide ">
                            <p class="is-size-6 f_ml">Plantas preliminares</p>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/planta-b/planta-B2-1.png" alt="Edificio Dalí Loga"
                            data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/planta-b/planta-B2-1.png">
                        </div>

                       
                        <div class="slide">
                            <p class="is-size-6 f_ml">Plantas preliminares</p>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/planta-a/PISO15_Dpto A1.png" alt="Edificio Dalí Loga"
                            data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/planta-a/PISO15_Dpto A1.png">
                        </div>

                        <div class="slide  ">
                            <p class="is-size-6 f_ml">Plantas preliminares</p>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/planta-b/PISO15_Dpto B1.png" alt="Edificio Dalí Loga"
                            data-zoom-image="<?php echo get_template_directory_uri();?>/assets/img/planta-b/PISO15_Dpto B1.png">
                        </div>

                    -->
                    </div>


                </div>
            </div> 
            
            
            <div class="columns is-centered">
                <div class="column is-one-fifth">                        
                    <button class="cotizar f_bozon_r">Cotizar</button>  
                </div>
            </div>

       </div>
    </div>
</section>



<?php get_footer(); ?>