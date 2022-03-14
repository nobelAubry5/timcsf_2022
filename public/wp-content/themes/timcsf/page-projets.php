<?php
    /* Template name: Page des projets */
    get_header(); //inclusion de l'entete
    echo "page-projets.php";?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/projets.css"/>



<h1> Projets </h1>
<div class="projets__filtre">
    <span>Filtrer par année:</span>
    <form action="" method="post">
        <button name="btn_premiereAnnee">1ere année</button>
        <button name="btn_deuxiemeAnnee">2e année</button>
        <button name="btn_troisiemeAnnee">3e année</button>
    </form>
   
    
</div>
<div class="slideshow-container">
    <?php switch(true){
        case isset($_POST["btn_premiereAnnee"]):
            $champstri = 'id_du_cours';
            $sens = 'asc';
            $value=array(1,2,3,4,5,6,7,8,9,10,11);
            break;
        case isset($_POST["btn_deuxiemeAnnee"]):
            $champstri = 'id_du_cours';
            $sens = 'asc';
            $value=array(12,13,14,15,16,17);
            break;
        case isset($_POST["btn_troisiemeAnnee"]):
            $champstri = 'id_du_cours';
            $sens = 'desc';
            $value=array(18,19,20,21,22,23,24);
            break;
        default:
            $champstri = 'id_du_cours';
            $sens = 'asc';
            $value='';
    }?>
    
<!--    --><?php //switch(true){
//        case isset($_POST["btn_asc"]):
//            $champstri = 'titre';
//            $sens = 'asc';
//            $ordertype='meta_value';
//            break;
//        case isset($_POST["btn_desc"]):
//            $champstri = 'titre';
//            $sens = 'desc';
//            $ordertype='meta_value';
//            break;
//
//        default:
//            $champstri = 'titre';
//            $sens = '';
//            $ordertype='meta_value';
//    }?>
    
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
        if(get_query_var('paged')){
            $paged = get_query_var('paged');
        }else{
            $paged = 1;
        }
    ?>
    <?php
        $args = array(
            'post_type' => 'projets',
            'posts_per_page' => 9,
            'post_status' => 'publish',
            'meta_key' => $champstri,
            'meta_value' => $value,
            'order' => $sens,
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
</div>
<?php
    get_footer();
?>
<style>

</style>