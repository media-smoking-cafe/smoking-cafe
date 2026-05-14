<?php get_header(); ?>

<main>
    <section class="single">
        <div class="single-inner">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="single-article">
                        <p class="single-date"><?php echo get_the_date('Y.m.d'); ?></p>
                        <h1 class="single-title"><?php the_title(); ?></h1>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="single-thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="single-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
            <?php endwhile;
            endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
