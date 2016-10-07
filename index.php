<?php get_header(); ?>

	<main role="main" class="container">
		<!-- section -->
		<section class="row">


			<div class="col-xs-4">

				<?php get_template_part('main-sidebar'); ?>
				

			</div>

			<div class="col-xs-8">

				<h1 class="col-xs-12"><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

				<div class="col-xs-12">

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>
				</div>

			</div>



		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
