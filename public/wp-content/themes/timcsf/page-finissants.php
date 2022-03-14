<?php
    /* Template name: Page des finissants */
    get_header(); //inclusion de l'entete
    echo "page-finissants.php";?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/finissants.css"/>
<h1> Finissants </h1>
<?php
    
    if (get_query_var('paged')) {
        $paged = get_query_var('paged');
    } else {
        $paged = 1;
    }
    
    $args = array(
        'post_type' => 'finissants',
        'posts_per_page' => 9,
        'post_status' => 'publish',
        'paged' => $paged, //indique la page
    );
    $the_query = new WP_Query( $args );
?>

<?php
    if($the_query->have_posts()){?>
        <ul class="liste__projets">
            <?php
                while($the_query->have_posts()) {?>
                    
                    <div class="carte__projet">
                        <?php
                            $the_query->the_post();
                        ?>
                        <?php //Photo obtient un tableau (sizes) contenant les différentes tailles d'image
                            $photo=get_field("image_du_finissant_1");
                            //ici on affiche seulement la taille thumbnail 1-11, 12-17, 18-24
                        ?>
                        <li class="puces__projets">
                        <a href="<?php the_permalink(); ?>" style="text-decoration: none;color: black">
                        <img src="<?php echo $photo["sizes"]["large"]; ?>" alt="<?php echo get_field("titre"); ?> " />
                        <div class="titre__projet"><?php echo get_field("prenom");?> <?php echo get_field("nom");?></div>
                        </a>
                        </li>
                       
                    
                    </div>
                    
                <?php }?>
        </ul>
    <?php }
?>
<div class="projets__pagination">
    <p class="pagination">
        <?php $lien = get_template_directory_uri()."/liaisons/images/picto-precedent.png";
            echo get_previous_posts_link('<img src=' .$lien .' width=40>');
        ?>
        <?php echo " ".$paged." de ".$the_query->max_num_pages." pages ";?>
        <?php $lien = get_template_directory_uri()."/liaisons/images/picto-suivant.png";
            echo get_next_posts_link('<img src=' .$lien .' width=40>', $the_query->max_num_pages);?>
    </p>
</div>

<?php
    get_footer();
?>

