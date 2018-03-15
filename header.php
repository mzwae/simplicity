<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title><?php bloginfo('title'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
</head>

<body>
  <div id="container">
    <header>
      <h1>
        <?php bloginfo('name'); ?>
        <br>
        <span><?php bloginfo('description'); ?></span>

      </h1>
      <div id="search">
        <?php dynamic_sidebar('header-right') ?>
      </div>
    </header>
    <div style="clear:both;">

    </div>
    <nav class="main">
      <?php wp_nav_menu(); ?>
    </nav>
