<article <?php post_class( array( 'class' => 'mb-5 border-bottom border-dark' ) ); ?>>
	<a class="question text-decoration-none text-dark" data-bs-toggle="collapse" href="#collapse<?php echo get_the_ID() ?>">
	<h2 class="fw-bold">
		<?php the_title(); ?>
	</h2>
	</a>
	<div class="collapse" id="collapse<?php echo get_the_ID() ?>">
		<?php the_excerpt(); ?>
	</div>
</article>