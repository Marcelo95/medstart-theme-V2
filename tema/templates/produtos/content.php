<section class="page-content">

    <div class="container ">

        <?php


        if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php echo get_the_content(); ?>

            <?php endwhile; ?>

        <?php else : ?>

            <!-- article -->
            <article>
                <h2><?php _e('Sorry, nothing to display.'); ?></h2>
            </article>
            <!-- /article -->

        <?php endif; ?>

    </div>

</section>


