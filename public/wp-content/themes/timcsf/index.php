<?php get_header(); ?>

<main class="page">
    <?php //si la page reçoit des articles
        if(have_posts()){
            //tant qu'il restera des articles
            while(have_posts()){
                //passer à l'article suivant
                the_post();?>
                    <article class="article">
                        <header class="article__entete">
                            <h2 class="article__titre">
                                <?php the_title() ?>
                                <a class="article__lien" href="<?php the_permalink();?>"><?php the_title()?></a>
                            </h2>
                        </header>
                        <p class="article__texte">
                            <?php
                                the_content();
                                ?>
                        </p>
                        <footer class="article__piedPage">
                            <h4 class="article__auteur">
                                Par : <?php the_author();?> Publié le: <?php the_date(); ?>
                            </h4>
                        </footer>
                    </article>
            <?php }
        }?>
</main>
<?php get_sidebar(); ?>

<?php get_footer(); ?>

