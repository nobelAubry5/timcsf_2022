<?php
//Appel de l'inclusion d'entete de page
get_header();
echo"404.php"?>

<main class="page">
    <div class="page__erreur">
        <h1>404</h1>
        <h2>Page non trouvé</h2>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/liaisons/images/404.png" alt="Erreur 404!">
</main>

<?php get_footer()?>
<style>
    .page__erreur{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
    }
    .page__erreur h1,h2{
        text-align: center;
    }
    .page__erreur h1{
        font-family: Open Sans;
        font-style: normal;
        font-weight: bold;
        font-size: 150px;
    }
    .page__erreur h2{
        font-family: Open Sans;
        font-style: normal;
        font-weight: bold;
        font-size: 50px;
    }
</style>
