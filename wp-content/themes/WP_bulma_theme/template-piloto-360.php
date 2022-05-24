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
                <div class="column is-half mt-25">
                    <h2 class="has-text-centered">PILOTO 360°</h2>
                    <h2 class="has-text-centered">DEPTO. A</h2>
                </div>
                <div class="column mt-40 has-text-right">
                    <p>No importa dónde estés, ni lo que estés haciendo...<br>
                    Visualiza tu nueva vida, desde la comodidad de tu hogar</p>
                    <button class="cotizar-1"><a class="enlace-cotizar-1" href="#">Cotizar</a></button>
                </div>
            </div>  
        </div>
    </div>
</section>

<!-- SECCION 2 DISEÑO-->
<section class="hero has-background-black">
    <div class="hero-body">
        <div class="container">

            <div class="columns is-centered is-multiline">
                <div class="column is-8  is-full">           
                    <h2>VIVE LA VIDA... ¡DESDE LOS MÁS ALTO</h2>

                </div>
                <div class="column is-5 is-full">                        
                    <button class="cotizar"><a class="enlace-cotizar" href="#">Cotizar</a></button>  
                </div>


            </div>    

           
        </div>
    </div>
</section>



<?php get_footer(); ?>
