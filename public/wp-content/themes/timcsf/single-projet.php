<main style="max-width: <?php echo $arrWidths[1]; ?>">
    <h2>Section projets</h2>
    <?php the_post(); ?>
    <article>
        <?php get_template_part('content', get_post_format()); ?>
    </article>
    <div>
        <?php previous_post_link('&laquo; %link', '%%title', false, '' ); ?>
    </div>
    <div>
        <?php next_post_link('%link &raquo;', '%%title', false, '' ); ?>
    </div>
    
</main>