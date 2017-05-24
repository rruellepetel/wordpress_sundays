<!DOCTYPE html>
<html lang=fr>
<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>">
    <title>Sundays-Sass</title>
</head>
<body>
    <header>
        <a href="#"><i class="fa fa-search"></i></a>
        <a href="#"><span class="fa fa-chevron-down"></span></a>
        <nav>
            <ul>
                <li><a href="<?php echo get_home_url()?>">Catalog</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Stores</a></li>
                <li><a href="<?php echo get_home_url('template_blog.php')?>">Blog</a></li>
            </ul>
        </nav>
        <section class="brand">
            <h1>Sundays</h1>
            <span class="slogan">We craft ocean friendly apparel</span>
            <a href="#" class="btn">Browse Our Products</a>
        </section>
    </header>
