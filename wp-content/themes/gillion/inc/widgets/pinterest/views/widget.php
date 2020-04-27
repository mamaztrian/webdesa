<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); } ?>

<?php echo wp_kses_post( $before_widget ); ?>

	<?php
		if( $atts['title'] ) :
			echo '<div class="sh-widget-title-styling"><h3 class="widget-title">'.esc_attr( $atts['title'] ).'</h3></div>';
		endif;
	?>

	<?php if( $atts['board_url'] ) : ?>
		<a data-pin-do="embedBoard" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="<?php echo esc_url( $atts['board_url'] ); ?>"></a>
		<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
	<?php endif; ?>

<?php echo wp_kses_post( $after_widget ); ?>
