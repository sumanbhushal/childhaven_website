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
</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Child Haven International Canada/Nepal</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="contact.html">About Us</a>
                        </li>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Projects <span class="caret"></span>
                            </a>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Shelter Home</a></li>
                                  <li><a href="#">School</a></li>
                                </ul>
                        </li>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Get Involved <span class="caret"></span>
                            </a>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Donation</a></li>
                                  <li><a href="#">Sponshor</a></li>
                                  <li><a href="#">Volunter with us</a></li>
                                </ul>
                        </li>
                        <li>
                            <a href="about.html">News & Events</a>
                        </li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>