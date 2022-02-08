<?php
//ajout de l'utilisation de la sidebar par defaut
if(function_exists('register_sidebar')){
    $args = array(
        'name' => __('Ma barre latérale', 'theme_text_domain'),
        'id'=> 'unique-sidebar-id' , //id doit etre en minuscules
        'description' => 'Barre latérale de navigation',
        'class'=>'',
        'before_widget'=>'<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title'=> '<h2 class="widgettitle">',
        'after_title' => '</h2>'
    );
    register_sidebar($args);
}
if(function_exists('register_nav_menus')){
    register_nav_menus(
        array(
            'principal' => 'Menu principal',
            'secondaire' => 'Menu secondaire'
        )
    );
}
function tim_responsable_custom_post () {
$labels = array(
    'name'               => _x('Responsable de la TIM', 'Post Type General Name'),
    'singular_name'               => _x('Responsables', 'Post Type Singular Name'),
    'menu_name'               => __('Responsables 2018'),
    'all_items'               => __('Tous nos responsables'),
    'view_item'               => __('Voir nos responsables'),
    'add_new_item'               => __('Ajouter un nouveau responsable'),
    'add_new'               => __('Ajouter'),
    'edit_item'               => __('Éditer un responsable'),
    'update_item'               => __('Modifier un responsable'),
    'search_items'               => __('Rechercher un responsable'),
    'not_found'                  => __('Non trouvé'),
    'not_found_in_trash'         => __('Non trouvé dans la corbeille'),
);

$args = array(
    'label' =>__('Nos responsables'),
    'description' =>__('Tous nos responsables'),
    'labels' =>$labels,
    'supports' => array('title', 'thumbnail'),
    'hierarchical' =>false,
    'public' =>true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'responsables'),
);
register_post_type('responsables', $args);
}

add_action('init', 'tim_responsable_custom_post', 0 );
//*********************************************************************************************************
?>