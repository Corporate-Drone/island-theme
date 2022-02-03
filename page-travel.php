<?php
get_header(); 
?>
<div class="image-header">
    <?php
		echo do_shortcode('[smartslider3 slider="5"]');
	?>
</div>
<div class="container travel w-80">
    <?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 6,
            'category__not_in' => array( 6, 11, 12 ),
			'category__in' => array( 8,9,10)
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

<div class="footer-image">
        <?php
		    echo do_shortcode('[smartslider3 slider="8"]');
		?>
    </div>

<?php get_footer(); ?>