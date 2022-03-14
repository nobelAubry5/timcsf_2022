<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/accueil.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/projets.css"/>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/liaisons/js/video.js"></script>

<div class="entete__accueil">
    <h1>Techniques d'intégration multimédia</h1>
    <h2>Web et Apps</h2>
</div>
<video controls autoplay>
    <source src="<?php echo get_template_directory_uri(); ?>/liaisons/videos/programme_tim.mp4" type="video/mp4">
    Your browser does not support HTML video.
</video>






<div class="axes__accueil">
    

    <div class="carte__axes">
        <a href="http://localhost:8888/rpni4/timcsf_2022/public/formation/" class="lien__carte">
            <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/img_integration.jpg" alt="" />
            <h4><?php echo get_the_title(121);?></h4>
        </a>
    </div>



    <div class="carte__axes">
        <a href="http://localhost:8888/rpni4/timcsf_2022/public/formation/" class="lien__carte">
            <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/img_conception.jpg" alt="" />
            <h4><?php echo get_the_title(119);?></h4>
        </a>
    </div>


    <div class="carte__axes">
        <a href="http://localhost:8888/rpni4/timcsf_2022/public/formation/" class="lien__carte">
            <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/img_programmation.jpg" alt="" />
            <h4><?php echo get_the_title(122);?></h4>
        </a>
    </div>



    <div class="carte__axes">
        <a href="http://localhost:8888/rpni4/timcsf_2022/public/formation/" class="lien__carte">
            <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/img_medias.jpg" alt="" />
            <h4><?php echo get_the_title(120);?></h4>
        </a>
    </div>


    <div class="carte__axes">
        <a href="http://localhost:8888/rpni4/timcsf_2022/public/formation/" class="lien__carte">
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
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'order_by' => 'post_date',
                'order' => 'ASC',
            );
            
            $the_query = new WP_Query( $args ); ?>
        <?php
            $argsFinissants = array(
                'post_type' => 'finissants',
                'posts_per_page' => -1,
                'post_status' => 'publish',
        
            );
            $query = new WP_Query( $argsFinissants );
            $post = the_post();
        
            $arrFinissants = array();
            if ($query->have_posts() ){
                while($query->have_posts()) {
                    $query->the_post();
                    array_push($arrFinissants,$post);
                }
            }
        ?>
    
        <?php
            if($the_query->have_posts()){?>
                <ul class="liste__projets">
                    <?php
                        while($the_query->have_posts()) {?>
                            <div class="carte__projet">
                                <?php
                                    $the_query->the_post();
                                    array_push($arrFinissants,$post)
                                ?>
                                <?php //Photo obtient un tableau (sizes) contenant les différentes tailles d'image
                                    $photo=get_field("image_1");
                                    //ici on affiche seulement la taille thumbnail 1-11, 12-17, 18-24
                                ?>


                                <li class="puces__projets">
                                    <a href="<?php the_permalink(); ?>" style="text-decoration: none;color: black">

                                        <img src="<?php echo $photo["sizes"]["medium"]; ?>" alt="<?php echo get_field("titre"); ?> "/>

                                        <div class="titre__projet"><?php echo get_field("titre");?></div>
                                        <div class="finissant__projet">
                                            <?php
                                                for($cpt=0;$cpt<count($arrFinissants);$cpt++){
                                                    if(get_field("diplome_id")==get_field("id", $arrFinissants[$cpt]->ID)){?>
                                                        <p>
                                                            <?php echo get_field("prenom", $arrFinissants[$cpt]->ID);?>
                                                            <?php echo get_field("nom", $arrFinissants[$cpt]->ID);?>
                                                        </p>
                                                    <?php } ?>
                                                <?php } ?>
                                        </div>

                                        <div class="liste__axes">
                                            <div class="projet__annee">
                                                <?php
                                                    if( get_field("id_du_cours") <= 11) {?>
                                                        1ere année
                                                    <?php }

                                                    elseif( get_field("id_du_cours") <= 17) {?>
                                                        2e année
                                                    <?php }

                                                    elseif( get_field("id_du_cours") <= 24) {?>
                                                        3e année
                                                    <?php } ?>
                                            </div>
                                        </div>

                                    </a>
                                </li>

                            </div>
                        <?php }?>
                </ul>
        <div class="bouton__accueil">
        <button class="formation__telecharger"><a href="http://localhost:8888/rpni4/timcsf_2022/public/projets/">Voir tous nos projets</a></button>
        </div>
            <?php }
        ?>




<?php get_sidebar(); ?>

<?php get_footer(); ?>


