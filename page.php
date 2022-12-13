<?php
    get_header();
    global $post;
?>

	<main id="post-<?php the_ID(); ?>" class="l-page">
		<?php
			the_post();
            if($post->ID == 5){
                get_template_part( 'template-parts/content', 'home' );
            }else{
                get_template_part( 'template-parts/content', 'page' );
            }
		?>

	</main>

<?php
get_footer();
