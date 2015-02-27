<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>

  <?php if($page->id() == 'home'): ?>
    <?php echo js('assets/js/build/home.js') ?>
  <?php else: ?>
    <?php echo js('assets/js/build/production.min.js') ?>
  <?php endif ?>

  <?php if($page->heroCover() !='' || $page->heroCover() !='0' || $page->customColor() !='' || $page->customColor() !='0'): ?>
  <style><?php snippet('inlinestyles') ?></style>
  <?php endif ?>

  <?php snippet('artdirection') ?>
  <?php snippet('typekit') ?>
  <?php snippet('analyticstracking') ?>

</head>
<body>

  <header class="header" role="banner" id="top">
    <div>
      <a href="#" id="nav-toggle" class="nav-toggle" aria-hidden="false">Menu</a>
      <a class="logo" href="<?php echo url() ?>">
        <h1>Benjamin Sweeney</h1>
      </a>
    </div>
    <?php snippet('menu') ?>
  </header>

