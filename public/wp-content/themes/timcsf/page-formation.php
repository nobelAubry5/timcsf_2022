<?php
    /* Template name: Page de la formation */
    get_header(); //inclusion de l'entete
    echo "page-formation.php";
    $chemin=wp_upload_dir()?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/formation.css"/>

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
        <button class="formation__telecharger"><a href="<?php echo $chemin["baseurl"] ?>/grilleDeCours_TIM.pdf" download>Télécharger <i class="fa fa-download" aria-hidden="true"></i></a></button>
    </div>

</div>



<!--Axes de formation-->
<h2> Axes de formation </h2>
<div class="formation__axe">
    <button class="accordion"><i class="fa fa-plus" aria-hidden="true" style="font-size: 20px;margin-right: 10px;"></i><?php echo get_the_title(121);?></button>
        <div class="panel">
            
            <div class="formation__competences">
                <p><?php echo get_field("texte", 121) ?></p>
                <h3><?php echo get_the_title(978);?></h3>
                <p><?php echo get_field("texte", 978) ?></p>
            </div>
        </div>
    
    <button class="accordion"><i class="fa fa-plus" aria-hidden="true" style="font-size: 20px;margin-right: 10px;"></i><?php echo get_the_title(119);?></button>
        <div class="panel">
            <div class="formation__competences">
            <p><?php echo get_field("texte", 119) ?></p>
            <h3><?php echo get_the_title(977);?></h3>
            <p><?php echo get_field("texte", 977) ?></p>
            </div>
        </div>
    
    <button class="accordion"><i class="fa fa-plus" aria-hidden="true" style="font-size: 20px;margin-right: 10px;"></i><?php echo get_the_title(122);?></button>
        <div class="panel">
            <div class="formation__competences">
                <p><?php echo get_field("texte", 122) ?></p>
                <h3><?php echo get_the_title(980);?></h3>
                <p><?php echo get_field("texte", 980) ?></p>
            </div>
        </div>

    <button class="accordion"><i class="fa fa-plus" aria-hidden="true" style="font-size: 20px;margin-right: 10px;"></i><?php echo get_the_title(120);?></button>
        <div class="panel">
            <div class="formation__competences">
                <p><?php echo get_field("texte", 120) ?></p>
                <h3><?php echo get_the_title(981);?></h3>
                <p><?php echo get_field("texte", 981) ?></p>
            </div>
        </div>

    <button class="accordion"><i class="fa fa-plus" aria-hidden="true" style="font-size: 20px;margin-right: 10px;"></i><?php echo get_the_title(123);?></button>
       <div class="panel">
           <div class="formation__competences">
               <p><?php echo get_field("texte", 123) ?></p>
               <h3><?php echo get_the_title(983);?></h3>
               <p><?php echo get_field("texte", 983) ?></p>
           </div>
       </div>

    <br>
</div>

<!--Profession-->
<div class="formation__professions">
    <h4>Professions</h4>
    <ul class="liste__professions">
        <li class="puces__professions">
            <div class="carte__profession">
            
                <h4><?php echo get_the_title(126);?></h4>
                <p><?php echo get_field("texte", 126) ?></p>
            </div>
        </li>
        <li class="puces__professions">
            <div class="carte__profession">
   
                <h4><?php echo get_the_title(127);?></h4>
                <p><?php echo get_field("texte", 127) ?></p>
            </div>
        </li>
        <li class="puces__professions">
            <div class="carte__profession">
          
                <h4><?php echo get_the_title(128);?></h4>
                <p><?php echo get_field("texte", 128) ?></p>
            </div>
        </li>
        <li class="puces__professions">
            <div class="carte__profession">
               
                <h4><?php echo get_the_title(125);?></h4>
                <p><?php echo get_field("texte", 125) ?></p>
            </div>
        </li>
    </ul>
</div>



<?php
    get_footer();
?>




