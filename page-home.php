<?php
get_header(); 
?>
    <div class="home-header">
        <?php
			echo do_shortcode('[smartslider3 slider="2"]');
		?>
</div>
    <div class="container w-80 home info-container">
        <div class="info-container-left">
            <?php 
		    if( is_active_sidebar( 'info-1-picture' ) ){
			    dynamic_sidebar( 'info-1-picture' );
			    }
		    ?>
            <?php 
		    if( is_active_sidebar( 'info-1-text' ) ){
			    dynamic_sidebar( 'info-1-text' );
			    }
		    ?>
        </div>
        <div class="info-container-right">
        <?php 
		    if( is_active_sidebar( 'info-2-picture' ) ){
			    dynamic_sidebar( 'info-2-picture' );
			    }
		    ?>
            <?php 
		    if( is_active_sidebar( 'info-2-text' ) ){
			    dynamic_sidebar( 'info-2-text' );
			    }
		    ?>
        </div>
        <div class="info-container-left">
            <?php 
		    if( is_active_sidebar( 'info-3-picture' ) ){
			    dynamic_sidebar( 'info-3-picture' );
			    }
		    ?>
            <?php 
		    if( is_active_sidebar( 'info-3-text' ) ){
			    dynamic_sidebar( 'info-3-text' );
			    }
		    ?>
        </div>
    </div>

    <div class="home-footer-image">
        <?php
		    echo do_shortcode('[smartslider3 slider="3"]');
		?>
    </div>
<?php get_footer(); ?>