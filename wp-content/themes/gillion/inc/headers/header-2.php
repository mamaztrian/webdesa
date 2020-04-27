<?php
	/* HEADER 2 */

	if ( ! function_exists( 'gillion_nav_wrap' ) ) :
		function gillion_nav_wrap() {
			ob_start();
		    	gillion_nav_wrap_readlater();
		    $read_later = ob_get_clean();

		    $wrap  = '<ul id="%1$s" class="%2$s">%3$s';
			$wrap .= gillion_nav_wrap_sidemenu();
			$wrap .= gillion_nav_wrap_search();
			$wrap .= gillion_nav_wrap_share();
			$wrap .= gillion_nav_wrap_login();
			$wrap .= gillion_nav_wrap_cart();
		    $wrap .= $read_later;
			$wrap .= ( function_exists( 'gillion_purchase_button' ) ) ? gillion_purchase_button() : '';
		    $wrap .= '</ul>';

		    return $wrap;
		}
	endif;
?>

<?php /* Header */ ?>
<div class="sh-header-height">
	<div class="<?php gillion_header_classes( 2 ); ?>">
		<div class="container">
			<div class="sh-table">
				<div class="sh-table-cell sh-header-logo-container">

					<?php /* Header logo */ ?>
					<nav class="header-standard-position">
						<div class="sh-nav-container">
							<ul class="sh-nav sh-nav-left">
								<li>
									<?php /* Header logo */ ?>
									<?php gillion_header_logo(); ?>
								</li>
							</ul>
						</div>
					</nav>

				</div>
				<div class="sh-table-cell sh-header-nav-container">

					<?php /* Header navigation */ ?>
					<nav id="header-navigation" class="header-standard-position">
						<?php if ( has_nav_menu( 'header' ) ) : ?>
							<?php
								global $blog_id;
								$current_blog_id = $blog_id;
								apply_filters( 'gillion_before_header_nav', $current_blog_id );

								echo gillion_compress( wp_nav_menu( array(
									'theme_location' => 'header',
									'depth' => 4,
									'container_class' => 'sh-nav-container',
									'menu_class' => 'sh-nav',
									'items_wrap' => gillion_nav_wrap(),
									'echo' => false
								)));

				 				apply_filters( 'gillion_after_header_nav', $current_blog_id );
							?>
						<?php else :
							gillion_asign_menu();
						endif; ?>
					</nav>

				</div>
			</div>
		</div>

		<?php
			/* Header popup search */
			get_template_part('inc/headers/header-search');
		?>
	</div>
</div>
