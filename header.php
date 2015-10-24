<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
    
</head>
<body> 
<!-- Header general -->
<header>
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-wordpress.png" alt="Logo">
    <button><a href="#">Créez votre propre kit </a></button>
    <!-- On ajoutera peut-être un p la pour faire un petit sous-titre de blabla ;) -->
</header>