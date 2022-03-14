<?php
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/styles.css"/>
<!--<link rel="stylesheet" href="--><?php //echo get_template_directory_uri();?><!--/liaisons/css/menu.css"/>-->
<!--<script type="text/javascript" src="--><?php //echo get_template_directory_uri(); ?><!--/liaisons/js/menu.js"></script>-->
<head>
    <?php wp_head()?>
    <title>
        <?php bloginfo('name');
            if(is_home() || is_front_page()){?>
                | <?php bloginfo('description');
            }else{?>
                | <?php wp_title("",true);
            }?>
    </title>
    <meta charset="<?php bloginfo('charset');?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<!---->
<header role="banner" class="entete">
    <div class="conteneur">
        <div class="entete__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/logo_tim.png" alt="" class="entete__logo" />
        </div>
    <nav class="menu__principal">
        <div class="menu-menu-1-container">
            <ul id="menu-menu-1" class="menu">
                <li id="menu-item-176" class="menu-item menu-item-type-post_type menu-item-object-page"><?php wp_nav_menu(array('theme_location'=>'principal'));?></li>
            </ul>
        </div>
    </nav>
</header>


<div class="contenu">



