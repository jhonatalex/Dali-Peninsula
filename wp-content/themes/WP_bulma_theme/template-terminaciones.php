
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
            <div class="columns is-centered " id="header_title" >
                <div class="column is-6 is-offset-4 title_header has-text-centered  has-text-white">
                    <h3 class="tutiloTerminaciones">DISEÑO<h3>
                    <h3 class="tutiloTerminaciones"><i class="fa-solid fa-angle-right"></i>UNICO<h3> 
                    <p class="parrafoTitulo">Terminaciones de primer nivel. Y un departamento <br> 
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
                            <p>Porcelanato MK en todo el departamento.</p>
                            <p>Puertas altura de piso a cielo.</p>
                            <p>Ventanas de PVC.</p>
                            <p>Terrazas con baranddas de cristal.</p>
                        </div>
                        <div class="column domoticaEnfocada">
                            <h2>DOMOTICA ENFOCADA</h2>
                            <h2>______ EN SEGURIDAD</h2>
                            <p>Chapa digital en puerta de acceso departamento</p>
                            <p>2 Camaras de seguridad interior con monitoreo telefónico.</p>
                            <p>Puerto USB en dormitorio principal</p>
                        </div>                   
                    </div>
                    <div class="columns">  
                        <div class="column is-full">
                                <img src="<?php echo get_template_directory_uri();?> /assets/img/cocina_terminaciones.png" alt="">                    
                        </div>    
                    </div>

                    <div class="columns">                        
                        <div class="column">
                            <p>Modernos muebles de cocina italianos ARAN.</p>
                            <p>Artefactos de cocina TEKA.</p>
                            <p>Campana, horno eléctrico y microondas apanelables.</p>
                            <p>Encimeras vitrocerámicas.</p>
                            <p>Lavavajillas.</p>
                            <p>Cubiertas cocina TOP porcelanato. <br> Opcional.</p>
                        </div>
                        <div class="column">
                            <p>Full electric.</p>
                            <p>Cubiertas cocina TOP.</p>
                            <p>Espacio para refrigerador side by side en todos <br> los departamentos.</p>
                            <p>Todos los deptos. sobre 68 m2 con logia separada de la cocina.</p>
                        </div>
                    </div>                        

                    
                </div>
            </div>

            <div class="columns is-centered is-multiline">
                <div class="column is-one-fifth">                        
                    <button class="cotizar"><a class="enlace-cotizar" href="#">Cotizar</a></button>  
                </div>
            </div>



                

           
        </div>
    </div>
</section>







<?php get_footer(); ?>