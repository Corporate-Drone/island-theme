<?php
get_header(); 
?>

<div class="container stay w-80">
    <?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 6
		);

		$travel = new WP_Query( $args );

		if( $travel->have_posts() ):
			while( $travel->have_posts() ): 
				$travel->the_post();
		?>

		<div class="info-container">
			<?php get_template_part('template-parts/content', 'info' ); ?>        
		</div>

		<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>	
</div>	

<?php get_footer(); ?>