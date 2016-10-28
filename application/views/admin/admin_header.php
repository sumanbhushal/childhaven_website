<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Child Haven Nepal</title>
    <link rel="shortcut icon" href="<?php echo base_url('application/images/favicon.jpg') ?>" type="image/x-icon"/>
    <?php echo link_tag("application/include/css/bootstrap.min.css") ?>
    <?php echo link_tag("application/include/css/main.css") ?>
    <?php echo link_tag("application/include/css/normalize.css") ?>
    <?php echo link_tag("application/include/css/jssor-slider.css") ?>
    <script src="<?php echo base_url('application/include/js/jquery-1.11.3.min.js') ?>"></script>
    <script src="<?php echo base_url('application/include/js/jssor.slider-21.1.5.mini.js') ?>"></script>
    <script src="<?php echo base_url('application/libraries/ckeditor/ckeditor.js') ?>"></script>
</head>
<body>
<section id="body" class="container">
<nav class="navbar navbar-default  navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin Panel</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><?php echo anchor('admin/logout','Logout')?></li>
      </ul>
    </div>
  </div>
</nav>