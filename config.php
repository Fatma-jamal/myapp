<?php

$config = array(
    'database' => array(),
    'menus' => array(
        'main-menu' => array(
            ROOT_PATH => 'Home',
            ROOT_PATH.'about' => 'About',
            ROOT_PATH.'contact' => 'Contact',
            ROOT_PATH.'pricing' => 'Pricing',
            '#products' => array(
                'Products' => array(
                    ROOT_PATH.'products/iphone' => 'iPhone',
                    ROOT_PATH.'products/ipod' => 'iPod',
                    ROOT_PATH.'products/ipad' => 'iPad',
                ),
            ),
            ROOT_PATH.'faq' => 'FAQ',
            ROOT_PATH.'blog' => 'Blog',
            ROOT_PATH.'portfolio' => 'Portfolio'
        ),
        'footer-menu' => array(
            ROOT_PATH.'privacy' => 'Privacy',
            ROOT_PATH.'terms' => 'Terms',
            ROOT_PATH.'contact' => 'Contact',
        ),
    ),
    'modules' => array('account','contact'),
    'themes' => array(
        'name' => "basic",
        "title" => "Basic",
        "discription" => "",
        'layouts' => array(
            "default" => array(),
        ),
    ),
    'routes' => array(),
);

// $menuItems = array();

// require_once('inc/app.php');

// addMenuItem('Home', ROOT_PATH);
// addMenuItem('About', 'about');
// addMenuItem('Contact', 'contact');
// addMenuItem('Pricing', 'pricing');
// addMenuItem('Faq', 'faq');
// addMenuItem('Blog', 'blog');
// addMenuItem('Portfolio', 'portfolio');