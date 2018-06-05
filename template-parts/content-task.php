<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<?php
	/**
	 * retrieve all post meta of post
	 */
	$value = get_post_meta( $post->ID );

	/**
	 * task status
	 */
	$task_status = esc_attr ( $value['task_status'][0] );

	/**
	 * assignee
	 */
	 $assignee = esc_attr( $value['assignee'][0] );

	 /**
	  * class for task status
	  */
		$task_current_status = ( $task_status == 'on' ) ? 'completed' :'incompleted';

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( $task_current_status ) ); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				_s_posted_on();
				_s_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php _s_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '_s' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
			'after'  => '</div>',
		) );
		?>
		<div class="task-data">
				<input type="checkbox" name="" <?php checked( $task_status, 'on' ) ?> disabled>
				<label for=""><?php echo $task_current_status; ?></label>
				 by <?php echo $assignee = $value['assignee'][0]; ?>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php _s_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
