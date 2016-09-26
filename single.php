<?php get_header(); ?>

	<main class="container" role="main">

	<!-- section -->
	<section class="row">

		<div class="col-xs-4">

			<?php get_template_part('main-sidebar'); ?>
			<?php get_sidebar(); ?>

		</div>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article class="margin-top-20">

				<!-- article -->
				<article class="col-xs-8" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>

						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<div class="single-post-thumbnail" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
						</a>

					<?php endif; ?>
					<!-- /post thumbnail -->


					<div class="row">
						<!-- post title -->
						<div class="col-xs-12">
							<h1 class="single-post-header">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							</h1>

						</div>
						<!-- /post title -->



						<!-- post details -->
						<div class="single-post-details col-xs-12">
							<span class="date">
								<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
									<?php the_date(); ?> <?php the_time(); ?>
								</time>
							</span>
							<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
							<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
						</div>
						<!-- /post details -->

						<hr class="white-hr">
					</div>



					<!-- ~~~~~~~~~~~~~~~~~~~ -->
					<!-- 		THE CONTENT 	   -->
					<!-- ~~~~~~~~~~~~~~~~~~~ -->

					<div class="row">
						<div class="post-content col-xs-12">
							<?php the_content(); // Dynamic Content ?>

							<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

							<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

							<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

							<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
						</div>


						<!-- _________________ -->
						<!-- 		COMMENTS 	     -->

						<div class="col-xs-12">
							<?php comments_template(); ?>
						</div>

					</div>




				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>
		</article>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
