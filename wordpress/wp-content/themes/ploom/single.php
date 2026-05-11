<?php get_header(); ?>

<main>
    <section class="single">
        <div class="single__inner">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="single__article">
                        <p class="single__date"><?php echo get_the_date('Y.m.d'); ?></p>
                        <h1 class="single__title"><?php the_title(); ?></h1>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="single__thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="single__content">
                            <?php the_content(); ?>
                        </div>
                    </article>
            <?php endwhile;
            endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>