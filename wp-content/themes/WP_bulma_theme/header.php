<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php if(is_front_page() || is_home()){
      echo get_bloginfo('name');
    } else{
      echo wp_title('');
      echo " - ";
      get_bloginfo('name');
    }?>
  </title>
<!--   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css"> -->
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <?php wp_head(); ?>
</head>
<body>














    <nav id="site-navigation" role="navigation" class="navbar has-text-white p-13px has-background-white-light font-Metropolis_Light fixed">
        <div class="navbar-brand">
            <a class="is-hidden-desktop" href="#">
                <img  class="logo-menu-mobile" src="<?php echo get_template_directory_uri();?>/assets/img/logo_loga.png" alt="Loga Inmobiliaria" >
            </a>
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="flex-container-navbar pl-10">

                <div class="site-branding is-hidden-mobile">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo_loga.png" alt="Loga Inmobiliaria" class="img-max-50">
                </div>
               
                <div class="main-navigation is-flex-desktop f_ml_b has-text-black">
                    <a class="navbar-item  is-size-6 " href="/ByL/Dali-Peninsula/#header">HOME</a>
                    <a class="navbar-item  is-size-6 " href="/ByL/Dali-Peninsula/proyecto/">PROYECTO</a>
                    <a class="navbar-item  is-size-6 " href="/ByL/Dali-Peninsula/terminaciones/">TERMINACIONES</a>
                    <a class="navbar-item  is-size-6 " href="/ByL/Dali-Peninsula/depto-a/">DEPTO. A </a>
                    <a class="navbar-item  is-size-6 " href="/ByL/Dali-Peninsula/#SeccionContacto">CONTACTO</a>
                </div>    
                
               <!-- 
                <div class="main-navigation is-flex-desktop f_neutra_bold has-text-black">
                    <a class="navbar-item  is-size-6 " href="/beta/Dali/#header">HOME</a>
                    <a class="navbar-item  is-size-6 " href="/beta/Dali/proyecto/">PROYECTO</a>
                    <a class="navbar-item  is-size-6 " href="/beta/Dali/terminaciones/">TERMINACIONES</a>
                    <a class="navbar-item  is-size-6 " href="/beta/Dali/depto-a/">DEPTO. A </a>
                    <a class="navbar-item  is-size-6 " href="/beta/Dali/#SeccionContacto">CONTACTO</a>
                </div>    
                -->



               
                <div id="logo-desktop" class="logo-menu is-hidden-mobile">
                    <a class="" href="#">
                        <img src="<?php echo get_template_directory_uri();?>/assets//img/logo_dali.png" alt="Dali Peninsula" class="logo img-max-50">
                    </a>
                </div>
            </div>
        </div>
    </nav>

