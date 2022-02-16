<?php
    /* Template name: Page de la formation */
    get_header(); //inclusion de l'entete
    echo "page-formation.php";?>
    
    <h1>Formation</h1>

    <div class="formation__infos">
        
        <div class="formation__grille">
    <!--Grilles de cours-->
    <h2><?php echo get_the_title(109);?></h2>
    <p><?php echo get_field("texte", 109) ?></p>
        </div>
        
        <div class="formation__inscription">
    <!--S'inscrire au programme-->
    <h2><?php echo get_the_title(124);?></h2>
    <p><?php echo get_field("texte", 124) ?></p>
    </div>
    
    </div>

    <!--Axes de formation-->
<div class="axes_formation">
<h2>Axes de formation</h2>
<div class="slideshow-container">

    <div class="mySlides fade">
        <h3><?php echo get_the_title(121);?></h3>
        <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/img_integration.jpg" alt="" />
        <p><?php echo get_field("texte", 121) ?></p>
    </div>

    <div class="mySlides fade">
        <h3><?php echo get_the_title(119);?></h3>
        <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/img_conception.jpg" alt="" />
        <p><?php echo get_field("texte", 119) ?></p>
    </div>

    <div class="mySlides fade">
        <h3><?php echo get_the_title(122);?></h3>
        <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/img_programmation.jpg" alt="" />
        <p><?php echo get_field("texte", 122) ?></p>
    </div>

    <div class="mySlides fade">
        <h3><?php echo get_the_title(120);?></h3>
        <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/img_medias.jpg" alt="" />
        <p><?php echo get_field("texte", 120) ?></p>
    </div>

    <div class="mySlides fade">
        <h3><?php echo get_the_title(123);?></h3>
        <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/img_autres.jpg" alt="" />
        <p><?php echo get_field("texte", 123) ?></p>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
</div>
</div>
    <!--Profession-->
    <div class="formation__professions">
    <h4>Professions</h4>
    
    <div class="carte__profession">
    <h4><?php echo get_the_title(126);?></h4>
    <p><?php echo get_field("texte", 126) ?></p>
    </div>
    
    <div class="carte__profession">
    <h4><?php echo get_the_title(127);?></h4>
    <p><?php echo get_field("texte", 127) ?></p>
    </div>
     
     <div class="carte__profession">
    <h4><?php echo get_the_title(128);?></h4>
    <p><?php echo get_field("texte", 128) ?></p>
     </div>
     
    <div class="carte__profession">
    <h4><?php echo get_the_title(125);?></h4>
    <p><?php echo get_field("texte", 125) ?></p>
    </div>

    </div>

    <!--Témoignages-->
<?php
    $args = array(
        'post_type' => 'témoignages',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'order_by' => 'post_date',
        'order' => 'ASC',
    );
    
    $the_query = new WP_Query( $args );
    
    if($the_query->have_posts()){
        while($the_query->have_posts()) {
            $the_query->the_post();?>
            <?php //Photo obtient un tableau (sizes) contenant les différentes tailles d'image
            $photo=get_field("image_du_temoin");
            //ici on affiche seulement la taille thumbnail
            ?>
            <img src="<?php echo $photo["sizes"]["thumbnail"]; ?>" alt="<?php echo get_field("nom_du_temoin"); ?> "/>
            <ul>
                <li><?php echo get_field("nom_du_temoin");?></li>
                <li><?php echo get_field("titre_du_poste");?></li>
                <li><?php echo get_field("entreprise");?></li>
                <li><?php echo get_field("url_entreprise");?></li>
                <li><?php echo get_field("temoignage");?></li>
                <li><?php echo get_field("annee_de_diplomation");?></li>
                
            </ul>
        
        <?php }
    }
?>
<?php
    get_footer();
?>

<style>
    
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
  
    
    .formation__infos{
        background-color: #ECECEC;
        content: "";
        display: table;
        clear: both;
    }
    .formation__grille{
        float: left;
        width: 50%;
        padding-left: 20px;
    }
    .formation__inscription{
        float: left;
        width: 50%;
        padding-left: 70px;
        padding-right: 20px;
    }

    .formation__professions{
        border: 1px solid black;
    }
    .carte__profession{
        width: 35%;
        padding:10px 10px 10px 10px;
        background-color:#C8D8E4 ;
    }
   
    @media screen and (max-width: 800px) {
        .formation__grille, .formation__inscription {
            width: 100%;
            padding: 0;
        }
    }
</style>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

