
<div class="link-topo">
    <a href="#" class="topo font-2">
    <i class="material-icons" style="font-size:36px">keyboard_arrow_up</i>
    Topo
    </a>
</div>
<div class="bg-top-footer"></div>
<footer>

    <div class="container">

        <div id="footer-bloco-level-0" class=" ">
            <div id="widget_1_3_footer" class="primary-sidebar widget-area" role="complementary">
                <h2><a href="<?php echo home_url("/"); ?>"><?php echo _("Home"); ?></a></h2>

                <?php if (is_active_sidebar('widget_1_3_footer')) : ?>

                    <?php dynamic_sidebar('widget_1_3_footer'); ?>

                <?php endif; ?>
            </div>

            <div id="widget_2_3_footer" class="primary-sidebar widget-area" role="complementary">

                <?php if (is_active_sidebar('widget_2_3_footer')) : ?>
                    <?php dynamic_sidebar('widget_2_3_footer'); ?>

                <?php endif; ?>
            </div>
            <div id="widget_2_3_footer" class="primary-sidebar widget-area" role="complementary">

                <h2><a href="<?php echo home_url("/sobre"); ?>"><?php echo _("Sobre"); ?></a></h2>
                <h2><a href="<?php echo home_url("/onde-estamos"); ?>"><?php echo _("Onde Estamos"); ?></a></h2>
                <h2><a href="<?php echo home_url("/pos-venda"); ?>"><?php echo _("Pós-venda"); ?></a></h2>
                <h2><a href="<?php echo home_url("/blog"); ?>"><?php echo _("Blog"); ?></a></h2>

            </div>
            <div id="widget_3_3_footer" class="primary-sidebar widget-area" role="complementary">
                <h2><?php echo __("Redes Sociais"); ?></h2>
                <div class="list-redes image-mouseover">
                    <a href="https://facebook.com/medsam.oficial" class="btn btn-link "> <i class="fa fa-facebook-square	"></i> </a>
                    <a href="https://instagram.com/medsam.com.br" class="btn btn-link"> <i class="fa fa-instagram"></i> </a>
                    <a href="https://youtube.com.br/ClubeDasEmpreendedoras" class="btn btn-link"><i class="fa fa-youtube-play		"></i> </a>
                </div>
                <?php if (is_active_sidebar('widget_3_3_footer')) : ?>
                    <?php dynamic_sidebar('widget_3_3_footer'); ?>
                <?php endif; ?>



                <h2>
                    <a class="point-marker" href="https://goo.gl/maps/tVHrkVCUxUnRbAxT9" target="_blank" rel="noopener noreferrer">
                       <i class="fa fa-map-marker	"></i> <span>386 Business Park <br>
                        Rodovia BR-386, km 357. Estrela - RS</span>
                    </a>


                </h2>
            </div>


        </div>

        <div id="footer-bloco-level-1">

            <?php echo _("Medical San 2023. Todos Os Direitos Reservados."); ?>

        </div>


    </div>

</footer>



<script src="<?php echo asset('bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo asset('js/script.js'); ?>"></script>
<script src="<?php echo asset('js/custom-animate.js'); ?>"></script>
<?php wp_footer(); ?>
</body>

</html>