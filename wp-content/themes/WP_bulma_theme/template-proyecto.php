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


<!-- SECCION 2 DISEÑO-->
<section class="hero has-background-black">
    <div class="hero-body ">
        <div class="container">

            <div class="columns has-text-white">

                <div class="column is-5-desktop is-offset-2-desktop ">
                    <h2 class="f_ml is-size-4 espacio3">EL DISEÑO Y LA VANGUARDIA EN UN SOLO LUGAR</h2>
                    <img  src="<?php echo get_template_directory_uri();?>/assets/img/line_white.png" alt="line">
                    <p class="has-text-justified">Respira hondo, siente la desconexión y disfruta del relajo que solo te pueden dar las olas de
                         Iquique. <br> <br> Edificio Dalí Península es un proyecto boutique que cuenta con 16 pisos y tan sólo
                          42 departamentos. Ubicado frente a la costa del Pacífico, vas a experimentar la tranquilidad
                           y desconexión a otro nivel.</p>
                </div>
                <div class="column is-5-desktop is-offset-1-desktop pt-40 ">
                    <h2 class="f_neutra">2, 3 & 4 <br>  Dormitorios.</h2>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/line_blue.png" alt="line">

                    <h2 class="f_neutra">Penthouses</h2>
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
                <div class="column is-three-fifths is-offset-one-fifth has-text-white  has-text-centered ">

                    <div class="columns  has-text-centered">
                        <div class="column is-3  is-offset-2 has-text-white  ">
                            <button class="button-blue">Piso 2 al 13</button>
                        </div>
                        <div class="column is-3 has-text-white  ">
                            <button class="button-gray">Piso 14 y 15*</button>
                        </div>
                        <div class="column is-3 has-text-white  ">
                            <button class="button-gray">Penthouses</button>
                        </div>

                    </div>


                    <div class="columns is-vcentered has-text-centered">
                        <div class="column has-text-white  ">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/piso_2_13.png" alt="play">
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


<!-- SECCION 4 MAPA -->
<section id="pisos"  class="has-background-white">
    <div class="hero-body" >
        <div class="container">
            <div class="columns is-vcentered has-text-centered ">
                <div class="column is-three-fifths is-offset-one-fifth has-text-white  has-text-centered ">

                    <div class="columns  has-text-centered">
                        <div class="column is-3  is-offset-2 has-text-white  ">
                            <button class="button-blue">Piso 2 al 13</button>
                        </div>
                        <div class="column is-3 has-text-white  ">
                            <button class="button-gray">Piso 14 y 15*</button>
                        </div>
                        <div class="column is-3 has-text-white  ">
                            <button class="button-gray">Penthouses</button>
                        </div>

                    </div>


                    <div class="columns is-vcentered has-text-centered">
                        <div class="column has-text-white  ">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/piso_2_13.png" alt="play">
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



<?php get_footer(); ?>
