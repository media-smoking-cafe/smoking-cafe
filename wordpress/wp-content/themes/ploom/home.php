<?php get_header(); ?>

<main>
    <section class="page-blog">
        <div class="page-blog-inner">
            <h1 class="page-blog-title">ブログ</h1>

            <div class="page-blog-cards">
                <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 12,
                    'post_status'    => 'publish',
                );

                $blog_query = new WP_Query($args);

                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) :
                        $blog_query->the_post();
                ?>
                        <article class="page-blog-card">
                            <a href="<?php the_permalink(); ?>" class="page-blog-link">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="page-blog-thumbnail">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="page-blog-content">
                                    <p class="page-blog-date"><?php echo get_the_date('Y.m.d'); ?></p>
                                    <h2 class="page-blog-card-title"><?php the_title(); ?></h2>
                                    <p class="page-blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
                                </div>
                            </a>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p class="page-blog-empty">まだ投稿がありません。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
