<?php get_header("categorias"); ?>

<?php

$cat_id = get_query_var('cat');

$args = array(
    'child_of' => $cat_id,
    'orderby' => 'name',
    'order' => 'ASC'
);
$categories = get_categories($args);



?>

<main class="main main-categories">
    <div class="mt-4 container desktop">
        <?php custom_breadcrumbs(); ?>
    </div>

    <div class="banner-categories">
        <div class="container">
            <h1> A MedStart tem os equipamentos ideais para o começo do seu sucesso! </h1>

            <h2>
                Escolha a tecnologia e confira nossos produtos:
            </h2>
        </div>
    </div>

    <section class="container">
        <div class="lista-categories-prods">

            <?php foreach ($categories as $category) {



                $slug = $category->slug;
                $image_prod = asset(sprintf("../templates/categories/images/png/%s.png", $category->slug));
                $name = $category->name;
                $link = get_category_link($category->term_id);

                echo sprintf('
                <div class="item-%s" >
                <div>
                        <div class="logo-image">
                            <img class="imagem-frente js-scroll fade-in-bottom scrolled" src="%s" >
                        </div>
                        <div class="logo-and-text">
                            <h2>%s  </h2>
                            <a href="%s" class="botao-5">
                                Conheça
                            </a>
                        </div>
                    
                </div></div>

            ', $slug, $image_prod, $name, $link);
            }
            ?>


        </div>
    </section>
    <!-- /section -->
</main>


<?php get_footer(); ?>