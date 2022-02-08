<?php
//Appel de l'inclusion d'entete de page
get_header();
echo"404.php"?>

<main class="page">
    <h2>Oups! La page demandée n'existe pas!</h2>
    
    <p>On as-tu mal nommé quelque chose?</p>
    <img src="<?php echo get_template_directory_uri();?>/liaisons/images/point_exclamation.png" alt="Erreur 404!">
</main>

<?php
    //Appel de l'inclusion d'entete de pied de page
        //get_sidebar();
            get_footer()?>