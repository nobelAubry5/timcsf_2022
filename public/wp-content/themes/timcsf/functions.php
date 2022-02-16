<?php
//ajout de l'utilisation de la sidebar par defaut
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
    'menu_name'               => __('Responsables'),
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
    
    function tim_projet_custom_post () {
        $labels = array(
            'name'               => _x('Projets de la TIM', 'Post Type General Name'),
            'singular_name'               => _x('Projets', 'Post Type Singular Name'),
            'menu_name'               => __('Projets'),
            'all_items'               => __('Tous nos projets'),
            'view_item'               => __('Voir nos projets'),
            'add_new_item'               => __('Ajouter un nouveau projet'),
            'add_new'               => __('Ajouter'),
            'edit_item'               => __('Éditer un projet'),
            'update_item'               => __('Modifier un projet'),
            'search_items'               => __('Rechercher un projet'),
            'not_found'                  => __('Non trouvé'),
            'not_found_in_trash'         => __('Non trouvé dans la corbeille'),
        );
        
        $args = array(
            'label' =>__('Nos projets'),
            'description' =>__('Tous nos projets'),
            'labels' =>$labels,
            'supports' => array('title', 'thumbnail'),
            'hierarchical' =>false,
            'public' =>true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'projets'),
        );
        register_post_type('projets', $args);
    }
    
    function tim_temoignages_custom_post () {
        $labels = array(
            'name'               => _x('Témoignages de la TIM', 'Post Type General Name'),
            'singular_name'               => _x('Témoignages', 'Post Type Singular Name'),
            'menu_name'               => __('Témoignages'),
            'all_items'               => __('Tous nos témoignages'),
            'view_item'               => __('Voir nos témoignages'),
            'add_new_item'               => __('Ajouter un nouveau témoignage'),
            'add_new'               => __('Ajouter'),
            'edit_item'               => __('Éditer un témoignage'),
            'update_item'               => __('Modifier un témoignage'),
            'search_items'               => __('Rechercher un témoignage'),
            'not_found'                  => __('Non trouvé'),
            'not_found_in_trash'         => __('Non trouvé dans la corbeille'),
        );

        $args = array(
            'label' =>__('Nos témoignages'),
            'description' =>__('Tous nos témoignages'),
            'labels' =>$labels,
            'supports' => array('title', 'thumbnail'),
            'hierarchical' =>false,
            'public' =>true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'témoignages'),
        );
        register_post_type('témoignages', $args);
    }
    function tim_textes_custom_post () {
        $labels = array(
            'name'               => _x('Textes du site de la TIM', 'Post Type General Name'),
            'singular_name'               => _x('Textes', 'Post Type Singular Name'),
            'menu_name'               => __('Textes'),
            'all_items'               => __('Tous nos textes'),
            'view_item'               => __('Voir nos textes'),
            'add_new_item'               => __('Ajouter un nouveau textes'),
            'add_new'               => __('Ajouter'),
            'edit_item'               => __('Éditer un texte'),
            'update_item'               => __('Modifier un texte'),
            'search_items'               => __('Rechercher un texte'),
            'not_found'                  => __('Non trouvé'),
            'not_found_in_trash'         => __('Non trouvé dans la corbeille'),
        );
        
        $args = array(
            'label' =>__('Nos textes'),
            'description' =>__('Tous nos textes'),
            'labels' =>$labels,
            'supports' => array('title', 'thumbnail'),
            'hierarchical' =>false,
            'public' =>true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'textes'),
        );
        register_post_type('textes', $args);
    }


add_action('init', 'tim_responsable_custom_post', 0 );
add_action('init', 'tim_projet_custom_post', 0 );
add_action('init', 'tim_temoignages_custom_post', 0 );
add_action('init', 'tim_textes_custom_post', 0 );
//*********************************************************************************************************
?>