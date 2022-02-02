<?php 
    $containerType = null;
    if(in_category('Left Side')) {
        $containerType = 'info-container-left';
    } else if(in_category('Right Side')) {
        $containerType = 'info-container-right';
    }
?>


<div <?php post_class( array( 'class' => $containerType ) ); ?>>
    <div class="info-picture">
        <h2 class="picture-title">
            <?php the_post_thumbnail_caption(); ?>
        </h2>
        <?php the_post_thumbnail( 'large', array( 'class' => 'info-image' ) ); ?>
	</div>
    <div class="info-text d-flex justify-content-center align-items-center flex-column">
	    <h2 class="info-title fw-bold">
		    <?php the_title(); ?>
	    </h2>
	    <div>
		    <?php the_excerpt(); ?>
	    </div>
    </div>
</div>
