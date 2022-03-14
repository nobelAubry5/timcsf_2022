<?php get_header();
    echo "single-finissant.php";
    $photo=get_field("image_du_finissant_1");
    $courriel=get_field("courriel");
    $twitter=get_field("pseudo_twitter");
    $linkedin=get_field("linkedin");
    $siteweb=get_field("site_web");
    $gestion=get_field("interet_gestion_projet");
    $design=get_field("interet_design_interface");
    $medias=get_field("interet_traitement_des_medias");
    $integration=get_field("interet_pour_integration");
    $programmation=get_field("interet_pour_la_programmation");
    ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/single__finissant.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/projets.css"/>
<?php
    $argsFinissants = array(
        'post_type' => 'finissants',
        'posts_per_page' => -1,
        'post_status' => 'publish',
    );
    $the_queryFin = new WP_Query( $argsFinissants );
    
    
    $arrFinissants = array();
    //    $post = the_post();
    if ($the_queryFin->have_posts()){
        while($the_queryFin->have_posts()) {
            $the_queryFin->the_post();
            array_push($arrFinissants,$post);
        }
    }
    wp_reset_postdata();
?>
<?php



?>
<h1><?php the_title()?></h1>
<div class="fiche__imagepresentation">
<div class="fiche_image">
<img src="<?php echo $photo["sizes"]["large"]; ?>" alt="<?php echo get_field("titre"); ?> "/>
</div>

<div class="fiche__presentation">
<h2>Présentation</h2>
<p><?php echo get_field("presentation")?></p>
</div>
</div>
<div class="fiche__lieninterets">
<div class="fiche__lien">
    <?php if($courriel!=null){?>
        <p><strong>Courriel: </strong><a href="mailto:<?php echo $courriel?>"><?php echo $courriel?></a></p>
    <?php }else{?>
    <?php }?>
    
    <?php if($twitter!=null){?>
        <p><strong>Twitter: </strong><a href="<?php echo $twitter?>"><?php echo $twitter?></a></p>
    <?php }else{?>
    <?php }?>
    
    <?php if($linkedin!=null){?>
        <p><strong>LinkedIn: </strong><a href="<?php echo $linkedin?>"><?php echo $linkedin?></a></p>
    <?php }else{?>
    <?php }?>
    
    <?php if($siteweb!=null){?>
        <p><strong>Site web: </strong><a href="<?php echo $siteweb?>"><?php echo $siteweb?></a></p>
    <?php }else{?>
    <?php }?>
</div>
<div class="fiche__interets">
<h3>Intérets</h3>
<label for="file">Intérêt pour la gestion du projet:</label><br>
<progress id="file" max="10" value="<?php echo $gestion?>"> <?php echo $gestion?> </progress><br>

<label for="file">Intérêt pour le design d'interface:</label><br>
<progress id="file" max="10" value="<?php echo $design?>"> <?php echo $design?> </progress><br>

<label for="file">Intérêt pour le traitement des médias:</label><br>
<progress id="file" max="10" value="<?php echo $medias?>"> <?php echo $medias?> </progress><br>

<label for="file">Intérêt pour l'intégration:</label><br>
<progress id="file" max="10" value="<?php echo $integration?>"> <?php echo $integration?> </progress><br>

<label for="file">Intérêt pour la programmation:</label><br>
<progress id="file" max="10" value="<?php echo $programmation?>"> <?php echo $programmation?> </progress>
</div>
</div>

<h4>Projets réalisés par <?php the_title() ?></h4>
<?php
    $args = array(
        'post_type' => 'projets',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'meta-key' => 'diplome_id',
        'meta_value' => get_field("id")
    
    );
    $the_query = new WP_Query( $args );
    
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
    <?php }
?>



<?php get_footer() ?>
