<section
        class="boxes-img-text <?php echo 'css-' . get_post_field('post_name', get_post()); ?> js-scroll fade-in-bottom">
        <div class="container text-center">
                <div class="boxes box-esq">
                        <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/bg-quad-1.png", get_post_field('post_name', get_post()))); ?>"
                                alt="">

                        <div>
                                <p>
                                        Um único aplicador para diversas frequências
                                </p>

                        </div>
                </div>
                <div class="boxes box-dir">
                        <img src="<?php echo asset(sprintf("../templates/produtos/%s/images/bg-quad-2.png", get_post_field('post_name', get_post()))); ?>"
                                alt="">
                        <div>
                                <p>
                                        Ajuste de potência em um toque
                                </p>
                        </div>
                </div>
        </div>
</section>