<?php $linha_do_tempo = [
    [
        "ano" => 1994,
        "foto" => "1994.png",
        "texto" => "Na garagem de casa, Mauro A.N. dos Santos e a esposa, Ivanir, abrem a empresa Vitória Therapeutic, de compra e revenda de equipamentos ortopédicos e de fisioterapia. "
    ],
    [
        "ano" => 2013,
        "foto" => "2013.png",
        "texto" => "Com muita fé, trabalho e dedicação, surge a Medical San, uma fábrica no segmento de produtos para saúde. O San é uma referência ao sobrenome dos fundadores.
        "
    ],    [
        "ano" => 2014,
        "foto" => "2014.png",
        "texto" => "Além de mudar a sede para a cidade vizinha, a Medical San conquista as certificações do Inmetro e da Anvisa, iniciando um ousado projeto de expansão

        "
    ],
    [
        "ano" => 2017,
        "foto" => "2017.png",
        "texto" => "É lançado o Criodermis®,
        a maior revolução em criolipólise que já existiu no segmento. Rapidamente se torna um sucesso de vendas no Brasil.
        "
    ],
    [
        "ano" => 2019,
        "foto" => "2019.png",
        "texto" => "
        A Medical San começa a participar de grandes eventos e congressos nacionais e internacionais, expandindo sua atuação.

        "
    ],
    [
        "ano" => 2020,
        "foto" => "2020.png",
        "texto" => "
        Foi criada a Linha Smart®, com produtos compactos e de fácil transporte, além do conceito Black Experience, com tecnologias de altíssimo nível.

        "
    ],
    [
        "ano" => 2020,
        "foto" => "2020.png",
        "texto" => "
        Foi criada a Linha Smart®, com produtos compactos e de fácil transporte, além do conceito Black Experience, com tecnologias de altíssimo nível.

        "
    ],
    [
        "ano" => 2021,
        "foto" => "2021.png",
        "texto" => "
        O lançamento do Ultramed® eleva a Medical San ao patamar das maiores e melhores fabricantes de equipamentos médicos e estéticos do Brasil.

        "
    ],
    [
        "ano" => 2022,
        "foto" => "2022.png",
        "texto" => "
        A empresa conquista a certificação MDSAP, que a habilita a produzir equipamentos Classe III. O Hakon®, laser 4D para epilação, é apresentado. "
    ],    
    
    [
        "ano" => 2022,
        "foto" => "2022-1.png",
        "texto" => "É lançado o Ômer Premium e o Ômer Smart, equipamentos de alta tecnologia para despigmentação e remoção de tatuagens."
    ],    
    [
        "ano" => 2022,
        "foto" => "2022-2.png",
        "texto" => "No mesmo ano, é lançada uma nova marca, a MedStart®."
    ],    
    [
        "ano" => 2022,
        "foto" => "2022-3.png",
        "texto" => "A atriz e apresentadora Mariana Rios vira embaixadora do Grupo Medical San, que fica entre as 5 empresas que mais crescem no Brasil no ranking da Exame."
    ],  
      [
        "ano" => 2022,
        "foto" => "2022-4.png",
        "texto" => "Como coroamento do ano de 2022, em dezembro foi inaugurada a nova sede do Grupo Medical San, no 386 Business Park."
    ],

]; ?>


<section class="content-linha-do-tempo">

    <div class="container">


        <h2>Nossa trajetória</h2>

        <div class="sombras-left-right">
            <div id="linha-scroll" class="linha-scroll">
                <div class="init-linha-do-tempo">

                    <?php foreach ($linha_do_tempo as $key => $v) { ?>
                        <div class="linha-item">
                            <div class="item_top">
                                <img src="<?php echo asset(sprintf("images/linha-do-tempo/%s", $v["foto"])); ?>" width="332" height="188">
                            </div>
                            <div class="item_middle">
                                <?php _e($v["ano"]); ?>

                                <div class=" text-mobile mobile">
                                    <?php _e($v["texto"]); ?>

                                </div>
                            </div>
                            <div class="item_bottom">
                                <?php _e($v["texto"]); ?>

                            </div>

                        </div>


                    <?php } ?>



                </div>

            </div>
        </div>

    </div>


    <script>
       if(  /Mobi/i.test(window.navigator.userAgent) == false){
         var startX;
        var scrollLeft;
        var isDragging = false;
        var minhaDiv = document.getElementById("linha-scroll");

        // adiciona os listeners de eventos
        minhaDiv.addEventListener("mousedown", function(e) {
            startX = e.pageX - minhaDiv.offsetLeft;
            scrollLeft = minhaDiv.scrollLeft;
            isDragging = true;
        });

        minhaDiv.addEventListener("touchstart", function(e) {
            startX = e.touches[0].pageX - minhaDiv.offsetLeft;
            scrollLeft = minhaDiv.scrollLeft;
            isDragging = true;
        });

        minhaDiv.addEventListener("mousemove", function(e) {
            if (!isDragging) return;
            e.preventDefault();
            var x = e.pageX - minhaDiv.offsetLeft;
            var walk = (x - startX) * 2; // aumenta a velocidade da rolagem
            minhaDiv.scrollLeft = scrollLeft - walk;
        });

        minhaDiv.addEventListener("touchmove", function(e) {
            if (!isDragging) return;
            e.preventDefault();
            var x = e.touches[0].pageX - minhaDiv.offsetLeft;
            var walk = (x - startX) * 2; // aumenta a velocidade da rolagem
            minhaDiv.scrollLeft = scrollLeft - walk;
        });

        minhaDiv.addEventListener("mouseup", function() {
            isDragging = false;
        });

        minhaDiv.addEventListener("touchend", function() {
            isDragging = false;
        });}
    </script>


</section>