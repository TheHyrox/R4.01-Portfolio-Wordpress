<?php get_header(); ?>

<main class="homepage">
    <section class="hero">
        <h1><?php bloginfo('name'); ?></h1>
        <p>Bienvenue sur mon portfolio ! Découvrez mes réalisations.</p>
    </section>

    <section class="top-projects">
        <h2>Mes Meilleures Réalisations</h2>
        <div class="portfolio-grid">
            <?php
            $top_projects = get_field('meilleures_realisations'); 
            if ($top_projects):
                foreach ($top_projects as $post):
                    setup_postdata($post);
                    ?>
            <article class="portfolio-item">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()): ?>
                    <div class="portfolio-thumbnail">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <?php endif; ?>
                    <h3><?php the_title(); ?></h3>
                </a>
            </article>
            <?php
                endforeach;
                wp_reset_postdata();
            else:
                echo "<p>Aucune réalisation sélectionnée.</p>";
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>