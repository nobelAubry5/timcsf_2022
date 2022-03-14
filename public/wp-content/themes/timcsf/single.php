<?php get_header();
    echo "single.php";?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/single__projet.css"/>
<?php //Photo obtient un tableau (sizes) contenant les différentes tailles d'image
    $photo=get_field("image_1");
    //ici on affiche seulement la taille thumbnail 1-11, 12-17, 18-24
    $photo2=get_field("image_2");
    $photo3=get_field("image_3");
    $photo4=get_field("image_4");
?>
<?php
    $argsFinissants = array(
        'post_type' => 'finissants',
        'posts_per_page' => -1,
        'post_status' => 'publish',
    );
    $the_query = new WP_Query( $argsFinissants );
    
    
    $arrFinissants = array();
//    $post = the_post();
    if ($the_query->have_posts()){
        while($the_query->have_posts()) {
            $the_query->the_post();
            array_push($arrFinissants,$post);
        }
    }
?>
<?php
    wp_reset_postdata();
    
    
    $args = array(
        'post_type' => 'projets',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'meta-key' => 'diplome_id',
        'meta_value' => get_field("diplome_id")
    
    );
    $the_query = new WP_Query( $args );

?>
<main class="page">


    <h1 class="article__titre">
        <?php the_title()?>
    </h1>
    <div class="finissant__projet">
        <?php
            for($cpt=0;$cpt<count($arrFinissants);$cpt++){
                if(get_field("diplome_id")==get_field("id", $arrFinissants[$cpt]->ID)){?>
        <a href="<?php the_permalink(); ?>" style="text-decoration: none;color: black">
                    <h2> Par
                        <?php echo get_field("prenom", $arrFinissants[$cpt]->ID);?>
                        <?php echo get_field("nom", $arrFinissants[$cpt]->ID);?>
                    </h2>
        </a>
                <?php } ?>
            <?php } ?>
    </div>
    <div class="container">
        <div class="mySlides">
            <img src="<?php echo $photo["sizes"]["large"]; ?>" alt="<?php echo get_field("titre"); ?>" style="width:100%">
        </div>

        <div class="mySlides">
            <img src="<?php echo $photo2["sizes"]["large"]; ?>" alt="<?php echo get_field("titre"); ?>" style="width:100%">
        </div>
        
        <?php if($photo3!=null){?>
        <div class="mySlides">
            <img src="<?php echo $photo3["sizes"]["large"]; ?>" alt="<?php echo get_field("titre"); ?>" style="width:100%">
        </div>
        <?php }else{?>
        <?php }?>
    
        <?php if($photo4!=null){?>
            <div class="mySlides">
                <img src="<?php echo $photo4["sizes"]["large"]; ?>" alt="<?php echo get_field("titre"); ?>" style="width:100%">
            </div>
        <?php }else{?>
        <?php }?>


        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>



        <div class="column">
            <img src="<?php echo $photo["sizes"]["medium"]; ?>" alt="<?php echo get_field("titre"); ?>" class="img__projet" style="width:100%" onclick="currentSlide(1)"/>
        </div>
        <div class="column">
            <img src="<?php echo $photo2["sizes"]["medium"]; ?>" alt="<?php echo get_field("titre"); ?> " class="img__projet" style="width:100%" onclick="currentSlide(2)"/>
        </div>
        <?php if($photo3!=null){?>
        <div class="column">
                <img src="<?= $photo3["sizes"]["medium"]; ?>" alt="<?= get_field("titre"); ?> " class="img__projet" style="width:100%" onclick="currentSlide(3)"/>
        </div>
        <?php }else{?>
        <?php }?>
    
        <?php if($photo4!=null){?>
            <div class="column">
                <img src="<?= $photo4["sizes"]["medium"]; ?>" alt="<?= get_field("titre"); ?> " class="img__projet" style="width:100%" onclick="currentSlide(3)"/>
            </div>
        <?php }else{?>
        <?php }?>
    </div>
    
    
    <div class="description__projet">
        <p>
            <?php echo get_field("description");?>
        </p>
    </div>
    <div class="single__technologies">
        <h3>Technologies</h3>
        <p>
            <?php echo get_field("technologies");?>
        </p>
    </div>
    
   
    
    
        <?php
            for($cpt=0;$cpt<count($arrFinissants);$cpt++){
                if(get_field("diplome_id")==get_field("id", $arrFinissants[$cpt]->ID)){?>
    <h4>Autres projets de
                        <?php echo get_field("prenom", $arrFinissants[$cpt]->ID);?>
                        <?php echo get_field("nom", $arrFinissants[$cpt]->ID);?>
    </h4>
                <?php } ?>
            <?php } ?>
    
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
        <?php }
    ?>
</main>

<?php get_footer();?>


<script>

</script>