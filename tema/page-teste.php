<?php get_header(); ?>

<?php


// Obtém o conteúdo do post ou página
$content = get_post_field( 'post_content', get_the_ID() );

// Define o ID do elemento que deseja exibir
$el_id = 'teste4';

// Cria a expressão regular para localizar o shortcode específico
$regex = '/\[bt_bb_accordion[^]]* el_id="' . preg_quote( $el_id, '/' ) . '"[^]]*].*?\[\/bt_bb_accordion\]/s';

// Localiza o shortcode no conteúdo do post ou página
preg_match( $regex, $content, $matches );

// Se o shortcode for encontrado, exibe o conteúdo dentro do shortcode
if ( isset( $matches[0] ) ) {
   //echo $matches[0];
   echo do_shortcode( $matches[0] );
} else {
    echo  "Nenhum elemento do Bold Builder encontrado com ID $el_id";
}
?>
<?php //get_template_part('templates/content'); ?>
<?php get_footer(); ?>