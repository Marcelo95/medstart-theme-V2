<?php

$entries = (array) get_post_meta(get_the_ID(), '_metabox_for_produtos_2_box', true);

if (count($entries) > 0 && $entries[0]): ?>

    <section class="js-scroll fade-in-bottom">
        <div class="videos">

            <div class="init-videos">


                <?php

                $video = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_videos_de_como_funciona', true);


                if (isset($video)) {
                    $link_video = esc_html($video);
                    echo sprintf(
                        ' <div class="imagem-thumbnail" data-id-youtube="%s" style="background-image:url(%s);"></div>',
                        getYouTubeVideoId($link_video),
                        getUrlThumbnailYoutube($link_video)
                    );
                }


                ?>


            </div>



            <div id="video-show" style="display:none;">
                <iframe width="100%" height="500" src="" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>

            <script>
                (function ($) {
                    'use strict';

                    $(".imagem-thumbnail").on("click", function () {
                        $("#video-show").show();
                        $("#video-show iframe").attr("src", "https://www.youtube.com/embed/" + $(this).attr("data-id-youtube") + "?autoplay=1");
                        $(this).hide();
                    })

                })(jQuery);

            </script>


        </div>
    </section>

<?php endif; ?>