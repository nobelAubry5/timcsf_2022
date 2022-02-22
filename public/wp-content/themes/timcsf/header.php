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
        <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/logo_tim.svg" alt="" style="width: 200px;" />
    </h1>
    
    
    
    <?php if(has_nav_menu('principal')){?>
        <nav class="navigation">
            <ul class="menu__ul">
                <li class="menu__li">
                    <?php wp_nav_menu(array('theme_location'=>'principal'));?>
                </li>
            </ul>
        </nav>
    <?php } ?>
    <style>
    .entete{
        color:white;
        max-width: 100%;
        margin: 0 auto;
    }
    .medias__sociaux{
        float: right;
    }
    .medias__sociaux img{
    }
    .navigation{
    
    }
    .menu__ul{
        
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
        list-style: none;
    }
    .menu__li{
        
        justify-content: space-between;
        /*padding-right: 70px;*/
        /*margin-left: 50px;*/
        /*padding-right: 50px;*/
    }
    </style>
    
</header>

<div class="contenu">



