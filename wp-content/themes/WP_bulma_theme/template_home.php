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
    <div class="hero-body">
        <div class="container"> 
            <div class="columns is-centered " id="header_title" >
                <div class="column  title_header has-text-centered  ">
                    <h3 ><span>DESCUBRE</span> UNA<h2> 
                    <h2>NUEVA MIRADA A LA</h2>
                    <h1 >EXCLUSIVIDAD</h1>
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
                <div class="column">
                    <h2>EL DISEÑO Y LA VANGUARDIA EN UN SOLO LUGAR</h2>
                    <p>Respira hondo, siente la desconexión y disfruta del relajo que solo te pueden dar las olas de
                         Iquique. Edificio Dalí Península es un proyecto boutique que cuenta con 16 pisos y tan sólo
                          42 departamentos. Ubicado frente a la costa del Pacífico, vas a experimentar la tranquilidad
                           y desconexión a otro nivel.</p>
                </div>
                <div class="column">
                    <h2>2, 3 & 4 <br>  Dormitorios.</h2>
                    <h2>Penthouses</h2>
                </div>
            </div>

           
        </div>
    </div>
</section>

<!-- SECCION 3 PILOTO VIRTUAL -->
<section>
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <!-- foto -->
                <div class="column"></div>

                <!-- descripcion -->
                <div class="column"></div>
            </div>
        </div>
    </div>
</section>

<!-- perspectivas -->
<section class="hero">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column">

                </div>
            </div>
        </div>
    </div>
</section>








<?php get_footer(); ?>
