<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Solar</title>

  <?php wp_head(); ?>
</head>
<body>
  <header id="home" style="background: linear-gradient(to right, rgba(34, 185, 120, 0.5), rgba(0, 80, 131, 0.5) ), url(<?php the_field('backgroundpav', 28)?>);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 50%;">
    <div class="header-position container flex-container">
      <div class="logo ">
        <a class="roboto-bold" href="#logo"><?php the_field('logo', 28) ?></a>
      </div>
      <div class="burger">
        <div class="bar1"></div>
        <div class="bar1"></div>
        <div class="bar1"></div>
      </div>
      <nav>
        <?php wp_nav_menu(array(
          'menu'        => 'header-menu',
          'menu_class'  => 'navigation flex-container',
          'container'   => false
        )); ?> 
      </nav>
    </div>
    <div class="container middle-header">
      <div class="main-header">
        <h1><?php the_field('header1', 28) ?></h1>
      </div>
    </div>
  </header>