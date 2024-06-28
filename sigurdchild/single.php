<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
      Hello here sigurd
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the post format-specific template for the content. If you want
				 * to use this in a child theme, then include a file called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

				// Previous/next post navigation.
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
				endwhile;

        ?><h3>Event Details</h3>
        <p><?php echo(get_field('event_name'));?></p>
        <p><?php echo(get_field('event_date'));?></p>
        <p><?php echo(get_field('event_description')); ?></p>

        <h3>Reg Details</h3>
        <p><?php echo(get_field('name'));?></p>
        <p><?php echo(get_field('age'));?></p>
        <p><?php echo(get_field('gender')); ?></p>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();