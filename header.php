<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="apple-touch-icon-precomposed" href="<?= imgpath('square-transparent-500.png'); ?>">
<link rel="icon" type="image/x-icon" href="<?= imgpath('favicon.ico'); ?>" />
<link rel="stylesheet" type="text/css" href="<?= elixir('css/app.css');?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>