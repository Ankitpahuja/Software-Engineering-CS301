<?php if( get_header_image() ) { ?>
<!-- header image -->
<div class="foxeed-header-image">
	<img alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="ad-slider-image"  src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" />
</div>
<?php } ?>