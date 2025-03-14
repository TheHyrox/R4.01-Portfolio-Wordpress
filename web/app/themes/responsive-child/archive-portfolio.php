<?php get_header(); ?>

<main class="portfolio-archive">
    <h1>Mes Réalisations</h1>
    <div class="portfolio-grid">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="portfolio-item">
            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                <div class="portfolio-thumbnail">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
                <?php endif; ?>
                <h2><?php the_title(); ?></h2>
            </a>
        </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>