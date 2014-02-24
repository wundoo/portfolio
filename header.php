<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta name="viewport" content="initial-scale=1, width=device-width"> 

        <title><?php bloginfo( 'name' ); ?></title>   

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

        <?php wp_head(); ?>

    </head>
    <body>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <h1 class="hidden">Wundoo</h1>

        <header>

            <nav role="navigation">

                <h2 class="hidden">Menu Principal</h2>

                <a id="logo" href="#" title="home"></a>

                <ul id="menu">

                    <li><a href="#services">services</a></li>
                    <li><a href="#portfolio">portfolio</a></li>
                    <li><a href="#references">références</a></li>
                    <li><a href="#team">équipe</a></li>
                    <li><a href="#contact">contact</a></li>

                </ul>

                <ul id="social">

                    <li><a href="#" class="icon-in circle" title="Notre page Linkedin"></a></li>
                    <li><a href="#" class="icon-fb circle" title="Notre page Facebook"></a></li>

                </ul>

            </nav>

            <div id="banner" role="banner">

                <p>Nous concevons, développons et donnons vie à votre projet</p>

                <a class="button blue" href="#portfolio">découvrir nos réalisations</a>

                <a class="scroll icon-arrow" href="#services"></a> 

            </div>

        </header>