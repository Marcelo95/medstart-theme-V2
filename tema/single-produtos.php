<?php global $wpdb;
get_header(); ?>


<?php if (realpath(__DIR__ . sprintf('/templates/produtos/%s', get_post_field('post_name', get_post()))) === false) : ?>

    <?php get_template_part("templates/header"); ?>
    <?php get_template_part("templates/content"); ?>


<?php else : ?>

    <?php get_template_part("templates/header-products"); ?>




    <section class="page-content">

        <?php get_template_part("templates/produtos/content-banner-principal", get_post_field('post_name', get_post())); ?>



        <div class="container ">


            <div class="text-default js-scroll fade-in-bottom">
                <?php get_template_part(sprintf("templates/produtos/%s/content", get_post_field('post_name', get_post())), "priority"); ?>
            </div>

            <p class="text-center mt-5 mb-5 js-scroll fade-in-bottom">
                <a href="#orcamento" class="botao-4">
                    Quero meu orçamento
                </a>

            </p>

            <img class="js-scroll fade-in-bottom d-block m-auto mb-4 mt-4 desktop" style="width:100%;" src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-chamada.png", get_post_field('post_name', get_post()))); ?>">



        </div>

        <img class="js-scroll fade-in-bottom d-block mobile mt-4" style="width:100%;margin-bottom: -50px;" src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-chamada-mobile.png", get_post_field('post_name', get_post()))); ?>">

        <div class="bg-azul">

            <div class="container">

                <?php get_template_part("templates/produtos/content-itens"); ?>



                <?php get_template_part(sprintf("templates/produtos/content-slider-videos", get_post_field('post_name', get_post()))); ?>



                <?php get_template_part(sprintf("templates/produtos/%s/content-12", get_post_field('post_name', get_post()))); ?>

            </div>



        </div>



        <div class="js-scroll fade-in-bottom">
            <?php get_template_part("templates/produtos/content-10"); ?>
        </div>



        <?php

        $cat1 = (array) end($wpdb->get_results($wpdb->prepare("SELECT t1.term_id as 'cat_ID' , t1.name AS 'cat_name', t2.name AS parent_category, t3.name AS grandparent_category FROM {$wpdb->terms} t1 JOIN {$wpdb->term_taxonomy} tt1 ON tt1.term_id = t1.term_id JOIN {$wpdb->term_relationships} tr ON tr.term_taxonomy_id = tt1.term_taxonomy_id JOIN {$wpdb->posts} p ON p.ID = tr.object_id LEFT JOIN {$wpdb->term_taxonomy} tt2 ON tt2.term_taxonomy_id = tt1.parent LEFT JOIN {$wpdb->terms} t2 ON t2.term_id = tt2.term_id LEFT JOIN {$wpdb->term_taxonomy} tt3 ON tt3.term_taxonomy_id = tt2.parent LEFT JOIN {$wpdb->terms} t3 ON t3.term_id = tt3.term_id WHERE p.ID = %d AND tt1.taxonomy = 'category' ORDER BY tt1.parent DESC LIMIT 1", get_the_ID())));

        if (isset($cat1["cat_ID"])) :  ?>

            <div class="container desktop js-scroll fade-in-bottom">


                <a href="<?php echo get_category_link($cat1["cat_ID"]); ?>" class="category-desc">
                    <p>
                        Entenda mais sobre a tecnologia de <strong> <?php echo $cat1['cat_name']; ?> </strong>
                    </p>
                </a>
            </div>

        <?php endif; ?>
        <div class="container ">
            <?php get_template_part("templates/orcamento/content"); ?>

        </div>




    </section>

    <section class="links">
        <div class="container">
            <?php $text = get_post_meta(get_the_ID(), '_metabox_for_produtos_codigo', true);
            if ($text) :
            ?>
                <h2>Registro Anvisa:
                    <?php _e($text) ?>
                </h2>

            <?php endif; ?>

            <div class="list-links">
                <div>
                    <?php $text1 = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_duvida_frequentes', true);
                    if ($text1) :
                    ?>

                        <a href="<?php _e($text1) ?>" target="_blank"><i class="fa fa-question-circle	"></i> Dúvidas
                            frequentes</a>

                    <?php endif; ?>

                    <?php $text2 = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_ficha_tecnica', true);
                    if ($text2) :
                    ?>

                        <a href="<?php _e($text2) ?>" target="_blank"><i class="fa fa-file-text-o"></i> Ficha Técnica</a>

                    <?php endif; ?>


                    <?php $text3 = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_manual_de_instrucao', true);
                    if ($text3) :
                    ?>

                        <a href="<?php _e($text3) ?>" target="_blank"><i class="fa fa-book	"></i> Manual de instruções</a>

                    <?php endif; ?>




                </div>
                <div>


                    <?php $text4 = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_assistencia_express', true);
                    if ($text4) :
                    ?>


                        <a href="<?php _e($text4) ?>" target="_blank"><i class="material-icons">contact_phone</i> Assistência
                            express</a>

                    <?php endif; ?>

                    <?php $text5 = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_guia_rapido', true);
                    if ($text5) :
                    ?>

                        <a href="<?php _e($text5) ?>" target="_blank"><i class="material-icons">library_books</i> Guia
                            Rápido</a>

                    <?php endif; ?>
                    <?php $text6 = get_post_meta(get_the_ID(), '_metabox_for_produtos_link_videos_de_treinamento', true);
                    if ($text6) :
                    ?>

                        <a href="<?php _e($text6) ?>" target="_blank"><i class="fa fa-file-video-o	"></i>Vídeos de
                            treinamento</a>

                    <?php endif; ?>



                </div>

            </div>

        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">####</h5>
                    <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close" onClick="jQuery('#exampleModal').modal('hide')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modalBody" class="modal-body">
                    <iframe id="iframeURL" allowfullscreen allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" frameborder="0" style=" width: 100%; min-height: calc(100vh - 200px); "></iframe>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        (function($) {



            function showPopupIframe(title = "", url = "", iconClass = "") {

                $("#exampleModalLabel").html(`<i class="${iconClass}"></i> ${title}`);

                $('#exampleModal').modal('toggle');
                $('#iframeURL').attr("src", url);


            }


            $(".list-links a").on("click", function(e) {
                e.preventDefault();

                showPopupIframe($(this).text(), $(this).attr("href"), $(this).find("i").attr("class"));
            })

        })(jQuery);
    </script>

<?php endif; ?>

<?php get_footer(); ?>