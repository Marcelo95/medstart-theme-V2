<div class="apresentacao-e-lista desktop">


    <div class="two-images">
        <img class="" src="<?php echo asset(sprintf("../templates/produtos/%s/images/apresentacao.png", get_post_field('post_name', get_post()))); ?>">
    </div>
    <div class="text-img">
        <?php get_template_part(sprintf("templates/produtos/%s/itens", get_post_field('post_name', get_post()))); ?>
    </div>
</div>

<img class="mb-3 mobile" style="width:100%; margin-top:-40px;  " src="<?php echo asset(sprintf("../templates/produtos/%s/images/apresentacao-mobile.png", get_post_field('post_name', get_post()))); ?>">