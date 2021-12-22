<?php 
	$aravalli_blog_hs 			= get_theme_mod( 'blog_hs','1');
	$aravalli_blog_title  		= get_theme_mod( 'blog_title'); 
	$aravalli_blog_subtitle 	= get_theme_mod( 'blog_subtitle'); 
	$aravalli_blog_description 	= get_theme_mod( 'blog_description'); 
	$aravalli_blog_display_num 	= get_theme_mod( 'blog_display_num','3');
	if($aravalli_blog_hs == '1'){
?>		
<div id="blog-grid" class="blog-section sec-default home-blog">
	<div class="container">
		<?php if(!empty($aravalli_blog_title ) || !empty($aravalli_blog_subtitle) || !empty($aravalli_blog_description)): ?>
			<div class="row">
				<div class="col-12">
					<div class="heading-default wow fadeInUp">
					
						<?php if(!empty($aravalli_blog_title )): ?>
							<h6><?php echo wp_kses_post($aravalli_blog_title ); ?></h6>
						<?php endif; ?>	
						
						<?php if(!empty($aravalli_blog_subtitle)): ?>
							<h3><?php echo wp_kses_post($aravalli_blog_subtitle); ?><span class="line-circle"></span></h3>      
						<?php endif; ?>		
						
						<?php if(!empty($aravalli_blog_description)): ?>				
							<p> <?php echo esc_html($aravalli_blog_description); ?></p>
						<?php endif; ?>		
						
					</div>
				</div>
			</div>
		<?php endif; ?>	
		<div class="row">
			<?php 	
				$aravalli_blog_args = array( 'post_type' => 'post', 'posts_per_page' => $aravalli_blog_display_num,'post__not_in'=>get_option("sticky_posts")) ; 	
				$aravalli_wp_query = new WP_Query($aravalli_blog_args);
				if($aravalli_wp_query)
				{	
				while($aravalli_wp_query->have_posts()):$aravalli_wp_query->the_post(); ?>
					<div class="col-lg-4 col-md-6 col-12 load-blog">
						<?php get_template_part('template-parts/content/content','page'); ?>
					</div>
			<?php 
				endwhile; 
				}
				wp_reset_postdata();
			?>
		</div>
	</div>
</div>
<?php } ?>