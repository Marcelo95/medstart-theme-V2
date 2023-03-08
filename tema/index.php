<?php get_header("home"); ?>

<?php get_template_part("templates/content-home"); ?>


<section class="title js-scroll fade-in-bottom scrolled">
    <h1 class="header-title font-1">O seu sucesso começa aqui!</h1>
</section>


<section class="products js-scroll  fade-in scrolled">
    <div class="container">

        <div class="slider-slick">
            <div class="slider-2">

                <?php $itens2 = new WP_Query(array('post_type' => 'produtos', 'post_status' => 'publish', 'posts_per_page' => 10, 'tag' => 'mostrar-na-home'));
                $itens2 = $itens2->posts;
                // $itens = array_merge([], $itens,$itens,$itens,$itens,$itens,$itens,$itens,$itens,$itens);

                foreach ($itens2 as $key => $item) {

                    $photo = asset_image_background(get_the_post_thumbnail_url($item->ID));
                    $link = sprintf('href="%s"', get_permalink($item->ID));
                    $title = $item->post_title;
                    $desc = $item->post_excerpt;
                    $cod = get_post_meta($item->ID, '_metabox_for_produtos_codigo', true);

                    echo sprintf('
                        
                            <div class="box-item-prod ">
                                <div class="item-photo " %s ></div>
                                <div class="all-details">
                                <h2 class="details_2 font-2">%s </h2>
                                <span class="details_1"> %s </span>     
                                <a %s class="botao-1">Confira</a>
                                </div>
                            </div>
                        
                    ', $photo,  $title, $desc, $link);
                }
                ?>


            </div>
            <div class="setas slider-2-setas noselect">
                <i class="fa fa-arrow-left  seta-esquerda"></i>
                <i class="fa fa-arrow-right seta-direita"></i>

            </div>

        </div>


    </div>
</section>

<section class="content-nossas-tecologia js-scroll fade-in">
    <div class="container">
        <div class="slider-slick">
            <div class="setas slider-1-setas noselect">

                <i class="material-icons seta-esquerda" style="font-size: 36px;margin-left: -7px;">keyboard_arrow_left</i>
                <h2 class="font-2"><?php echo __("Nossas tecnologias"); ?></h2>
                <i class="material-icons seta-direita" style="font-size: 36px;margin-left: -7px;">keyboard_arrow_right</i>

            </div>

            <div class="slider-1">

                <?php
                $marcas = get_terms(array(
                    'taxonomy' => 'category',
                    'hide_empty' => false,
                    'parent' => get_cat_ID('tecnologias'),
                ));


                foreach ($marcas as $key => $item) {
                    $style_img_bg = asset_image_background(get_term_meta($item->term_id, 'image', true));
                    echo sprintf('<a href="%s"><div class="marcas-photo font-2" %s >%s</div></a>', esc_url(get_term_link($item)), $style_img_bg, $item->name);
                }

                ?>
            </div>


        </div>


    </div>
</section>


<section class="box-unique-product box-estilo-1">

    <div class="container">

        <div class="box-prod-unique">
            <h2 class="details_2 font-2 js-scroll  fade-in-bottom">ETHERNIA CLINIC </h2>
            <span class="details_1 js-scroll  fade-in-bottom">

                A radiofrequência mais completa</span>
            <a href="<?php _e(home_url("produtos/ethernia-clinic")); ?>" class="botao-1 js-scroll  fade-in-bottom" tabindex="0">Confira</a>
            <img src="<?php echo asset("images/ethernia-clinic.png"); ?>" class="js-scroll  fade-in-bottom">

        </div>

    </div>

</section>

<section class="box-unique-product box-estilo-2">

    <div class="container">

        <div class="box-prod-unique">
            <h2 class="details_2 font-2 js-scroll  fade-in-bottom">Stim Med </h2>
            <span class="details_1 js-scroll  fade-in-bottom"> Única eletroestimulação portátil do mercado </span>
            <a href="<?php _e(home_url("produtos/stim-med")); ?>" class="botao-1 js-scroll  fade-in-bottom" tabindex="0">Confira</a>
            <img src="<?php echo asset("images/ultramax.png"); ?>" class="js-scroll  fade-in-bottom">

        </div>

    </div>

</section>



<?php

$itens = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'limit' => 10, 'tax_query' => array(
    array(
        'taxonomy' => 'post_tag',
        'field'    => 'name',
        'terms'    => 'novidades',
    ),
),));
$itens = (array) $itens->posts;

if (count($itens)) : ?>
    <section class="products box-novidades js-scroll  fade-in scrolled">
        <div class="container">
            <h2>NOVIDADES</h2>
            <div class="slider-slick">
                <div class="slider-2">

                    <?php

                    foreach ($itens as $key => $item) {

                        $photo = asset_image_background(get_the_post_thumbnail_url($item->ID), true);
                        $link = sprintf('href="%s"', get_permalink($item->ID));
                        $title = $item->post_title;
                        $desc = $item->post_excerpt;
                        $cod = get_post_meta($item->ID, '_metabox_for_produtos_codigo', true);

                        echo sprintf('
                            <a %s  class="box-item-prod ">
                                <div class="item-photo " %s ></div>
                                <div class="all-details">
                                <h2 class="details_2 font-2">%s <i class="material-icons">keyboard_arrow_right</i></h2>
                                <span class="details_1"> %s </span>     
                                </div>
                            </a>
                        
                    ', $link, $photo,  $title, $desc);
                    }
                    ?>


                </div>
                <div class="setas slider-2-setas noselect">
                    <i class="fa fa-arrow-left  seta-esquerda"></i>
                    <i class="fa fa-arrow-right seta-direita"></i>

                </div>

            </div>


        </div>
    </section>

<?php endif; ?>


<section class="only-text text-center js-scroll  fade-in-bottom">
    <div class="container">
        <p>
            Todos os produtos têm selos de qualidade
        </p>
        <div class="selos">
            <h2>ICBR INMETRO</h2>
            <h2>ABNT</h2>
            <h2>ANVISA</h2>
        </div>
        <div class="selos selos-images">
            <img src="<?php echo asset("images/selos/ncc.png"); ?>" alt="NCC">
            <img src="<?php echo asset("images/selos/iso.png"); ?>" alt="ISO-13485-2016">
            <img src="<?php echo asset("images/selos/gptw.png"); ?>" alt="GPTW">
            <img src="<?php echo asset("images/selos/patente.png"); ?>" alt="Patente Verde">
        </div>
    </div>
</section>


<section class="home-facilite-sua-vida">
    <div class="container ">

        <div class="col js-scroll  fade-in-bottom">
            <div class="box-text-left m-auto  ">
                <h2 class="js-scroll  ">
                    <span class="maior">
                        Facilite e simplifique o seu dia a dia 
                    </span>
                </h2>

                <a href="<?php echo home_url("category/tecnologias"); ?>" class="botao-1">Veja a linha completa</a>

            </div>
        </div>
        <div class="col col-small js-scroll  fade-in-bottom">
            <img src="<?php echo asset("images/mulher.png"); ?>" alt="Mulher">
        </div>
    </div>
</section>


<section class="mapa-home">
    <div class="container js-scroll  fade-in-bottom">
        <div class="col col-small">
            <img src="<?php echo asset("images/mapa-home.svg"); ?>" alt="Mapa">
        </div>
        <div class="col">
            <div class="box-text-left m-auto  ">
                <h2>
                    <span class="maior">
                        100
                    </span>
                    distribuidores
                    pelo Brasil
                </h2>

                <a href="<?php echo home_url("contato"); ?>" class="botao-1">Faça parte da nossa família</a>

            </div>
        </div>

    </div>
</section>



<section class="products box-blog js-scroll  fade-in-bottom">
    <div class="container">
        <img src="<?php echo asset("images/blog.svg"); ?>" alt="" class="d-block m-auto home-title-blof" alt="Blog">
        <div class="slider-slick">
            <div class="slider-3">

                <?php $itens = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'limit' => 10));
                $itens = $itens->posts;
                // $itens = array_merge([], $itens, $itens, $itens, $itens, $itens, $itens, $itens, $itens, $itens);

                foreach ($itens as $key => $item) {

                    $photo = asset_image_background(get_the_post_thumbnail_url($item->ID), true);
                    $link = sprintf('href="%s"', get_permalink($item->ID));
                    $title = $item->post_title;
                    $desc = $item->post_excerpt;
                    $cod = get_post_meta($item->ID, '_metabox_for_produtos_codigo', true);

                    echo sprintf('
                            <a %s  class="box-item-prod ">
                                <div class="area">
                                    <div class="item-photo " %s ></div>
                                    <div class="all-details">
                                    <h2 class="details_2 font-2">%s </h2>
                                    <span class="details_1"> %s </span>     
                                    <div class="botao-1 m-auto mt-3" tabindex="0">Confira</div>
                                    </div>
                                    
                                </div>                       
                            </a>
                        
                    ', $link, $photo,  $title, $desc);
                }
                ?>


            </div>
            <div class="setas slider-3-setas noselect">
                <i class="fa fa-arrow-left  seta-esquerda"></i>
                <i class="fa fa-arrow-right seta-direita"></i>

            </div>

        </div>


    </div>
</section>




<?php get_footer(); ?>