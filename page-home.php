<?php
get_header(); 
?>
    <div class="home-header">
        <?php
			echo do_shortcode('[smartslider3 slider="2"]');
		?>
</div>

	<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 6,
            'category__not_in' => array( 9, 11, 12 ),
			'category__in' => array( 6, 8, 10)
		);

		$travel = new WP_Query( $args );

		if( $travel->have_posts() ):
			while( $travel->have_posts() ): 
				$travel->the_post();
	?>

    <div class="container w-80 home info-container">
		<?php get_template_part('template-parts/content', 'info' ); ?>        
    </div>

	<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>

    <div class="home-footer-image">
        <?php
		    echo do_shortcode('[smartslider3 slider="3"]');
		?>
    </div>
<?php get_footer(); ?>