
<?php
/**
 * Template Name: Terminaciones
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
<section class="hero" id="header-terminaciones">
    <div class="hero-body">
        <div class="container"> 
            <div class="columns is-centered has-text-white" >
                <div class="column is-5  is-offset-5  has-text-right  pt-full-20">
                    <h3 class="f_ml is-size-2">DISEÑO<h3>
                    <div class="is-flex is-justify-content-right">
                        <img class="arrow-blue espaciado is-centered-mobile" src="<?php echo get_template_directory_uri();?>/assets/img/arrow_blue_right.png">
                        <h3 class="f_ml is-size-2">ÚNICO<h3>                        
                   </div>


                    
                    <p class="is-size-14 interlineado-1 f_bozon_r">Terminaciones de primer nivel. Y un departamento <br> 
                    que se crea a base de las ultimas tendencias... <br> 
                    En Dali Península nada es al azar.</p>                    
                </div>
            </div>  
        </div>
    </div>
</section>

<!-- SECCION 2 DISEÑO-->
<section class="hero has-background-black has-text-white">
    <div class="hero-body">
        <div class="container">

            <div class="columns is-centered is-multiline">
                <div class="column is-four-fifths">           
                    <div class="columns">
                        <div class="column">
                            <p class="f_bozon_r interlineado-2">Porcelanato MK en todo el departamento.</p>
                            <p class="f_bozon_r interlineado-2">Puertas altura de piso a cielo.</p>
                            <p class="f_bozon_r interlineado-2">Ventanas de PVC.</p>
                            <p class="f_bozon_r interlineado-2">Terrazas con baranddas de cristal.</p>
                        </div>
                        <div class="column domoticaEnfocada">
                            <h2 class="f_mbItalic">DOMÓTICA ENFOCADA</h2>
                            <h2 class="f_mbItalic">______ EN SEGURIDAD</h2>
                            <p class="f_bozon_r interlineado-2">Chapa digital en puerta de acceso departamento</p>
                            <p class="f_bozon_r interlineado-2">2 Camaras de seguridad interior con monitoreo telefónico.</p>
                            <p class="f_bozon_r interlineado-2">Puerto USB en dormitorio principal</p>
                        </div>                   
                    </div>
                    <div class="columns">  
                        <div class="column is-full">
                                <img src="<?php echo get_template_directory_uri();?> /assets/img/cocina_terminaciones.png" alt="">                    
                        </div>    
                    </div>

                    <div class="columns">                        
                        <div class="column">
                            <p class="f_bozon_r interlineado-2">Modernos muebles de cocina italianos ARAN.</p>
                            <p class="f_bozon_r interlineado-2">Artefactos de cocina TEKA.</p>
                            <p class="f_bozon_r interlineado-2">Campana, horno eléctrico y microondas apanelables.</p>
                            <p class="f_bozon_r interlineado-2">Encimeras vitrocerámicas.</p>
                            <p class="f_bozon_r interlineado-2">Lavavajillas.</p>
                            <p class="f_bozon_r interlineado-2">Cubiertas cocina TOP porcelanato. <br> Opcional.</p>
                        </div>
                        <div class="column">
                            <p class="f_bozon_r interlineado-2">Full electric.</p>
                            <p class="f_bozon_r interlineado-2">Cubiertas cocina TOP.</p>
                            <p class="f_bozon_r interlineado-2">Espacio para refrigerador side by side en todos <br> los departamentos.</p>
                            <p class="f_bozon_r interlineado-2">Todos los deptos. sobre 68 m2 con logia separada de la cocina.</p>
                        </div>
                    </div>                        

                    
                </div>
            </div>

            <div class="columns is-centered is-multiline">
                <div class="column is-one-fifth">                        
                    <button class="cotizar"><a class="enlace-cotizar f_bozon_r" href="#">Cotizar</a></button>  
                </div>
            </div>



                

           
        </div>
    </div>
</section>







<?php get_footer(); ?>