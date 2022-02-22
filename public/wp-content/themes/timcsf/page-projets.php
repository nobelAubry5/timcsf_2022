<?php
    /* Template name: Page des projets */
    get_header(); //inclusion de l'entete
    echo "page-projets.php";?>
    
<h1> Projets </h1>
<form action="" method="post">
    <button name="btn_asc">Projet ascendant</button>
    <button name="btn_desc">Projet descendant</button>
</form>
<div class="slideshow-container">
        
    <?php switch (true) {
        case isset($_POST["btn_desc"]);
        $champstri = 'titre';
        $sens = 'desc';
        $ordertype = 'meta_value';
        break;
        case isset($_POST["btn_asc"]);
            $champstri = 'titre';
            $sens = 'asc';
            $ordertype = 'meta_value';
            break;
            
        default :
            $champstri = 'titre';
            $sens = 'asc';
            $ordertype = 'meta_value';
        
    }

        ?>
        <?php
        
    
        $args = array(
            'post_type' => 'projets',
            'posts_per_page' => 9,
            'post_status' => 'publish',
            'meta_key' => $champstri,
            'order_by' => $ordertype,
            'order' => $sens,
//            'paged' => $paged //indique la page
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
                        $the_query->the_post();?>
                    <?php //Photo obtient un tableau (sizes) contenant les différentes tailles d'image
                        $photo=get_field("image_1");
                        //ici on affiche seulement la taille thumbnail
                    ?>
                    
                    
                    <li class="puces__projets"><img src="<?php echo $photo["sizes"]["medium"]; ?>" alt="<?php echo get_field("titre"); ?> "/>
                        <div class="titre__projet"><?php echo get_field("titre");?></div>
                        <div class="finissant__projet">Par finissant</div>
                        <div class="liste__axes">
                            <div class="axe__projet">Conception</div>
                        </div>
                    </li>
                   
                </div>
            <?php }?>
    </ul>
        <?php }
    ?>
<!--    <p>-->
<!--        --><?php //$lien = get_template_directory_uri()."/liaisons/images/picto-precedent.png";
//        echo get_previous_posts_link('<img src=' .$lien .' width=40>');
//        ?>
<!--        --><?php //echo " ".$paged."/".$the_query->max_num_pages." ";?>
<!--        --><?php //$lien = get_template_directory_uri()."/liaisons/images/picto-suivant.png";
//        echo get_next_posts_link('<img src=' .$lien .' width=40>', $the_query->max_num_pages);?>
<!--    </p>-->

</div>
        <?php
    get_footer();
?>
<style>
    .liste__projets{
        list-style: none;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        margin-bottom: 40px;
    }
    
    .carte__projet:hover{
        transform: scale(1.2);
    }
    .puces__projets img{
        width: 300px;
        height: 160px;
        border:2px solid black;
        margin-right: 5px;
    }
    .puces__projets{
        text-align: left;
        height: auto;
        margin-top: 1%;
        margin-bottom: 20px;
        position: relative;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }
    .titre__projet{
        font-family: Open Sans Condensed;
        font-style: normal;
        font-weight: bold;
        font-size: 22px;
    }
    .finissant__projet{
        font-family: Open Sans Condensed;
        font-style: normal;
        font-weight: bold;
        font-size: 18px;
    }
    .axe__projet{
        width: 50%;
        background-color: black;
        color:white;
        text-align: center;
        border-radius:20px ;
    }
    
</style>