<?php
    /* Template name: Page des stages */
    get_header(); //inclusion de l'entete
    echo "page-stages.php";
    $chemin=wp_upload_dir()?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/stages.css"/>
    <h1>Stages</h1>
    <div class="stages_styles">
    <div class="stage__info">
    <p><?php echo get_field("texte", 107) ?></p>
    </div>

    <div class="stage__duree">
        <div class="stages__test">
    <p class="stage__ate"><?php echo get_field("texte", 110) ?></p>
            <button class="formation__telecharger"><a href="<?php echo $chemin["baseurl"] ?>/profilCompetences.pdf" download>Télécharger <i class="fa fa-download" aria-hidden="true"></i></a></button>
        </div>
    </div>
    </div>
<!--Témoignages-->
<h2>Témoignages</h2>
<div class="slideshow-container">
    <?php
        $args = array(
            'post_type' => 'témoignages',
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'order_by' => 'post_date',
            'order' => 'ASC',
        );
        
        $the_query = new WP_Query( $args );
        
        if($the_query->have_posts()){
            while($the_query->have_posts()) {?>
                <div class="mySlides fade">
                    <?php $the_query->the_post();?>
                    <?php //Photo obtient un tableau (sizes) contenant les différentes tailles d'image
                        $photo=get_field("image_du_temoin");
                        //ici on affiche seulement la taille thumbnail
                    ?>
                    <div class="carte__temoignages">
                        <div class="formation__imgtemoignage">
                            <img src="<?php echo $photo["sizes"]["thumbnail"]; ?>" alt="<?php echo get_field("nom_du_temoin"); ?> "/>
                        </div>
                        <ul class="formation__description">
                            <h4><li><?php echo get_field("nom_du_temoin");?></li></h4>
                            <h3><li><?php echo get_field("titre_du_poste");?></li></h3>
                            <li><?php echo get_field("entreprise");?></li>
                            <li><?php echo get_field("url_entreprise");?></li>
                            <li><?php echo get_field("temoignage");?></li>
                            <li><?php echo get_field("annee_de_diplomation");?></li>

                        </ul>
                    </div>
                </div>
            
            <?php }
        }
    ?>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>


<style>
    .carte__temoignages{
        content: "";
        display: table;
        clear: both;
        background-color: #C8D8E4;
        width: 80%;
        margin-left: 100px;
        padding:20px;
    }
    .formation__imgtemoignage{
        float: left;
        width: 30%;
        padding-left: 70px;
        padding-right: 20px;
    }
    .formation__imgtemoignage img{
         border-radius: 50%;
    }
    .formation__description{
        list-style: none;
        float: left;
        width: 50%;
        padding-left: 20px;
    }
    @media screen and (max-width: 800px) {
        .carte__temoignages{
            /*margin-left: 0;*/
            /*text-align: left;*/
            /*width: 100%;*/
            margin-left: 25px;
            text-align: left;
            width: 90%;
        }
        .formation__imgtemoignage{
            margin-left:50px;
        }
        .formation__imgtemoignage, .formation__description {
            margin-right: 20px;
            margin-left: 20px;
            width: 70%;
            padding: 0;
        }
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
        background-color: #0a4b78;
        color: white;
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
        background-color: #C8D8E4;
        color:#0a4b78;
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
        padding-left: 0px;
    
    }
    .fade img{
    
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
<?php
    get_footer();
?>
