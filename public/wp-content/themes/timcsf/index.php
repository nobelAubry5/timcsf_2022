<?php get_header(); ?>
<div class="entete__accueil">
    <h1>Techniques d'intégration multimédia</h1>
    <h2>Web et Apps</h2>
</div>
    <video width="100%" controls>
    <source src="<?php echo get_template_directory_uri(); ?>/liaisons/videos/programme_tim.mp4" type="video/mp4">
    Your browser does not support HTML video.
    </video>



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
        <!--Projets_accueil-->
        <div class="slideshow-container">
        <?php
            $args = array(
                'post_type' => 'projets',
                'posts_per_page' => 6,
                'post_status' => 'publish',
                'order_by' => 'post_date',
                'order' => 'ASC',
            );
        
            $the_query = new WP_Query( $args );?>
            
            <?php
            if($the_query->have_posts()){?>

            
            <?php
                while($the_query->have_posts()) {?>
            <div class="mySlides fade">
                        <?php
                    $the_query->the_post();?>
                    <?php //Photo obtient un tableau (sizes) contenant les différentes tailles d'image
                    $photo=get_field("image_1");
                    //ici on affiche seulement la taille thumbnail
                    ?>
                    <img src="<?php echo $photo["sizes"]["medium"]; ?>" alt="<?php echo get_field("titre"); ?> "/>
                    <ul>
                        <li><?php echo get_field("titre");?></li>
                    </ul>
            </div>
                
                <?php }?>
                
            <?php }
        ?>
            


            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
    </div>
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
        
        .mySlides img{
            border: 2px solid black;
            margin-top: 20px;
        }
        .mySlides ul{
            list-style: none;
        }
        .mySlides li{
            font-family: Open Sans;
            font-style: normal;
            font-size: 25px;
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
    
    .entete__accueil{
        bottom: 80px;
        width: 960px;
        background-color:rgba(13, 36, 43, 0.5) ;
        /*position: absolute;*/
        color:white;
       
    }
    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Next & previous buttons */
    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: black;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
        background-color: white;
    }



    /* The dots/bullets/indicators */
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
        padding-left: 80px;
        border: 1px solid black;
    }
    .fade img{
        border:3px solid black;
    }
    .fade p{
        width: 40%;
    }
    .axes_formation{
        background-color: rgba(200, 216, 228, 0.75);;
    }
    @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .prev, .next {font-size: 11px}
        .fade{
            padding-right: 60px;
        }
    }
</style>

