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


            <div class="text-default js-scroll fade-in-bottom scrolled">
                <?php get_template_part(sprintf("templates/produtos/%s/content", get_post_field('post_name', get_post())), "priority"); ?>
            </div>

            <p class="text-center mt-5 mb-5 js-scroll fade-in-bottom">
                <a href="#orcamento" class="botao-4">
                    Quero meu orçamento
                </a>

            </p>


        </div>

        <img class="js-scroll fade-in-bottom d-block mobile mt-4" style="width:100%;margin-bottom: -50px;" src="<?php echo asset(sprintf("../templates/produtos/%s/images/banner-chamada-mobile.png", get_post_field('post_name', get_post()))); ?>">

        <div class="bg-azul by-single-produtos  js-scroll fade-in-bottom scrolled">

            <div class="container">

                <?php get_template_part("templates/content-itens-default"); ?>



                <?php get_template_part(sprintf("templates/produtos/content-slider-videos", get_post_field('post_name', get_post()))); ?>



                <?php get_template_part(sprintf("templates/produtos/%s/content-12", get_post_field('post_name', get_post()))); ?>

            </div>



        </div>



        <?php get_template_part(sprintf("templates/produtos/%s/content-antes-e-depois", get_post_field('post_name', get_post()))); ?>


        <?php do_action("EntendaMaisComponent"); ?>




        <div class="container ">
            <?php get_template_part("templates/orcamento/content"); ?>

        </div>




    </section>

    <?php do_action("LinksComponent"); ?>

 

<?php endif; ?>

<?php get_footer(); ?>