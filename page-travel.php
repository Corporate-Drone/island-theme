<?php
get_header(); 
?>
<div>
    <?php
		echo do_shortcode('[smartslider3 slider="2"]');
	?>
</div>
<div class="container travel w-80">
    <?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 6,
            // 'category__not_in' => array( 10 ),
			'category__in' => array( 8,9,10)
		);

		$travel = new WP_Query( $args );

		if( $travel->have_posts() ):
			while( $travel->have_posts() ): 
				$travel->the_post();
		?>

		<div class="info-container">
			<?php get_template_part('template-parts/content', 'travel' ); ?>        
		</div>

		<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>
        	
</div>							

<?php get_footer(); ?>