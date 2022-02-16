

</div>
<?php
    $post=get_post(668);
?>
<p><?php
        echo $post->post_content; ?>
</p>
<?php
    $lien=get_field_object("lien_responsable");
    $post_object=$lien["value"];

?>
<a href="--> <?= add_query_arg('Id', $post_object->ID, get_the_permalink(174)); ?>">
    <?php echo $post_object->post_title;?>
</a>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/liaisons/js/validation.js"></script>
<div class="questions__infos">

    <div class="question__étudiant">
        <!--Grilles de cours-->
        <h2><?php echo get_the_title(106);?></h2>
        <p><?php echo get_field("texte", 106) ?></p>
        <button class="btn-5">Contactez Benoit Frigon</button>
    </div>

    <div class="autres__questions">
        <!--S'inscrire au programme-->
        <h2><?php echo get_the_title(108);?></h2>
        <p><?php echo get_field("texte", 108) ?></p>
    </div>

</div>
<footer class="piedDePage">
    <?php if(has_nav_menu('secondaire')){?>
    <nav class="navigation__secondaire">
        <?php wp_nav_menu(array('theme_location'=>'secondaire'));?>
    </nav>
    <?php } ?>
    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/instagram.png" alt="" />
    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/twitter.png" alt="" />
    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/facebook.png" alt="" />
    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/linkedin.png" alt="" />
</footer>
<?php wp_footer(); ?>
<?php get_footer(); ?>
</body>
</html>
<style>

    .btn-5 {
        background-color: #0a4b78;
        color:white;
        padding: 10px 10px 10px 10px;
        border: 0 solid;
        box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
        outline: 1px solid;
        outline-color: rgba(255, 255, 255, .5);
        outline-offset: 0px;
        text-shadow: none;
        transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
    }

    .btn-5:hover {
        background-color: #C8D8E4;
        color:#2B6777;
        border: 1px solid #2B6777;
        box-shadow: inset 0 0 20px rgba(255, 255, 255, .5), 0 0 20px rgba(255, 255, 255, .2);
        outline-color: rgba(255, 255, 255, 0);
        outline-offset: 15px;
    }

    .questions__infos{
        max-width: 960px;
        margin: 0 auto;
        content: "";
        display: table;
        clear: both;
    }
    .question__étudiant{
        float: left;
        width: 50%;
        padding-left: 20px;
    }
    .autres__questions{
        float: left;
        width: 50%;
        padding:10px 20px 10px 20px;
    }
    @media screen and (max-width: 800px) {
        .question__étudiant, .autres__questions {
            width: 100%;
            padding: 0;
        }
    }
    .piedDePage{
        background-color: #0d242b;
        color:white;
    }
</style>