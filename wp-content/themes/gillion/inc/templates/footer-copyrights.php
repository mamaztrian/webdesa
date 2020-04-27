<?php
/**
 * Footer Copyrights HTML
 */

$style_val = gillion_option('copyright_style');
$style = ( isset( $style_val['style'] ) ) ? esc_attr($style_val['style']) : 'style1';
$style_atts = gillion_get_picker( $style_val );
$align = gillion_option('copyright_align', 'left');

$class = array();
$class[] = 'sh-copyrights-align-'.$align;

$logo = '';
$dev = 'https://shufflehound.com';
$text = '';
?>
	<div class="sh-copyrights <?php echo implode( ' ', $class ); ?>">
		<div class="container container-padding">
			<div class="sh-table">
				<div class="sh-table-cell">

					<?php if( gillion_option('copyright_align') != 'left2' ) : ?>

						<?php if( gillion_option_image('copyright_logo') ) : ?>
							<div class="sh-copyrights-logo">
								<img src="<?php echo esc_attr( gillion_option_image('copyright_logo') ); ?>" class="sh-copyrights-image" alt="" />
							</div>
						<?php endif; ?>
						<div class="sh-copyrights-info">
							<span class="developer-copyrights <?php echo (( gillion_option('copyright_deveveloper', true) == false ) ? ' sh-hidden' : '' ); ?>">
								<?php echo esc_html__( 'WordPress Theme built by', 'gillion' ); ?> <a href="<?php echo esc_attr( $dev ); ?>" target="blank">
									<strong><?php echo esc_html__( 'Shufflehound', 'gillion' ); ?></strong>.
								</a>
							</span>
							<span><?php echo wp_kses_post( gillion_remove_p( gillion_option('copyright_text') ) ); ?></span>
						</div>

					<?php else : ?>

						<?php if( gillion_option_image('copyright_logo') ) : ?>
							<div class="sh-copyrights-logo">
								<img src="<?php echo esc_attr( gillion_option_image('copyright_logo') ); ?>" class="sh-copyrights-image" alt="" />
							</div>
						<?php endif; ?>

					<?php endif; ?>

				</div>
				<div class="sh-table-cell">

					<?php if( gillion_option('copyright_align') != 'left2' ) : ?>

						<?php if ( has_nav_menu( 'footer' ) ) :
							wp_nav_menu( array(
								'theme_location' => 'footer',
								'depth' => 1,
								'container_class' => 'sh-nav-container',
								'menu_class' => 'sh-nav'
							));
						endif; ?>

					<?php else : ?>

						<div class="sh-copyrights-info">
							<span class="developer-copyrights <?php echo (( gillion_option('copyright_deveveloper', true) == false ) ? ' sh-hidden' : '' ); ?>">
								<?php echo esc_html__( 'WordPress Theme built by', 'gillion' ); ?> <a href="<?php echo esc_attr( $dev ); ?>" target="blank">
									<strong><?php echo esc_html__( 'Shufflehound', 'gillion' ); ?></strong>.
								</a>
							</span>
							<span><?php echo wp_kses_post( gillion_remove_p( gillion_option('copyright_text') ) ); ?></span>
						</div>

						<?php if ( has_nav_menu( 'footer' ) ) :
							wp_nav_menu( array(
								'theme_location' => 'footer',
								'depth' => 1,
								'container_class' => 'sh-nav-container',
								'menu_class' => 'sh-nav'
							));
						endif; ?>

					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
