<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aravalli
 */

get_header();
?>
<section class="blog-content bs-py-default">
	<div class="container">
		<div class="row g-5">
			<!-- Blog Posts -->
			<div class="<?php esc_attr(aravalli_post_layout()); ?>">
				<div class="row-cols-1 gy-4">
					<?php 		
						if( have_posts()) :  the_post();
						
						the_content(); 
						endif;
						
						if( $post->comment_status == 'open' ) { 
							 comments_template( '', true ); // show comments 
						}
					?>
				</div>                   
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>