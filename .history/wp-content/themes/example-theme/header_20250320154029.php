<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>
<div class="container">
    <header class="page-header">
        <div class="header-top-left">
            <img src="//place-hold.it/200x100?text=Logo" alt="Logo">
        </div>
        <div class="header-top-right">
           <?php wp_nav_menu(["theme-location" => "main-menu", "container" => "nav"]); ?>
        </div>
    </header>
