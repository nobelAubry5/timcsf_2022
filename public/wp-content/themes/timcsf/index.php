<?php get_header(); ?>

    <video width="100%" autoplay muted>
    <source src="<?php echo get_template_directory_uri(); ?>/liaisons/videos/programme_tim.mp4" type="video/mp4">
    Your browser does not support HTML video.
    </video>
    <h1>Techniques d'intégration multimédia</h1>
    <h2>Web et Apps</h2>
    
    <div class="axes__accueil">
        
        <div class="carte__axes">
            <a href="#" class="lien__carte">
            <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/img_integration.jpg" alt="" />
            <h4><?php echo get_the_title(121);?></h4>
            </a>
        </div>
        

        
        <div class="carte__axes">
            <a href="#" class="lien__carte">
            <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/img_conception.jpg" alt="" />
            <h4><?php echo get_the_title(119);?></h4>
            </a>
        </div>
        
        
        <div class="carte__axes">
            <a href="#" class="lien__carte">
            <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/img_programmation.jpg" alt="" />
            <h4><?php echo get_the_title(122);?></h4>
            </a>
        </div>
        

        
        <div class="carte__axes">
            <a href="#" class="lien__carte">
            <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/img_medias.jpg" alt="" />
            <h4><?php echo get_the_title(120);?></h4>
            </a>
        </div>

       
        <div class="carte__axes">
            <a href="#" class="lien__carte">
            <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/img_autres.jpg" alt="" />
            <h4><?php echo get_the_title(123);?></h4>
            </a>
        </div>
        
    </div>
    
    <div class="projets_accueil">
        <h2>Projets</h2>
        
        
    
    </div>
    <style>
        .carte__axes:hover{
            background-color:#FDEF86;
            color:white;
            transform: rotateX(7deg) translateY(-6px) scale(1.05);
            -webkit-transition: background 20ms ease-in;
            -moz-transition: background 20ms ease-in;
            -ms-transition: background 20ms ease-in;
            -o-transition: background 20ms ease-in;
            transition: background 20ms ease-in;
        }
        .lien__carte{
            text-decoration: none;
            color: black;
        }
        .axes__accueil{
            background-color: #2B6777;
            color: white;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .carte__axes{
            justify-content: center;
            background-color: white;
            color:black;
            margin-top: 30px;
            margin-bottom: 30px;
            width: 320px;
            margin-left: 30px;
            -webkit-box-shadow: 2px 16px 5px -5px rgba(0,0,0,0.38);
            box-shadow: 2px 16px 5px -5px rgba(0,0,0,0.38);
        }
        .carte__axes h4 {
            font-family: Open Sans Condensed;
            font-style: normal;
            font-weight: bold;
            font-size:1.25em;
            padding-left: 10px;
            
        }
        .projets_accueil{
        background-color:#ECECEC ;
        }

    </style>
<!--    --><?php ////si la page reçoit des articles
//        if(have_posts()){
//            //tant qu'il restera des articles
//            while(have_posts()){
//                //passer à l'article suivant
//                the_post();?>
<!--                    <article class="article">-->
<!--                        <header class="article__entete">-->
<!--                            <h2 class="article__titre">-->
<!--                                --><?php //the_title() ?>
<!--                                <a class="article__lien" href="--><?php //the_permalink();?><!--">--><?php //the_title()?><!--</a>-->
<!--                            </h2>-->
<!--                        </header>-->
<!--                        <p class="article__texte">-->
<!--                            --><?php
//                                the_content();
//                                ?>
<!--                        </p>-->
<!--                        <footer class="article__piedPage">-->
<!--                            <h4 class="article__auteur">-->
<!--                                Par : --><?php //the_author();?><!-- Publié le: --><?php //the_date(); ?>
<!--                            </h4>-->
<!--                        </footer>-->
<!--                    </article>-->
<!--            --><?php //}
//        }?>
    


<?php get_sidebar(); ?>

<?php get_footer(); ?>
<style>

</style>
