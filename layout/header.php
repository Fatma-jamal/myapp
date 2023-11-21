<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>My App</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo ROOT_PATH; ?>assets/css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="<?php echo ROOT_PATH; ?>"><i class="bi bi-android2 text-white"></i> My App</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <?php 
                            $menuItem = '<li class="nav-item"><a class="nav-link" href="{{url}}">{{title}}</a></li>';
                            $submenuStart = '<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{title}}</a><ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">';
                            $submenuItem = '<li><a class="dropdown-item" href="{{url}}">{{title}}</a></li>';
                            $submenuEnd = '</li></ul>';
                            $params = array(
                                'menu-item' => $menuItem,
                                'submenu-start' => $submenuStart,
                                'submenu-item' => $submenuItem,
                                'submenu-end' => $submenuEnd,
                            );
                            myAppRenderMenu('main-menu',$params); ?>
                            <!-- <li class="nav-item"><a class="nav-link" href="<?php // echo ROOT_PATH; ?>">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="pricing">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link" href="faq">FAQ</a></li> -->
                            <!-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a><ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="blog">Blog Home</a></li>
                                    <li><a class="dropdown-item" href="post">Blog Post</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="nav-item" ><a class="nav-link" href="blog">Blog</a></li> -->
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="portfolio">Portfolio Overview</a></li>
                                    <li><a class="dropdown-item" href="project">Portfolio Item</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="nav-item" ><a class="nav-link" href="portfolio">Portfolio</a></li> -->
                
                            <?php if(!myAppIsUserSignedIn()){ ?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_PATH; ?>signin">Sign In</a></li>
                            <?php }else{ ?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_PATH; ?>account">Account</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_PATH; ?>signout">Sign Out</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>