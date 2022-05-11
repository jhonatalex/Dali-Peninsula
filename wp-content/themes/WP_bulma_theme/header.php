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
                <img src="<?php echo get_template_directory_uri();?>/assets/img/logo_loga.png" alt="Condominio Inspira" class="logo">
            </a>
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="navbarExampleTransparentExample" class="navbar-menu has-background-grey-light">
            <div class="is-flex is-justify-content-space-between">

                <img src="<?php echo get_template_directory_uri();?>/assets/img/logo_loga.png" alt="Loga Inmobiliaria" class="img-max-50">

                <a class="navbar-item  is-size-7 has-text-weight-bold" href="#header">HOME |</a>
                <a class="navbar-item  is-size-7 has-text-weight-bold" href="#header">PROYECTO |</a>
                <a class="navbar-item  is-size-7 has-text-weight-bold" href="/">TERMINACIONES |</a>
                <a class="navbar-item  is-size-7 has-text-weight-bold" href="/">DEPTO. A |</a>
                <a class="navbar-item  is-size-7 has-text-weight-bold" href="#contacto">CONTACTO |</a>
                
                <div id="logo-desktop" class=" logo-menu">
                <a class="" href="#">
                    <img src="<?php echo get_template_directory_uri();?>/assets//img/logo_dali.png" alt="Dali Peninsula" class="logo img-max-50">
                </a>
                </div>
            </div>
        </div>
    </nav>