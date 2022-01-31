<?php
get_header(); 
?>

<div class="container faq mb-5 mt-5 w-80">
    <h1 class="fw-bold mb-5">Frequently asked questions</h1>
    <?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 7,
			'category__not_in' => array( 1,6 ),
			'category__in' => array( 7)
		);

		$faq = new WP_Query( $args );

		if( $faq->have_posts() ):
			while( $faq->have_posts() ): 
				$faq->the_post();
		?>

		<div>
			<?php get_template_part('template-parts/content', 'faq' ); ?>
		</div>

		<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>
        	
</div>							

<?php get_footer(); ?>