<?php
/**
 * Author Page
 */

$elements = gillion_option( 'post_elements' );
set_query_var( 'style', 'masonry' );
get_header();
?>

<div id="content" class="content-with-sidebar-right">

	<?php if( ( !defined('FW') || ( isset($elements['athor_box']) && $elements['athor_box'] == true ) ) && get_the_author_meta( 'description' ) ) : ?>
		<div class="sh-post-author sh-table">
			<div class="sh-post-author-avatar sh-table-cell-top">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), '185' ); ?>
			</div>
			<div class="sh-post-author-info sh-table-cell-top">
				<div>
					<h1><?php the_author(); ?></h1>
					<div><?php the_author_meta( 'description' ); ?></div>
					<div class="sh-post-author-icons">
						<?php
							$userinfo = get_userdata( get_the_author_meta( 'ID' ) );
							if( $userinfo->user_url ) :
								echo '<a href="'.esc_url( $userinfo->user_url ).'" target="_blank"><i class="fa fa-globe"></i></a>';
							endif;

							$usermeta = get_user_meta( get_the_author_meta( 'ID' ) );
							$meta_fields = array( 'facebook', 'twitter', 'google-plus', 'instagram', 'linkedin', 'pinterest', 'tumblr', 'youtube' );
							foreach( $meta_fields as $meta) :

								$this_meta = ( isset( $usermeta[$meta][0] ) && $usermeta[$meta][0] ) ? $usermeta[$meta][0] : '';
								if( $this_meta ) :
									echo '<a href="'.esc_url( $this_meta ).'" target="_blank"><i class="fa fa-'.esc_attr( $meta ).'"></i></a>';
								endif;

							endforeach;
						?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="sh-group blog-list blog-style-masonry masonry-shadow">

		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();

					if( get_post_format() ) :
						get_template_part( 'content', 'format-'.get_post_format() );
					else :
						get_template_part( 'content' );
					endif;

				endwhile;
			else :

				get_template_part( 'content', 'none' );

			endif;
		?>
	</div>
	<?php gillion_pagination(); ?>

</div>
<div id="sidebar" class="sidebar-right">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
