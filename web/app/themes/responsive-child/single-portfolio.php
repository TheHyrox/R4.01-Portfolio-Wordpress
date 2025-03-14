<?php get_header(); ?>

<main class="portfolio-single">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
        <h1><?php the_title(); ?></h1>
        <p><strong>Client :</strong> <?php the_field('client'); ?></p>
        <p><strong>Date de réalisation :</strong> <?php the_field('date_de_realisation'); ?></p>
        <p><strong>Voir le projet :</strong> <a href="<?php the_field('lien_du_projet'); ?>" target="_blank">Lien</a>
        </p>

        <?php if (has_post_thumbnail()) : ?>
        <div class="portfolio-thumbnail">
            <?php the_post_thumbnail('large'); ?>
        </div>
        <?php endif; ?>

        <div class="portfolio-content">
            <?php the_content(); ?>
        </div>

        <?php 
            $gallery = get_field('galerie'); // Récupération du champ "Galerie"
            if ($gallery) : ?>
        <div class="portfolio-gallery">
            <?php foreach ($gallery as $image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>