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
    
    
    //à copier dans le fichier functions.php
    //Ce filtre retire les formats d'images que l'on ne veut pas utiliser
    add_filter( 'intermediate_image_sizes_advanced', 'prefix_remove_default_images' );
    function prefix_remove_default_images( $sizes ) {
//        unset( $sizes['thumbnail']); // 150px
//        unset( $sizes['medium']); // 300px
//        unset( $sizes['large']); // 1024px
        unset( $sizes['medium_large']); // 768px
        unset( $sizes['1536x1536'] );
        return $sizes;
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
    function tim_finissant_custom_post () {
        $labels = array(
            'name'               => _x('Finissants de la TIM', 'Post Type General Name'),
            'singular_name'               => _x('Finissants', 'Post Type Singular Name'),
            'menu_name'               => __('Finissants'),
            'all_items'               => __('Tous nos finissants'),
            'view_item'               => __('Voir nos finissants'),
            'add_new_item'               => __('Ajouter un nouveau finissant'),
            'add_new'               => __('Ajouter'),
            'edit_item'               => __('Éditer un finissant'),
            'update_item'               => __('Modifier un finissant'),
            'search_items'               => __('Rechercher un finissant'),
            'not_found'                  => __('Non trouvé'),
            'not_found_in_trash'         => __('Non trouvé dans la corbeille'),
        );
        
        $args = array(
            'label' =>__('Nos finissants'),
            'description' =>__('Tous nos finissants'),
            'labels' =>$labels,
            'supports' => array('title', 'thumbnail'),
            'hierarchical' =>false,
            'public' =>true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'finissants'),
        );
        register_post_type('finissants', $args);
    }
    
    
    
    add_action('init', 'tim_responsable_custom_post', 0 );
    add_action('init', 'tim_projet_custom_post', 0 );
    add_action('init', 'tim_temoignages_custom_post', 0 );
    add_action('init', 'tim_textes_custom_post', 0 );
    add_action('init', 'tim_finissant_custom_post', 0 );
//*********************************************************************************************************
?>

