<?php
/**
 * Nothing found
 */
?>
<div class="sh-nothing-found sh-table">
	<div class="sh-table-cell-top">
		<i class="icon-compass"></i>
	</div>
	<div class="sh-table-cell-top">
		<h2><?php esc_html_e( 'Nothing Found', 'gillion' ); ?></h2>
		<p>
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
				<?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'gillion' ), gillion_allowed_html() ), admin_url( 'post-new.php' ) ); ?>
			<?php elseif ( is_search() ) : ?>
				<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'gillion' ); ?>
			<?php else : ?>
				<?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'gillion' ); ?>
			<?php endif; ?>
		</p>
	</div>
</div>

<div class="sh-nothing-found-big">
	<span><?php esc_html_e( 'Sorry', 'gillion' ); ?></span>
	<div><?php esc_html_e( 'Nothing found', 'gillion' ); ?></div>
</div>
