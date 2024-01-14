<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Jet IT">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/grafika/favicon.ico">

        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
        
        <header class="container">
            <div id="logo">
                <a id="grafika" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/grafika/logo.gif" width="82" height="94" alt="<?php bloginfo('name'); ?>" /></a>
                <div id="txt">
                    <a class="nazwa" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
                    <a class="tytul" href="<?php echo site_url(); ?>"><?php bloginfo('description'); ?></a>
                </div>
            </div>  
            
            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'primary-menu nav navbar-nav',
                ));
                ?> 
            </nav>
            <div id="icon-menu">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>            
            
        </header>

        <main class="container">