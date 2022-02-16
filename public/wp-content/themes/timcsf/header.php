<?php
    ?>
<!doctype html>
<html <?php language_attributes(); ?>>
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/styles.css"/>
</head>
<body>
<header class="entete">
    <h1 class="entete__titre">
    <a href="<?php bloginfo("url");?>" title="<?php bloginfo("name");?>"><?php bloginfo("name");?></a>
    </h1>
    
    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/instagram.png" alt="" />
    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/twitter.png" alt="" />
    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/facebook.png" alt="" />
    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/linkedin.png" alt="" />
    
    <?php if(has_nav_menu('principal')){?>
        <nav class="navigation">
            <?php wp_nav_menu(array('theme_location'=>'principal'));?>
        </nav>
    <?php } ?>
    <style>
    .entete{
        color:white;
    }
    </style>
    
</header>

<div class="contenu">



