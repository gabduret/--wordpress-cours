<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
        <!-- Tout le contenu de l entête de mon site -->
			<div class="container">
				<div class="col-sm-12">
					<img src="<?= IMAGES_URL; ?>/photo.jpg" alt="<?php bloginfo("title");?>" class="logo">
					<h1><a href="<?php bloginfo("url"); ?>" title="<?php bloginfo("title"); ?>"><?php bloginfo("title"); ?></a></h1>
					<h3><?php bloginfo("description"); ?></h3>
				</div>
			</div>

        </header>