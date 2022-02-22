

</div>
<?php
    $post=get_post(668);
?>
<p><?php
        echo $post->post_content; ?>
</p>
<?php
    $lien=get_field_object("lien_responsable",106);
    $post_object=$lien["value"];

?>


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/liaisons/js/validation.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/liaisons/js/carousel.js"></script>
<div class="questions__infos">

    <div class="question__étudiant">
        <!--Grilles de cours-->
        <h2><?php echo get_the_title(106);?></h2>
        <p><?php echo get_field("texte", 106) ?></p>
        <button class="btn-5">
            <a href="<?php echo add_query_arg('ID', $post_object->ID, get_the_permalink(42)); ?>">Contactez
                <?php echo $post_object->post_title;?>
            </a>
        </button>
    </div>

    <div class="autres__questions">
        <!--S'inscrire au programme-->
        <h2><?php echo get_the_title(108);?></h2>
        <p><?php echo get_field("texte", 108) ?></p>
        <button class="btn-5">
        <a href="<?php echo add_query_arg('ID', $post_object->ID, get_the_permalink(38)); ?>">Contactez
            <?php echo $post_object->post_title;?>
        </a>
        </button>
    </div>

</div>
<footer class="piedDePage">
    <?php if(has_nav_menu('secondaire')){?>
   
        <ul class="menu__footer">
            <li class="liste__footer">
        <?php wp_nav_menu(array('theme_location'=>'secondaire'));?>
            </li>
        </ul>
   
    <?php } ?>
    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/instagram.png" alt="" />
    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/twitter.png" alt="" />
    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/facebook.png" alt="" />
    <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/linkedin.png" alt="" />
    <br>
    <small>Tous droits réservés © 2022
        Techniques d'intégration multimédia - Web et apps,
        Cégep de Sainte-Foy.</small>
</footer>
<?php wp_footer(); ?>
<?php get_footer(); ?>
</body>
</html>
<style>
    small{
        text-align: center;
    }
    .piedDePage{
        max-width: 100%;
        margin: 0 auto;
        color:white;
    }
    .piedDePage ul{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
        list-style: none;
        color: white;
    }
    .liste__footer{
        color:white;
    }
    @media screen and (max-width: 800px) {
        .piedDePage ul{
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: space-around;
        }
    }
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
    .question__étudiant a{
        color:black;
        text-decoration: none;
    }
    .autres__questions{
        float: left;
        width: 50%;
        padding:10px 20px 10px 20px;
    }
    .autres__questions a{
        color:black;
        text-decoration: none;
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