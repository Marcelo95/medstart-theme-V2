<?php

$video = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_videos_de_como_funciona', true);

if ($video) : ?>

    <section class="mb-4 js-scroll fade-in-bottom">
        <div class="container text-center">
            <h3>Como funciona o
                <?php the_title(); ?>
            </h3>
        </div>
    </section>

    <section class="js-scroll fade-in-bottom">
        <div class="videos">

            <div class="init-videos">


                <?php echo cmb2_texto($video); ?>


            </div>



        </div>
    </section>

<?php endif; ?>