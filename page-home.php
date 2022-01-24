<?php
get_header(); 
?>
    <div class="container w-80 home">
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
<?php get_footer(); ?>