<?php
     add_action('wp_head', function (){
         die('Salut les gens');
     },10);

add_action('wp_head', function (){
    die('Au revoir les gens');
    },5);
     add_theme_support('title-tag');