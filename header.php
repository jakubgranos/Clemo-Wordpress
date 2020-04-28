<?php
/*
  Template for Header
  @package Clemo  
*/?>

<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
  <meta <?php bloginfo('charset')?>>
  <meta name="description" content="<?php bloginfo( 'description' );?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' )?> <?php wp_title();?></title>
  <?php wp_head();?>
</head>
<body>
<div data-toggle="navigation-block"></div>
<header class="page-header">
  <?php require_once 'theme-parts/sections/navigation/navigation-container.php'; ?>
</header>
