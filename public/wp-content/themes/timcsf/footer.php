
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/footer.css"/>
</div>
<?php
    $post=get_post(668);
?>
<!--<p>--><?php
    //        echo $post->post_content; ?>
<!--</p>-->
<?php
    $lien=get_field_object("lien_responsable",106);
    $post_object=$lien["value"];

?>


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/liaisons/js/validation.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/liaisons/js/carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/liaisons/js/menu.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/liaisons/js/ficheProjet.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/liaisons/js/axeFormation.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/liaisons/json/messagesInscriptionValidation.json"></script>
<div class="questions__infos">

    <div class="question__étudiant">
        <!--Grilles de cours-->
        <h2><?php echo get_the_title(106);?></h2>
        <p><?php echo get_field("texte", 106) ?></p>
        <button class="formation__telecharger">
            <a href="<?php echo add_query_arg('ID', $post_object->ID, get_the_permalink(42)); ?>">Contactez
                <?php echo $post_object->post_title;?>
            </a>
        </button>
    </div>

    <div class="autres__questions">
        <!--S'inscrire au programme-->
        <h2><?php echo get_the_title(108);?></h2>
        <p><?php echo get_field("texte", 108) ?></p>
        <button class="formation__telecharger">
            <a href="<?php echo add_query_arg('ID', $post_object->ID, get_the_permalink(38)); ?>">Contactez
                Sylvain Lamoureux
            </a>
        </button>
    </div>

</div>
<footer class="piedDePage">
<div class="logo__cegep">
    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/logo_cegep.png" alt="" />
</div>
<!--    <div class="footer__menu">-->
<!--            --><?php //if(has_nav_menu('secondaire')){?>
<!--            --><?php //wp_nav_menu(array('theme_location'=>'secondaire'));?>
<!--        -->
<!--    -->
<!--    --><?php //} ?>
<!--    </div>-->
    
    <?php if (has_nav_menu('secondaire')){?>
        <?php wp_nav_menu(array('theme_location'=>'secondaire')); ?>
    <?php } ?>
    
    <div class="footer__medias">
    <a href="https://www.instagram.com/timcsf/"><img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/instagram.png" alt=""/></a>
    <a href="https://twitter.com/timcsf"><img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/twitter.png" alt="" /></a>
    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/facebook.png" alt="" /></a>
    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/linkedin.png" alt="" /></a>
    <br>
    </div>
    <small>Tous droits réservés © 2022.Réalisé par Aubry Nobel Niyonkuru
        Techniques d'intégration multimédia - Web et apps,
        Cégep de Sainte-Foy.</small>
</footer>
<?php wp_footer(); ?>
<?php get_footer(); ?>
</body>
</html>
<style>

</style>