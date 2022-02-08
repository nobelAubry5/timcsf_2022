<?php
/* Front Page gabarit */
//Appel au gabarit de l'entete
get_header();
?>
<?php //Contenu de la page d'accueil
    if(have_posts()):
    while(have_posts()): the_post();?>
<div class="article">
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
</div>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif;
?>
<?php
    if(get_option('show_on_front')=='posts'){
        include(get_home_template());
    }
    else
    {
        include(get_home_template('page', 'accueil'));
    }
?>

<?php
    //Appel au gabarit du pied de page
get_footer();
?>
